<?php  
// Prevent script access without system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// System application configuration
require($app_root.'config/database.php'); // If required
require($app_root.'config/sessions.php'); // If required

// Page configuration variables to be used throughout the page.
$page_title = 'Sample page';
$page_desc  = 'Basic format for pages to written in this framework.';

// Page templates that contains blocks of page header, navbar, footer etc.
require($app_root.'templates/header.php');
require($app_root.'templates/topnav.php');
require($app_root.'templates/heading.php');
require($app_root.'templates/flashmsg.php');
?>

<!-------------------------------------------------------------------------
| Page content
|------------------------------------------------------------------------->
<h3>Hello, world!</h3>

<!-------------------------------------------------------------------------
| Page footer
|------------------------------------------------------------------------->
<?php require($app_root.'templates/footer.php'); ?>