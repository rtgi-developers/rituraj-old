<?php 
/*
|-------------------------------------------------------
| IMPORTANT README!
|-------------------------------------------------------
| -- Use auto_prepend_file in .user.ini or .htaccess 
|    file to include this system config file in all 
|    php files.
| -- Try to get path by running phpinfo();
| -- Don't use .htaccess to prepend/append
| -- Example: document/root/oms/v3/config/system.php
| -- You can check the docuemnt root path by using 
|    $_SERVER['DOCUMENT_ROOT'] 
|------------------------------------------------------- 
 */
define('BASEPATH', "/2010/config/system.php"); 

/*
|-------------------------------------------------------
| System path configuration
|-------------------------------------------------------
| -- Contains system related configurations 
|    for example: path, base path, url, app name etc. 
|------------------------------------------------------- 
 */
$app_path   = '/2020/';
$app_root   = $_SERVER['DOCUMENT_ROOT'].$app_path;
$base_url   = 'https://rituraj.com'.$app_path;
$app_name 	= 'Rituraj Textile';
$comp_name 	= 'Rituraj Textile &amp; General Industries Pvt. Ltd.';
/*
|-------------------------------------------------------
| Google reCaptcha v3 keys
|-------------------------------------------------------
| -- Google reCaptcha v3 registered email address 
|    developersorient@gmail.com
| -- Login to Google reCaptcha to know more
| -- Below defined SITE_KEY and SECRET_KEY can be used 
|	 throughout the enire application.
|-------------------------------------------------------
*/
define('SITE_KEY', '');
define('SECRET_KEY', '');

/*
|-------------------------------------------------------
| Session variables
|-------------------------------------------------------
| -- Google reCaptcha v3 registered email address 
|    developersorient@gmail.com
| -- Login to Google reCaptcha to know more
| -- Below defined SITE_KEY and SECRET_KEY can be used 
|	 throughout the enire application.
|-------------------------------------------------------
*/
$sess_name = 'rtgiaccount';
?>