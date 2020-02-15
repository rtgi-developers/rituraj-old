<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Home';
$page_desc = 'Rituraj Textile and General Industries Pvt. Ltd. established in 1968 is a well renowned name in the field of home textiles founded by Roop K. Baijal. We are one of the fastest growing business conglomerates that truly represent an amalgamation of manufacturing resources, engineering excellence and expertise. We manufacture a large number of value added product mix of Pillows, Bath, Table linens, Kitchen, and other Textiles along with Wooden items which are exported to different parts of world with greater share in USA directly and through trusted importers such as Orient Originals Inc.';

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/topnav.php'); // On required
?>

<!-- 
	HEADER IMAGES
	Carousel images showcase
-->
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

<!-- WHO WE ARE -->
<!-- <section class="bg-gainsboro py-5">
    <div class="row mx-75">
        <div class="col-md-12 text-center">
            <h1 class="gfont-raleway mb-3" id="page-title">Who We Are</h1>
            <p class="lead-110 gfont-raleway text-justify"><?php echo $page_desc; ?></p>
        </div>
    </div>
</section> -->

<!-- COMPANY OVERVIEW -->
<section class="">
    <div class="row mx-75 my-5 wow fadeInLeft slower">
        <div class="col-md-6">
            <h3 class="gfont-raleway font-weight-bold mt-5">PASSIONATE ABOUT AFFORDABLE STYLE</h3>
            <p>For more than 50 years, we’ve set out to demonstrate home furnishings can be made a better way. Our committed, meticulous and accomplished team is focused on continuous enhancement. Our exclusive products and accessories start with a sketch inspired by our design teams travels around the world.</p>
            <p>Economical manufacturing promotes customer value and quality.</p>
        </div>
        <div class="col-md-6">
            <img src="<?php echo $app_path.'assets/img/content/about-img-1.jpg'; ?>" class="img-fluid" alt="Responsive image">   
        </div>
    </div>
    <div class="row mx-75 my-5 wow fadeInRight slower">
        <div class="col-md-6">
            <img src="<?php echo $app_path.'assets/img/content/about-img-2.jpg'; ?>" class="img-fluid" alt="Responsive image">   
        </div>
        <div class="col-md-6">
            <h3 class="gfont-raleway font-weight-bold mt-5">QUALITY DESIGNS &amp; SAMPLING</h3>
            <p>Our in-house designers react promptly to consumer tastes, and realize one style does not fit all. That’s why you’ll find so much to love in our ample collection of room-to-room furnishings.</p>

            <p>Explore on-trend styles made for blending and standing out.</p>
        </div>
    </div>
    <div class="row mx-75 my-5 wow fadeInLeft slower">
        <div class="col-md-6">
            <h3 class="gfont-raleway font-weight-bold mt-5">MANUFACTURING &amp; INFRASTRUCTURE</h3>
            <p>Our production facility is equipped with Weaving Machines, Fabric Inspection Capabilities, Processing Machines, Product Development Capabilities using modern equipment, streamlined systems and strict quality control protocols and extensive testing so that products arrive in homes, ready to be loved for years.</p>
           
        </div>
        <div class="col-md-6">
            <img src="<?php echo $app_path.'assets/img/content/about-img-4.jpg'; ?>" class="img-fluid" alt="Responsive image">   
        </div>
    </div>
    <div class="row mx-75 my-5 wow fadeInLeft slower">
        <div class="col-md-6">
            <img src="<?php echo $app_path.'assets/img/content/about-img-3.jpg'; ?>" class="img-fluid" alt="Responsive image">   
        </div>
        <div class="col-md-6">
            <h3 class="gfont-raleway font-weight-bold mt-5">QUALITY ASSURANCE</h3>
            <p>Raw materials and finished products endure comprehensive assessments for durability, appearance, and feel. Tests and product standards are executed and overseen in our laboratories, on our production floors, in our stock warehouses, and at the point of shipment.</p>
        </div>
    </div>
</section>

<!-- COMPANY OVERVIEW -->
<section class="bg-gainsboro py-3">
    <div class="row mx-75 my-5">
        <div class="col-md-6 wow zoomIn slower">
            <h3 class="gfont-raleway font-weight-bold text-center">PASSIONATE ABOUT AFFORDABLE STYLE</h3>
            <img src="<?php echo $app_path.'assets/img/content/about-img-1.jpg'; ?>" class="img-fluid" alt="Responsive image">   
             <p>For more than 50 years, we’ve set out to demonstrate home furnishings can be made a better way. Our committed, meticulous and accomplished team is focused on continuous enhancement. Our exclusive products and accessories start with a sketch inspired by our design teams travels around the world.</p>
            <p>Economical manufacturing promotes customer value and quality.</p>
        </div>
        <div class="col-md-6 wow zoomIn slower">
            <h3 class="gfont-raleway font-weight-bold text-center">QUALITY DESIGNS &amp; SAMPLING</h3>
            <img src="<?php echo $app_path.'assets/img/content/about-img-2.jpg'; ?>" class="img-fluid" alt="Responsive image"> 
            <p>Our in-house designers react promptly to consumer tastes, and realize one style does not fit all. That’s why you’ll find so much to love in our ample collection of room-to-room furnishings.</p>

            <p>Explore on-trend styles made for blending and standing out.</p>
        </div>
    </div>
    <div class="row mx-75 my-5">
        <div class="col-md-6 wow zoomIn slower">
            <h3 class="gfont-raleway font-weight-bold text-center">MANUFACTURING &amp; INFRASTRUCTURE</h3>
            <img src="<?php echo $app_path.'assets/img/content/about-img-4.jpg'; ?>" class="img-fluid" alt="Responsive image">  
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quis, delectus. Ducimus dolorem nemo inventore excepturi delectus autem, blanditiis, quibusdam et, corporis sed eum cum similique, esse architecto quia itaque!
        </div>
        <div class="col-md-6 wow zoomIn slower">
            <h3 class="gfont-raleway font-weight-bold text-center">QUALITY ASSURANCE</h3>
            <img src="<?php echo $app_path.'assets/img/content/about-img-3.jpg'; ?>" class="img-fluid" alt="Responsive image">  
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quis, delectus. Ducimus dolorem nemo inventore excepturi delectus autem, blanditiis, quibusdam et, corporis sed eum cum similique, esse architecto quia itaque!
        </div>
    </div>
</section>

<!-- OUR MISSION -->
<!-- <section class="">
    <div class="row align-middle mx-75">
        <div class="col-md-6 text-center">
            <h1 class="gfont-raleway my-4" id="page-title">Our Mission</h1>
            <p class="lead-110 gfont-raleway text-justify">We are committed to satisfying our customers by providing the highest quality products at the most competitive prices.</p>

            <p class="lead-110 gfont-raleway text-justify">We strive to attain and maintain a leadership position with our current and future customers.</p>

            <p class="lead-110 gfont-raleway text-justify">We believe it is our Company’s duty to acquire the knowledge and to maintain manufacturing excellence so as to continue to grow.</p>
        </div>
        <div class="col-md-6">
             <img src="<?php echo $app_path.'assets/img/mission/mission-2.jpg'; ?>" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</section> -->
<!--
	GOOGLE MAP
	Our location on google map
-->
<!--div class="container-fluid">
	<h1 class="text-center">Get In Touch</h1>
  	<p class="text-center">
  		Need to find us? No problem. You've come to the right place.
  	</p>
  	<div class="row">
    	<div class="col-md-4 text-center">
      		<img src="img/contact/email2.png" alt="">
      		<h4><a href="mailto:info@rituraj.com" class="">info@rituraj.com</a></h4>
    	</div>
        <div class="col-md-4 text-center">
        	<img src="img/contact/location.png" alt="">
          	<h4><a href="">31B, Loni Road, Mohan Nagar, Ghaziabad, UP-201007</a></h4>
        </div>
    	<div class="col-md-4 text-center">
      		<img src="img/contact/phone.png" alt="">
      		<h4><a href="" class="">+91-120-4185100</a></h4>
    	</div>
  	</div>
</div>
<div id="rtgiMap" style="width: 100%; height: 400px; background-color: grey;"></div-->

<?php require($app_root.'templates/footer.php'); ?>


<script>
	/**
	 * [initMap description]
	 * @return {[type]} [description]
	 */
	function initMap(){
		// The Location of RTGI
		var rtgiLoc = {lat: 28.6820886, lng: 77.3793375};

		// The map, centered at RTGI
		var map = new google.maps.Map(
			document.getElementById('rtgiMap'), 
			{zoom: 10, scrollwheel: false, center: rtgiLoc}
		);

		// The marker, positioned at RTGI
		var marker = new google.maps.Marker({position: rtgiLoc, map: map});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTXJ8EHNl5nTitOHnHXUJWIDRvXd2KbKY&callback=initMap"></script>