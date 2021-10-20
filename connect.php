<?php
if (file_exists(dirname(__FILE__)."/db/config.php")) {
    include dirname(__FILE__)."/db/config.php";
} else {
    die("Unable to include ".dirname(__FILE__)."/db/config.php");
}

if (file_exists(dirname(__FILE__)."/db/Hardwareinfo.php")) {
    include dirname(__FILE__)."/db/Hardwareinfo.php";
} else {
    die("Unable to include ".dirname(__FILE__)."/db/Hardwareinfo.php");
}

/* Database config */
$configs = new DbServerSetting();
$dbConfig = $configs->loadDbConfig();
$documentRoot = $configs->documentRoot();

/* End config */


 
/* Attempt to connect to MySQL database */
try{
    $db = new PDO("mysql:host=" . $dbConfig["HOST"] . ";dbname=" . $dbConfig["DB_NAME"], $dbConfig["USER"], $dbConfig["PASSWORD"]);
    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

?>