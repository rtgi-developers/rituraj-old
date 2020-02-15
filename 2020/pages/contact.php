<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Contact';
$page_desc = 'We will get back to you at the earliest!';
$custom_page_title = "Contact Us";

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/topnav.php');
require($app_root.'templates/wrapper.php');
require($app_root.'templates/heading.php');
?>

<style>
	.input-group>.input-group-prepend {
	    flex: 0 0 8%;
	    text-align: center !important;
	}
	.input-group .input-group-text {
	    width: 100%;
	}
</style>
<!-- Contact form -->
<div class="container justify-content-center vertical-center-75 pb-5">
	<div class="col-md-8">
		<form class="text-center">
			<div class="form-group">
				<div class="input-group input-group-lg">
				  	<div class="input-group-prepend">
				    	<span class="input-group-text rounded-0 border-0" id="inputName">
				    		<i class="fas fa-user"></i>
				    	</span>
				  	</div>
				  	<input type="text" name="txtName" id="txtName" class="form-control form-control-lg rounded-0 border-0 bg-gainsboro" placeholder="Name" aria-describedby="inputName">
				</div>
		  	</div>
		  	<div class="form-group">
				<div class="input-group input-group-lg">
				  	<div class="input-group-prepend">
				    	<span class="input-group-text rounded-0 border-0" id="inputEmail">
				    		<i class="fas fa-envelope"></i>
				    	</span>
				  	</div>
				  	<input type="text" name="txtEmail" id="txtEmail" class="form-control form-control-lg rounded-0 border-0 bg-gainsboro" placeholder="Email" aria-describedby="inputEmail">
				</div>
		  	</div>
			<div class="form-group">
				<div class="input-group input-group-lg">
				  	<div class="input-group-prepend">
				    	<span class="input-group-text rounded-0 border-0" id="inputPhone">
				    		<i class="fas fa-phone-alt"></i>
				    	</span>
				  	</div>
				  	<input type="text" name="txtPhone" id="txtPhone" class="form-control form-control-lg rounded-0 border-0 bg-gainsboro" placeholder="Phone" aria-describedby="inputPhone">
				</div>
		  	</div>
		  	<div class="form-group">
				<div class="input-group input-group-lg">
				  	<div class="input-group-prepend">
				    	<span class="input-group-text rounded-0 border-0 mt-0" id="inputMessage">
				    		<i class="fas fa-comment-alt"></i>
				    	</span>
				  	</div>
				  	<!-- <input type="text" name="txtPhone" id="txtPhone" class="form-control form-control-lg rounded-0 border-0 bg-gainsboro" placeholder="Phone" aria-describedby="inputPhone"> -->
				  	<textarea name="" class="form-control form-control-lg rounded-0 border-0 bg-gainsboro" id="" cols="30" rows="5" placeholder="Message" aria-describedby="inputMessage"></textarea>
				</div>
		  	</div>
		  <button type="submit" class="btn btn-info btn-lg rounded-0"><span class="px-5">Send</span></button>
		</form>
	</div>
</div>
<!-- Footer -->
<?php require($app_root.'templates/footer.php'); ?>