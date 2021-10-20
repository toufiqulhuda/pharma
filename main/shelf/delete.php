<?php
	include('../../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM shelf WHERE Slf_ID= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>