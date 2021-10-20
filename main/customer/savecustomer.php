<?php
session_start();
include('../../connect.php');
$a = trim($_POST['name']);
$b = trim($_POST['address']);
$c = trim($_POST['contact']);
$d = trim($_POST['memno']);
// $e = trim($_POST['prod_name']);
$e = trim($_POST['note']);
// $g = trim($_POST['date']);
// query
$sql = "INSERT INTO customer (customer_name,address,contact,membership_number,note) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e));
header("location: ../customer.php");


?>