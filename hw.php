<?php
include 'db/Hardwareinfo.php'; 
$hw_addr = new Hardwareinfo (); 
$mac_addr = $hw_addr->getMACaddress(); 
$cpu_sn = $hw_addr->getCPUsn(); 
$baseboard_sn = $hw_addr->getBaseBoardsn (); 
// echo '<pre>';
// print_r($cpu_sn);
// print_r($baseboard_sn);
// echo ' MAC address: '. $mac_addr. ''; 
echo ' CPU serial number:: '. $cpu_sn. ''; 
echo ' motherboard address:: '. $baseboard_sn. '';

?>