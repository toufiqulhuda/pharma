<?php
session_start();
include('../../connect.php');
$a = $_POST['no'];
$b = $_POST['name'];
// query
$sql = "INSERT INTO category (cat_id,cat_name) VALUES (:a,:b)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b));
header("location: ../category.php");


?>