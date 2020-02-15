<?php  
// Prevent script access without system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// System configuration files
require($app_root.'config/database.php');

// System libraries
require($app_root.'library/custom/helpers.php');
$helper = new Helpers();

/*
|----------------------------------------------------
| Login form process
|----------------------------------------------------
*/
if(isset($_POST['btnLogin'])){
	// User inputs
	$username  = $_POST['txtUsername'];
 	$password  = $_POST['txtPassword'];
 	$secToken  = $_POST['g-recaptcha-response'];

	// Validate user inputs
	if(isset($username) && isset($password) && isset($secToken))
	{	
		// 	Verify users response google reCaptcha
	 	$ReCaptchaRequest = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$secToken}");
	 	$ReCaptchaResponse = json_decode($ReCaptchaRequest);
		
		// Validate google recaptcha response
		if($ReCaptchaResponse->success == true && $ReCaptchaResponse->score > 0.5)
		{	
			// Encrypt back the password using salt hashing algo
			$password = $helper->hashPassword($password);

			// Query to get user details
			$query = $db->query("SELECT * FROM user_login 
				WHERE username = '$username' 
				AND password = '$password'");

			// Validate non-empty query result
			if($query->num_rows > 0){
				// Get query result
				$result = $query->fetch_array();

				// Set session name
				session_name($sess_name);

				// Cookie expire time
				ini_set('session.gc_maxlifetime', 7200);

				// Start session
				session_start();

				// Set session variables
				$_SESSION['name'] 	    = $result['name'];
				$_SESSION['user_name']  = $result['name'];
				$_SESSION['user_email'] = $result['email'];
				$_SESSION['user_type']  = $result['account_type'];

				// Redirect to homepage
				//header("location: https://orientoriginals.net/oms/apps/home/homepage");
				$loginStatus = '
					<script>
						window.location.href="https://orientoriginals.net/oms/apps/home/homepage";
					</script>
				';
				echo json_encode(array('success'=>true, 'data'=>$loginStatus));
			}
			else{
				// Invalid login credentials
				$loginStatus = $helper->showMsg('danger', '<small>Incorrect username or password.</small>');
				echo json_encode(array('success'=>false, 'data'=>$loginStatus));
			}
		}
		else{
			// Google reCaptcha verification error
			$loginStatus = $helper->showMsg('warning', '<small class="text-justify"><p>We\'re really sorry about this, but your computer or network may be sending automated queries.</p> <p>To protect our system and users data, we can\'t process your request right now.</p> <p>Please reload the page and try again.</p></small>', 'Might be a robot!');
			echo json_encode(array('success'=>false, 'data'=>$loginStatus));
		}
	}
	else{
		// Missing or invalid inputs
		$loginStatus = $helper->showMsg('danger', '<small>Please fill all required details.</small>');
		echo json_encode(array('success'=>false, 'data'=>$loginMsg));
	}
	
}

/*
|----------------------------------------------------
| Other process
|----------------------------------------------------
*/
