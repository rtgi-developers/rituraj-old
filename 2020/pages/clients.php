<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'Clients';
$page_desc = 'We\'ve had the good fortune of being involved with some pretty fantastic brands and companies. <br>Here is some of our esteemed clients in the showcase.';
$custom_page_title = "Our Clients";

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/topnav.php');
require($app_root.'templates/wrapper.php');
require($app_root.'templates/heading.php');
?>

<div class="row">
    <div class="col-md-4 p-5">
        <img src="<?php echo $app_path.'assets/img/clients/amazon-logo.png'; ?>" class="img-fluid wow zoomIn slow" alt="Responsive image"> 
    </div>
    <div class="col-md-4 p-5">
        <img src="<?php echo $app_path.'assets/img/clients/Walmart_logo.png'; ?>" class="img-fluid wow zoomIn slow mt-3" alt="Responsive image"> 
    </div>
    <div class="col-md-4 p-5">
        <img src="<?php echo $app_path.'assets/img/clients/Pier_1_Imports_Logo_(updated).png'; ?>" class="img-fluid wow zoomIn slow" alt="Responsive image"> 
    </div>
</div>
<div class="row">
    <div class="col-md-4 p-5">
        <img src="<?php echo $app_path.'assets/img/clients/homegoods-logo.png'; ?>" class="img-fluid wow zoomIn slow " alt="Responsive image"> 
    </div>
    <div class="col-md-4 p-5">
        <img src="<?php echo $app_path.'assets/img/clients/tjmaxx-logo.png'; ?>" class="img-fluid wow zoomIn slow " alt="Responsive image"> 
    </div>
    <div class="col-md-4 p-5">
        <img src="<?php echo $app_path.'assets/img/clients/marshalls-logo.png'; ?>" class="img-fluid  wow zoomIn slow mt-3" alt="Responsive image"> 
    </div>
</div>
<div class="row">
    <div class="col-md-4 p-5">
        <img src="<?php echo $app_path.'assets/img/clients/ross-logo.png'; ?>" class="img-fluid wow zoomIn slow " alt="Responsive image"> 
    </div>
    <div class="col-md-4 p-5">
        <img src="<?php echo $app_path.'assets/img/clients/ddsLogo.png'; ?>" class="img-fluid wow zoomIn slow " alt="Responsive image"> 
    </div>
    <div class="col-md-4 p-5">
        <img src="<?php echo $app_path.'assets/img/clients/tm-logo-2_large.png'; ?>" class="img-fluid wow zoomIn slow mt-3" alt="Responsive image"> 
    </div>
</div>
<!-- Footer -->
<?php require($app_root.'templates/footer.php'); ?>