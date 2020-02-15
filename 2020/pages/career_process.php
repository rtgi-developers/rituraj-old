<?php  
// Prevent script access without config/system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// System configuration files
require($app_root.'config/database.php');
require($app_root.'config/session.php');

// System libraries
require($app_root.'library/phpmailer/PHPMailerAutoload.php');
require($app_root.'library/custom/helpers.php'); 
$helper = new Helpers();

?>