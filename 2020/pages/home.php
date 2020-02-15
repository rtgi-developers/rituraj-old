<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Team';
$page_desc = '';

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/topnav.php');
require($app_root.'templates/heading.php');
require($app_root.'templates/wrapper.php');
?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quibusdam sunt fugiat, ut accusamus expedita consequatur error assumenda nam, repudiandae ipsa atque totam molestiae architecto nostrum magnam reprehenderit, vitae culpa.</p>
<style>
	.card-img-top{
	   width: 100%!important;
	   height: 250px!important;
	   object-fit: cover;
	}
</style>
<!-- Team row-1 -->
<div class="row mb-3">
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/avatar3.png'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Ritu Grover</h5>
				<h6 class="card-subtitle mb-2 text-muted">Job title</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/avatar1.png'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Shiv Prasad Gairola</h5>
				<h6 class="card-subtitle mb-2 text-muted">General Manager</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/member3.jpg'; ?>" class="card-img-top" alt="" height="200">
			<div class="card-body">
				<h5 class="card-title">Jyoti Jain</h5>
				<h6 class="card-subtitle mb-2 text-muted">Job title</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/avatar4.png'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Sita Devi</h5>
				<h6 class="card-subtitle mb-2 text-muted">Job title</h6>
			</div>
		</div>
	</div>
</div>
<!-- Team row-2 -->
<div class="row mb-3">
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/member5.png'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Tanya Gupta</h5>
				<h6 class="card-subtitle mb-2 text-muted">Job title</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/avatar4.png'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Rinku Paul</h5>
				<h6 class="card-subtitle mb-2 text-muted">Job title</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/member7.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Priya Verma</h5>
				<h6 class="card-subtitle mb-2 text-muted">Merchandiser</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/avatar2.png'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Rakesh Kumar Das</h5>
				<h6 class="card-subtitle mb-2 text-muted">Job title</h6>
			</div>
		</div>
	</div>
</div>
<!-- Team row-3 -->
<div class="row mb-3">
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/member9.JPG'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Md. Tarique Anwer</h5>
				<h6 class="card-subtitle mb-2 text-muted">Web Developer</h6>
			</div>
		</div>
	</div>
	<!--
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/avatar2.png'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Member name</h5>
				<h6 class="card-subtitle mb-2 text-muted">Job title</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/avatar3.png'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Member name</h5>
				<h6 class="card-subtitle mb-2 text-muted">Merchandiser</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<img src="<?php echo $app_path.'assets/img/team/avatar4.png'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Member name</h5>
				<h6 class="card-subtitle mb-2 text-muted">Job title</h6>
			</div>
		</div>
	</div>
	-->
</div>
<!-- Footer -->
<?php require($app_root.'templates/footer.php'); ?>