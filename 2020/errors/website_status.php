<?php  
// Prevent script/page access without system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Website Status';
$page_desc  = '';

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
?>

<!-- Session expiration message -->
<div class="container text-center">
	<div class="vertical-center-85">
		<div class="col-sm-12">
			<h1 class="text-center">Site has been upgraded and moved to a new location!</h1><hr>
			<h4 class="text-center text-muted mb-3">To better protect our system and users data we have upgraded to new, safe and secure login system. Please access it by visiting below: </h4>
			<a href="<?php echo $base_url.'users/login'; ?>" class="btn btn-primary btn-lg text-center mb-3">Login here...</a>
			<p class="text-muted">Any issues please report at <a href="mailto: tarique@rituraj.com">tarique@rituraj.com</a></p>
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