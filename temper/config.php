<?php 
define('DB_HOST'    , 'localhost'); 
define('DB_USERNAME', 'helpeyaf_esp'); 
define('DB_PASSWORD', 'Mosnanoi37!@#$'); 
define('DB_NAME'    , 'helpeyaf_esp');

define('POST_DATA_URL', 'http://www.nbrhelpdesk.com/esp/sensordata.php');

//PROJECT_API_KEY is the exact duplicate of, PROJECT_API_KEY in NodeMCU sketch file
//Both values must be same
define('PROJECT_API_KEY', 'PlsFinish1010');


//set time zone for your country
date_default_timezone_set('Asia/Bangkok');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}
