<?php
Class Hardwareinfo{ 
    //Gets the MAC Address 
    function getMACaddress () {
        $return_arry = array();
        @exec ("WMIC nicconfig get MACAddress", $return_arry); 
        $mac_addr = $return_arry[1]; 
        //Remove the characters in the string ":"
        $mac_addr = Str_replace (":", "", $mac_addr);
        return $mac_addr;
    } 
    //Gets the CPU serial number 
    function getCPUsn () {
        $return_arry = array (); 
        @exec ("WMIC CPU get Processorid", $return_arry); 
        $cpu_sn = $return_arry[1]; 
        return $cpu_sn; 
    }
    //Get motherboard serial number 
    function getBaseBoardsn () {
        $return_arry = array (); 
        @exec ("WMIC baseboard get SerialNumber", $return_arry); 
        $bASEBOARD_SN = $return_arry[1]; 
        //Remove the characters in the string "-" 
        $baseboard_SN = Str_replace ("-", "", $bASEBOARD_SN);
        return $bASEBOARD_SN; 
    }
}
?>