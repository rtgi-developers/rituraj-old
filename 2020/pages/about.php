<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Page configuration variables to be used throughout the page.
$page_title = 'About';
$page_desc = '';
$custom_page_title = "About Us";

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/topnav.php');
require($app_root.'templates/wrapper.php');
require($app_root.'templates/heading.php');
?>

<div class="row m-75 py-3">
    <div class="col-md-9 text-center">
        <p class="lead-2 gfont-raleway text-justify">
        	Rituraj Textile and General Industries Pvt. Ltd. established in 1968 is a well renowned name in the field of home textiles founded by Roop K. Baijal. We are one of the fastest growing business conglomerates that truly represent an amalgamation of manufacturing resources, engineering excellence and expertise. We manufacture a large number of value added product mix of Pillows, Bath, Table linens, Kitchen, and other Textiles along with Wooden items which are exported to different parts of world with greater share in USA directly and through trusted importers such as Orient Originals Inc.
        </p>
        <p class="lead-2 gfont-raleway text-justify">
        	The success of Rituraj Textile & General Industries Pvt. Ltd. with its remarkable growth as one of the top home textile companies of the country reflects the inner strength of the organization.
        </p>
        <p class="lead-2 gfont-raleway text-justify">
        	Since its inception five decades ago as a small handloom factory, the company has flourished by responding to the ever changing market trends, faster responsiveness to customer need, emphasizing total quality management and above all building a unique bridge of mutual understanding with Business Associates.
        </p>
        <p class="lead-2 gfont-raleway text-justify">
        	With an exemplary track record and an eye on the future, the organization continues its quest for excellence.
        </p>
    </div>
    <div class="col-md-3 pl-5">
        <div class="card text-center rounded-0 shadow-sm" style="height: 300px !important;">
            <img src="<?php echo $app_path.'assets/img/team/founder.jpg'; ?>" class="card-img-top" alt="">
            <div class="card-body p-0 text-center">
                <h5 class="card-title">Roop K. Baijal</h5>
                <h6 class="card-subtitle mb-2 text-muted">Founder, Rituraj Textile</h6>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php require($app_root.'templates/footer.php'); ?>