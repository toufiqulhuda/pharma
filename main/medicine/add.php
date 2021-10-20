<!-- <link href="../style.css" media="screen" rel="stylesheet" type="text/css" /> -->
<!-- <script src="vendors/jquery-3"></script> -->
<script src="vendors/chosen.jquery.js"></script>
<link href="vendors/chosen.css" rel="stylesheet" >
<script>
jQuery(document).ready(function(){
			jQuery(".chzn-select").data("placeholder","Select Frameworks...").chosen();
});
</script> 
<center>
	<h4><i class="icon-plus-sign icon-large"></i> Add Medicine</h4>
</center>
<hr>
<form class="form-horizontal" action="medicine/save.php" method="post">
	<div class="control-group">
		<label class=" pull-left" for="no">Medicine Name :</label>
		<div class="controls">
			<input type="text"  id="name" placeholder="" name="name" Required>
		</div>
	</div>
	<div class="control-group">
		<label class=" pull-left" for="no">Generic Name :</label>
		<div class="controls">
			<input type="text"  id="name" placeholder="" name="name" Required>
		</div>
	</div>
	<div class="control-group">
		<label class=" pull-left" for="no">Menufacture Name :</label>
		<div class="controls">
			<input type="text"  id="name" placeholder="" name="name" Required>
		</div>
	</div>
	<div class="control-group">
		<label class=" pull-left" for="no">Category :</label>
		<div class="controls">
		<select name="category" data-placeholder="Choose a category..."  class="chzn-select" style="width:210px;" required>
			<option value=""></option>
			<?php
			include('../../connect.php');
			$result = $db->prepare("SELECT * FROM category");
			$result->execute();
			for ($i = 0; $row = $result->fetch(); $i++) {
			?>
				<option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
			<?php
			}
			?>
		</select>
			
		</div>
	</div>
	<div class="control-group">
		<label class=" pull-left" for="no">Dose :</label>
		<div class="controls">
			<input type="text"  id="name" placeholder="" name="name" Required>
		</div>
	</div>
	<div class="control-group">
		<label class=" pull-left" for="no">Description :</label>
		<div class="controls">
			<textarea rows="3"></textarea>
		</div>
	</div>
	<div class="control-group">
		<label class=" pull-left" for="no">Upload Image :</label>
		<div class="controls">
			<input type="file" style="padding: 0px; width:fit-content; height: fit-content;" name="fileToUpload" id="fileToUpload">
		</div>
	</div>
	
	<div class="control-group">
		<div class="controls">
			<button class="btn btn-success btn-block btn-large"><i class="icon icon-save icon-large"></i> Save</button>
		</div>
	</div>
</form>
