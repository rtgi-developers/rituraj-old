# Rituraj Textiles old website
Contains installation and other information for [Rituraj Textiles](https://www.rituraj.com/) old website.

### Requirements
This website is developed using core PHP framework and requires: 
1. __Language:__ PHP version 5.6 or newer.
1. __Database:__ MySQL (5.1+) via the mysql (deprecated), mysqli and pdo drivers. 
1. __Hosting:__ Linux with cPanel recommened, Windows with Plesk would require additional configurations. 

For more details please refer https://codeigniter.com/user_guide/general/requirements.html

### Installation
Later versions will contain an installation script but for now follow the below steps.
1. Download the latest released version's zip.
1. Extract and upload files to the root directory of your hosting account.
1. __Database configurations__
    * Create MySQL database 
    * Create user name and password
    * Open config/ConConfig.php and update hostname, username, password and name for database.
    * For fresh installation import the rtgidb.sql included in the download.
