<?php
// Prevent script access without system.php file
defined('BASEPATH') or exit('Missing system configuration file.');

// Session name
session_name($sess_name);

// Start a session
session_start();

// Unset all session variables
session_unset($_SESSION['name']);
session_unset($_SESSION['user_name']);
session_unset($_SESSION['user_email']);
session_unset($_SESSION['user_type']);

// Destroy session
session_destroy();

// Delete cookies
setcookie(session_name($sess_name), '', time()-70000, '/');

// Redirect to login page
header("location: ".$base_url."users/login");
?>