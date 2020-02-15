<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Career';
$page_desc = 'Our company offers a dynamic, exciting and engaging work environment. If you feel you have the talent, drive, and integrity to excel in a fast growing organization, submit your details below. We are looking for persons in the following areas:';
$custom_page_title = "We're Hiring!";

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
				    	<span class="input-group-text rounded-0 border-0" id="inputJobPosition">
				    		<i class="fas fa-id-card"></i>
				    	</span>
				  	</div>
				  	<!-- <input type="text" name="txtJobPosition" id="txtJobPosition" class="form-control form-control-lg rounded-0 border-0 bg-gainsboro" placeholder="Name" aria-describedby="inputJobPosition"> -->
				  	<select class="custom-select rounded-0 border-0 bg-gainsboro" name="txtJobPosition" id="txtJobPosition" aria-describedb="inputJobPosition">
					    <option selected>I am looking for position...</option>
					    <option value="Production and Planning">Production and Planning</option>
					    <option value="Merchandiser">Merchandiser</option>
					    <option value="E-Commerce and Online Marketing">E-Commerce and Online Marketing</option>
					    <option value="Data Analytics">Data Analytics</option>
					    <option value="Oracle Database Administrator">Oracle Database Administrator</option>
					    <option value="Quality Control">Quality Control</option>
					    <option value="Finance & Accounts - Chartered Accountant">Finance & Accounts - Chartered Accountant</option>
					    <option value="Finance & Accounts - Accountant">Finance & Accounts - Accountant</option>
					    <option value="Stores and Procurement">Stores and Procurement</option>
					    <option value="HR Personnel & Admin">HR Personnel & Admin</option>
					    <option value="EDP - Software and Hardware">EDP - Software and Hardware</option>
					    <option value="Electrician">Electrician</option>
					    <option value="Driver">Driver</option>
					</select>
				</div>
		  	</div>
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
		  		<div class="input-group mb-3">
				  	<div class="input-group-prepend">
				    	<span class="input-group-text rounded-0 border-0" id="inputResume">
				    		<i class="fas fa-upload"></i>
				    	</span>
				  	</div>
				  	<div class="custom-file bg-gainsboro">
					    <input type="file" class="custom-file-input borde-0 rounde-0 bg-gainsboro" id="inputGroupFile01" aria-describedby="inputResume">
					    <label class="custom-file-label rounded-0 borde-0 text-left" for="inputGroupFile01">Upload your resume</label>
				  	</div>
				</div>
		  	</div>
		 
		  <button type="submit" class="btn btn-info btn-lg rounded-0 shadow-sm"><span class="px-5">Apply</span></button>
		</form>
	</div>
</div>
<!-- Footer -->
<?php require($app_root.'templates/footer.php'); ?>