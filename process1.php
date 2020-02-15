<?php  
// Connect to database
require_once($_SERVER['DOCUMENT_ROOT']."/config/ConnString.php");

if(isset($_POST['btnApply'])){
	echo '<div class="alert alert-success alert-dismissable text-center"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
			  Thank you for applying to this possition. We will contact you once your resume is shortlisted.</div>';
}

?>