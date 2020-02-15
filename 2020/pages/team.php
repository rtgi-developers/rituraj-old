<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Team';
$page_desc = 'Idividuals can and do make a difference, but it takes a team to really make jobs done perfectly and on time.';
$custom_page_title = "Meet Our Team";

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/topnav.php');
require($app_root.'templates/wrapper.php');
require($app_root.'templates/heading.php');
?>

<style>
	.card-img-top{
	   width: 100%!important;
	   min-height: 300px!important;
	   max-height: 300px !important;
	   object-fit: cover;
	}
</style>
<!-- Team row-1 -->
<div class="row mb-3">
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member2.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Shiv Prasad Gairola</h5>
				<h6 class="card-subtitle mb-2 text-muted">General Manager</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member1.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Ritu Grover</h5>
				<h6 class="card-subtitle mb-2 text-muted">Head of Operations</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member4.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Sita Devi</h5>
				<h6 class="card-subtitle mb-2 text-muted">Manager Merchandising</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member3.jpg'; ?>" class="card-img-top" alt="" height="200">
			<div class="card-body">
				<h5 class="card-title">Jyoti Jain</h5>
				<h6 class="card-subtitle mb-2 text-muted">Manager Accounts</h6>
			</div>
		</div>
	</div>
</div>
<!-- Team row-2 -->
<div class="row mb-3">
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member10.JPG'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Suresh Kumar</h5>
				<h6 class="card-subtitle mb-2 text-muted">Asst. Manager Docs & Logistics</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member5.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Tanya Gupta</h5>
				<h6 class="card-subtitle mb-2 text-muted">E-Commerce Analyst</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member6b.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Rinku Paul</h5>
				<h6 class="card-subtitle mb-2 text-muted">Business Analyst</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member7.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Priya Verma</h5>
				<h6 class="card-subtitle mb-2 text-muted">Merchandiser</h6>
			</div>
		</div>
	</div>
</div>
<!-- Team row-3 -->
<div class="row mb-3">
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member8.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Rakesh Kumar Das</h5>
				<h6 class="card-subtitle mb-2 text-muted">E-Commerce Executive</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member11.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Harpali Singh</h5>
				<h6 class="card-subtitle mb-2 text-muted">Assistant Accountant</h6>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card wow zoomIn slow">
			<img src="<?php echo $app_path.'assets/img/team/member9.jpg'; ?>" class="card-img-top" alt="">
			<div class="card-body">
				<h5 class="card-title">Md. Tarique Anwer</h5>
				<h6 class="card-subtitle mb-2 text-muted">Web Developer</h6>
			</div>
		</div>
	</div>
	<!--
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
<script>
	document.addEventListener('contextmenu', event => event.preventDefault());
	$('.card').each(function(){
		$(this).hover(function(){
			$(this).toggleClass('shadow');
		});
	});
</script>