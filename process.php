<?php 
// Load database configuration
require_once($_SERVER['DOCUMENT_ROOT'].'/config/ConnString.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/phpmailer/PHPMailerAutoload.php');

if(isset($_POST['btnTest'])){
	echo "Testing";

}

/*
|--------------------------
|   CANDIDATE JOB APPLY
|--------------------------
*/
if(isset($_POST['btnApply'])){
	//if($config['environment'] == 'production'){
	$candName = mysqli_real_escape_string($conn, $_POST['txtName']);
	$candMobile = mysqli_real_escape_string($conn, $_POST['txtMobile']);
	$candEmail = mysqli_real_escape_string($conn, $_POST['txtEmail']);
	$candPos = mysqli_real_escape_string($conn, $_POST['txtPos']);
	$applDate = date('Y-m-d');

	//upload candidate cv
	ini_set('upload_max_filesize', '20M');
	$fileName = $_FILES["filCV"]["name"];
	$tempName = $_FILES["filCV"]["tmp_name"];
	$fileType = $_FILES["filCV"]["type"];
	$fileSize = $_FILES["filCV"]["size"];

	$fp = fopen($tempName, 'r');
	$content = fread($fp, filesize($tempName));
	$content = mysqli_real_escape_string($conn, $content);

	fclose($fp);

	if(!get_magic_quotes_gpc()){
		$fileName = mysqli_real_escape_string($conn, $fileName);
	}

	// Query to insert candidate detail in database
	$sql_cand = $conn->query("INSERT INTO candidate(cand_name, cand_mobile, cand_email, cand_pos, appl_date, file_name, file_type, file_size, file_content) VALUES('$candName', '$candMobile', '$candEmail', '$candPos', '$applDate', '$fileName', '$fileType', '$fileSize', '$content')"); 
	/*or die("An error occured: ".$conn->error);*/

	// On successful query inserts
	if($sql_cand){
		$mail = new PHPMailer;
		$mail->setFrom('hrnotification@rituraj.com', 'HR Notifications');
		$mail->addAddress('rb@orientoriginals.com', 'Rituraj Baijal');
		//$mail->addAddress('shiv@rituraj.com', 'Shiv Prasad Gairola');
		//$mail->addAddress('accounts@orientoriginals.com', 'Muhammad Tarique');
		//$mail->addAddress('tarique@rituraj.com', 'Muhammad Tarique');
		//$mail->addCustomHeader("CC: tarique@rituraj.com");
		$mail->Subject 	= 'New job application';
		$mail->isHTML(true);
		$mail->Body = 'Hello,';
		$mail->Body.= '<p>You have a new job application for your review. Please review the submission and attached resume.</p>';
		$mail->Body.= '<style>
			.head{border: 1px solid black; background-color: #eee;}
			.cell{border: 1px solid black;}
		</style>';
		$mail->Body .= '<table rules="all" cellpadding="10" cellspacing="0">
		<tr><td class="head">Name</td><td class="cell">'.$candName.'</td></tr>
		<tr><td class="head">Position</td><td class="cell">'.$candPos.'</td></tr>
		<tr><td class="head">Mobile</td><td class="cell">'.$candMobile.'</td></tr>
		<tr><td class="head">Email</td><td class="cell">'.$candEmail.'</td></tr>
		</table>';
		//$mail->Body .= '<a href="www.rituraj.com/candlist.php">See full candidate list</a>';
		$mail->Body .= '<h4>Regards,<br>
							Recruitment Team,<br>RTGI</h4>';
					
		$mail->Body .= '<p><em>This is an automatically system generated email, please do not reply to it.</em></p>';
		$mail->AddAttachment($tempName, $fileName);

		// Check if email sent
		if(!$mail->send()) {
		  echo '<div class="alert alert-danger alert-dismissable text-center">
			 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  	An error occured. Unable to process your request.</div>';
		} 
		// If email not sent
		else {
			echo '<div class="alert alert-success alert-dismissable text-center"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
			  Thank you for applying to this possition. We will contact you once your resume is shortlisted.</div>';
		}
	}
	// If query failed
	else{
		echo '
			<div class="alert alert-danger alert-dismissable text-center">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
			  	<strong>Unable to process your request due to following error: </strong>
			  	<br>'.$conn->error.'
			</div>';
	}
	/*} // End environment check
	else{
		echo '<div class="alert alert-success alert-dismissable text-center"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
			  Thank you for applying to this possition. We will contact you once your resume is shortlisted.</div>';
	}*/

}//end btnApply

ob_start(); 

/*
|-----------------------------------
| DOWNLOAD CANDIDATE LIST
|-----------------------------------
 */
if(isset($_GET['candidateid'])){
	$candId = $_GET['candidateid'];

	// Query to fectch candidate resume from database
	$sql_get_CV = $conn->query("SELECT * FROM candidate WHERE cand_id = '$candId'") or die("An error occured: ".$conn->error);

	$row_get_CV = $sql_get_CV->fetch_array();
	$fileName = $row_get_CV['file_name'];
	$fileType = $row_get_CV['file_type'];
	$fileSize = $row_get_CV['file_size'];
	$fileCont = $row_get_CV['file_content'];			
	header("Content-length: $fileSize");
	header("Content-type: $fileType");
	header("Content-disposition: attachement; filename=\"$fileName\"");
	header('Connection: Keep-Alive');

	echo $fileCont;

}
ob_flush();

 ?>