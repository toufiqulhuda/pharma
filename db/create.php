<?php
if (file_exists(dirname(__FILE__)."/settings.php")) {
    include dirname(__FILE__)."/settings.php";
} else {
    die("Unable to include ".dirname(__FILE__)."/settings.php");
}

if (file_exists(dirname(__FILE__)."/encryption.php")) {
    include dirname(__FILE__)."/encryption.php";
} else {
    die("Unable to include ".dirname(__FILE__)."/encryption.php");
}

$file = "database.cnf";
$data = [
        "LOCAL" => [
            "HOST" => "localhost",
            "USER" => "root",
            "PASSWORD" => "",
            "DB_NAME" => "sales"
        ],

        "LIVE" => [
            "HOST" => "localhost",
            "USER" => "root",
            "PASSWORD" => "",
            "DB_NAME" => "sales"
        ],
		
        "SERVER_DIR" => "pharma",

        "HARDWARE_INFO" => [
            "PROCESSOR_ID"=> "178BFBFF00610F01",
            "SERIAL_NUMBER"=> "PCWAL1B2F4Q0W5",
        ]
    ];
$string  = json_encode($data);
$crypto = new Crypto(KEY_FILE);
$txt = $crypto->encrypt($string);
//echo $txt;
if(!file_exists($file)){
	 $myfile = fopen($file, "w") or die("Unable to open file!");
     fwrite($myfile, $txt);
	 echo $file. " Created and Updated";
}else{
	$myfile = fopen($file, "w") or die("Unable to open file!");
    fwrite($myfile, $txt);
	echo $file. " Updated";
}
fclose($myfile);