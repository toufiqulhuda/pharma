<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />

<center>
	<h4><i class="icon-plus-sign icon-large"></i> Add Shelf</h4>
</center>
<hr>
<!-- <div id="ac">
		<span>Shelf No. : </span><input type="text" style="width:265px; height:30px;" name="no" Required><br>
		<span>Shelf Name : </span><input type="text" style="width:265px; height:30px;" name="name" Required /><br>
		<hr>
		<div class="pull-right">
			<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
		</div>
	</div> -->
<form class="form-horizontal" action="shelf/save.php" method="post">
	<div class="control-group">
		<label class=" pull-left " for="no">Shelf No. :</label>
		<div class="controls">
			<input type="text" id="no" placeholder="" name="no" Required>
		</div>
	</div>
	<div class="control-group">
		<label class=" pull-left" for="no">Shelf Name :</label>
		<div class="controls">
			<input type="text"  id="name" placeholder="" name="name" Required>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button class="btn btn-success btn-block btn-large"><i class="icon icon-save icon-large"></i> Save</button>
		</div>
	</div>
</form>