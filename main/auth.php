<?php
	session_start();
	include('../connect.php');

	//$configs = new DbServerSetting();
	$hardwareInfo = $configs->hardwareInfo();
if(!isset($_SESSION['SESS_PROCESSOR_ID']) && !isset($_SESSION['SESS_SERIAL_NUMBER'])){
    $hw_addr = new Hardwareinfo (); 
    $mac_addr = $hw_addr->getMACaddress(); 
    $_SESSION['SESS_PROCESSOR_ID'] = $hw_addr->getCPUsn(); 
    $_SESSION['SESS_SERIAL_NUMBER'] = $hw_addr->getBaseBoardsn (); 
}

if(($hardwareInfo['PROCESSOR_ID'] != $_SESSION['SESS_PROCESSOR_ID']) && ($hardwareInfo['SERIAL_NUMBER'] != $_SESSION['SESS_SERIAL_NUMBER'])){
    die("ERROR: Device is not Authenticate. ");
}

	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: ../index.php");
		exit();
	}

	
?>