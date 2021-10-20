<?php
// configuration
include('../../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['no'];
$b = $_POST['name'];
// query
$sql = "UPDATE shelf 
        SET Slf_NO=?, Slf_NAME=?
		WHERE Slf_ID=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$id));
header("location: ../shelf.php");

?>