<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Products';
$page_desc = 'We manufacture a large number of value added product mix of Pillows, Bath, Table linens, Kitchen, and other Textiles along with Wooden items.';

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/topnav.php');
//require($app_root.'templates/wrapper.php');
//require($app_root.'templates/heading.php');
?>
<style>
	.album-img-horizontal{
	   width: 100%!important;
	   min-height: 320px !important;
	   max-height: 320px !important;
	   object-fit: cover;
	}
</style>
<!-- 
	HEADER IMAGES
	Carousel images showcase
-->
<!--
<section class="" style="margin-top: 70px !important;">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    	<ol class="carousel-indicators">
        	<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          	<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $app_path.'assets/img/header/header-img-09.jpg'; ?>" class="d-block w-100" alt="...">
                <h1 class="text-bg-black el-50 et-30 er-0 eb-0 text-dark font-weight-bold px-3 animated bounceInLeft slow">Your Home Essentials</h1>
                <p class="text-bg-green-dk-2 el-55 et-40 er-0 eb-0 text-dark px-3 animated bounceInRight slow">Our huge collection of products are essential for your home.</p>
            </div>
        	<div class="carousel-item">
                <img src="<?php echo $app_path.'assets/img/header/header-img-13.jpg'; ?>" class="d-block w-100" alt="...">
                <h1 class="text-bg-black el-20 et-30 er-0 eb-0 text-dark font-weight-bold px-3 animated bounceInDown slow">Decorate Your Home</h1>
                <p class="text-bg-green-dk-1 el-25 et-40 er-0 eb-0 px-3 animated bounceInUp slow">Our products can be a destination of your home's decorating possibilities.</p>
            </div>
            <div class="carousel-item">
                <img src="<?php echo $app_path.'assets/img/header/header-img-10.jpg'; ?>" class="d-block w-100" alt="...">
                <h1 class="text-bg-white-lighter el-15 et-35 er-0 eb-0 text-dark font-weight-bold px-3 animated bounceInRight slow">Luxurious Lifestyle</h1>
                <p class="text-bg-firebrick-lighter el-20 et-45 er-0 eb-0 px-3 text-white animated bounceInLeft slow">Turn your ordinary home into a dreamt luxury home.</p>
            </div>
        </div>
        <a class="carousel-control-prev text-bg-black p-3 et-45 el-5" href="#carouselExampleCaptions" role="button" data-slide="prev">
        	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
        	<span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-bg-black p-3 et-45 er-5" href="#carouselExampleCaptions" role="button" data-slide="next">
        	<span class="carousel-control-next-icon" aria-hidden="true"></span>
          	<span class="sr-only">Next</span>
        </a>
    </div>
</section>
-->
<div style="margin-left: 75px !important; margin-right: 75px !important; margin-top: 100px!important;" >
	<?php require($app_root.'templates/heading.php'); ?>
</div>
<section  styl="margin-top: 70px !important;">
	<div class="row">
		<div class="col-md-3 p-0">
			<img src="<?php echo $app_path.'assets/img/products/album-img-01.jpg'; ?>" alt="" class="album-img-horizontal wow zoomIn slow">
		</div>
		<div class="col-md-3 p-0">
			<img src="<?php echo $app_path.'assets/img/products/album-img-02.jpg'; ?>" alt="" class="album-img-horizontal wow zoomIn slow">
		</div>
		<div class="col-md-3 p-0">
			<img src="<?php echo $app_path.'assets/img/products/album-img-03.jpg'; ?>" alt="" class="album-img-horizontal wow zoomIn slow">
		</div>
		<div class="col-md-3 p-0">
			<img src="<?php echo $app_path.'assets/img/products/album-img-04.jpg'; ?>" alt="" class="album-img-horizontal wow zoomIn slow">
		</div>
	</div>
</section>

<!-- Footer -->
<?php require($app_root.'templates/footer.php'); ?>