<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Overview';
$page_desc = 'Our factory is located in 4.5 Acre land area at Mohan Nagar, Ghaziabad (India) and having adequate space for future expansion.';
$custom_page_title = "Company Overview";

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/topnav.php');
require($app_root.'templates/wrapper.php');
require($app_root.'templates/heading.php');
?>

<section class="">
    <div class="row mx-75 my-5 wow zoomIn slower">
        <div class="col-md-12">
            <!-- <h3 class="mt-5">PASSIONATE ABOUT AFFORDABLE STYLE</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quis, delectus. Ducimus dolorem nemo inventore excepturi delectus autem, blanditiis, quibusdam et, corporis sed eum cum similique, esse architecto quia itaque!
                     -->
    
    <div class="card bg-dark text-white">
	  <img src="<?php echo $app_path.'assets/img/content/about-img-1.jpg'; ?>" class="img-fluid" alt="Responsive image">
	  <div class="card-img-overlay">
	    <h5 class="card-title">Card title</h5>
	    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	    <p class="card-text">Last updated 3 mins ago</p>
	  </div>
	</div>
</div>
	</div>

</section>

<!-- Footer -->
<?php require($app_root.'templates/footer.php'); ?>
