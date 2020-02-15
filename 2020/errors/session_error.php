<?php  
// Prevent script/page access without system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Session expired';
$page_desc  = '';

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
?>

<!-- Session expiration message -->
<div class="container">
	<div class="vertical-center-85">
		<div class="col-sm-12">
			<h2 class="text-center">Session expired!</h2>
			<h4 class="text-center">Your session has expired. Please click <a href="<?php echo $base_url.'users/login'; ?>">here</a> to login again.</h4>
		</div>
	</div>
</div>

<!-------------------------------------------------------------------------
| Page footer
|------------------------------------------------------------------------->
<?php 
require($app_root.'templates/footer_outer.php');
require($app_root.'templates/footer.php'); 
?>