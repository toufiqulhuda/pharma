<?php
include('../../connect.php');
$id = $_GET['id'];
$result = $db->prepare("SELECT * FROM shelf WHERE Slf_ID= :userid");
$result->bindParam(':userid', $id);
$result->execute();
for ($i = 0; $row = $result->fetch(); $i++) {
?>
	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
	<center>
		<h4><i class="icon-edit icon-large"></i> Edit Shelf</h4>
	</center>
	<hr>
	<form class="form-horizontal" action="shelf/update.php" method="post">
		<div class="control-group">
			<label class=" pull-left " for="no">Shelf No. :</label>
			<div class="controls">
				<input type="hidden" name="memi" value="<?php echo $id; ?>" />
				<input type="text" id="no" placeholder="" name="no" value="<?php echo $row['Slf_NO']; ?>" Required>
			</div>
		</div>
		<div class="control-group">
			<label class=" pull-left" for="no">Shelf Name :</label>
			<div class="controls">
				<input type="text" id="name" placeholder="" name="name" value="<?php echo $row['Slf_NAME']; ?>" Required>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button class="btn btn-success btn-block btn-large"><i class="icon icon-save icon-large"></i> Save Changes</button>
			</div>
		</div>
	</form>
<?php
}
?>