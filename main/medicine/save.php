<?php
session_start();
include('../../connect.php');
$a = $_POST['no'];
$b = $_POST['name'];
// query
$sql = "INSERT INTO shelf (Slf_NO,slf_name) VALUES (:a,:b)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b));
header("location: ../shelf.php");


?>