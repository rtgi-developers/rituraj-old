<?php  
// Session name
session_name("omsacct");

// Set session time
ini_set('session.gc_maxlifetime', 7200);

// Start session
session_start();

// Validate active user account session
if(!empty($_SESSION['user_name'])){
	// Get users data from active session
	$activeUserName  = $_SESSION['user_name']; 
	$activeUserEmail = $_SESSION['user_email']; 
	$activeUserType  = $_SESSION['user_type'];

	// Log users activity
	$requestUri 	= $_SERVER['REQUEST_URI'];
	$requestMethod 	= $_SERVER['REQUEST_METHOD'];
	$requestTime 	= date('Y-m-d H:i:s');

	/**
	 * Function to get client/visitors/users ip address
	 * @return [type] [description]
	 */
	function getClientIP()
	{
	    $ipaddress = 'UNKNOWN';
	    $keys=array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
	    foreach($keys as $k)
	    {
	        if (isset($_SERVER[$k]) && !empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP))
	        {
	            $ipaddress = $_SERVER[$k];
	            break;
	        }
	    }
	    return $ipaddress;
	}

	// User identity
	$userIp    = getClientIP();
	$userAgent = $_SERVER['HTTP_USER_AGENT'];

	// Include database connection if not exist
	if(!isset($db)) require($app_root.'config/database.php');

	// Query to insert active users log in database	
	$query = $db->query("INSERT INTO user_logs 
		VALUES(NULL, '$requestUri', '$requestMethod', '$requestTime', 
		'$userIp', '$activeUserEmail', '$userAgent')");

	// Log out user if an error in query 
	if(!$query) header("location: ".$app_path."users/logout"); // Logout user	
}
else header("location: ".$app_path."errors/session_error"); // Redirect to session exipred page

// Close session
session_write_close();
?>