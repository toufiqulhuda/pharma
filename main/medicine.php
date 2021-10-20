<html>
<head>
	<title>POS</title>
	<?php require_once('auth.php'); ?>
	<link rel="shortcut icon" href="images/pos.jpg">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}

		.sidebar-nav {
			padding: 9px 0;
		}
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- <link href="vendors/chosen.min.css" rel="stylesheet" media="screen"> -->
	<!--sa poip up-->
    <!-- <script src="vendors/jquery-1.7.2.min.js"></script> -->
    <script src="vendors/jquery-3.2.1.min.js"></script>
	<!-- <script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script> -->
	<!-- <script src="js/application.js" type="text/javascript" charset="utf-8"></script> -->
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<!-- <script src="lib/jquery.js" type="text/javascript"></script> -->
	<script src="src/facebox.js" type="text/javascript"></script>
    <!-- <script src="vendors/chosen.jquery.js"></script> -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('a[rel*=facebox]').facebox({
				loadingImage: 'src/loading.gif',
				closeImage: 'src/closelabel.png'
			});
            // jQuery(".chzn-select").data("placeholder","Select Frameworks...").chosen();
            
		})
	</script>
</head>
<?php
function createRandomPassword()
{
	$chars = "003232303232023232023456789";
	srand((float)microtime() * 1000000);
	$i = 0;
	$pass = '';
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;
	}
	return $pass;
}
$finalcode = 'RS-' . createRandomPassword();
?>

<script>
	function sum() {
		var txtFirstNumberValue = document.getElementById('txt1').value;
		var txtSecondNumberValue = document.getElementById('txt2').value;
		var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt3').value = result;

		}

		var txtFirstNumberValue = document.getElementById('txt11').value;
		var result = parseInt(txtFirstNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt22').value = result;
		}

		var txtFirstNumberValue = document.getElementById('txt11').value;
		var txtSecondNumberValue = document.getElementById('txt33').value;
		var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt55').value = result;

		}

		var txtFirstNumberValue = document.getElementById('txt4').value;
		var result = parseInt(txtFirstNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt5').value = result;
		}

	}
</script>


<script language="javascript" type="text/javascript">
	/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
	//<!-- Begin
	/*var timerID = null;
	var timerRunning = false;

	function stopclock() {
		if (timerRunning)
			clearTimeout(timerID);
		timerRunning = false;
	}

	function showtime() {
		var now = new Date();
		var hours = now.getHours();
		var minutes = now.getMinutes();
		var seconds = now.getSeconds()
		var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
		if (timeValue == "0") timeValue = 12;
		timeValue += ((minutes < 10) ? ":0" : ":") + minutes
		timeValue += ((seconds < 10) ? ":0" : ":") + seconds
		timeValue += (hours >= 12) ? " P.M." : " A.M."
		document.clock.face.value = timeValue;
		timerID = setTimeout("showtime()", 1000);
		timerRunning = true;
	}

	function startclock() {
		stopclock();
		showtime();
	}
	window.onload = startclock;*/
	// End -->
</SCRIPT>

<body>
	<?php include('navfixed.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('sidebarNav.php'); ?>
			<!--/span-->
			<div class="span10">
				<div class="contentheader">
					<i class="icon-table"></i> Medicine
				</div>
				<ul class="breadcrumb">
					<li><a href="index.php">Dashboard</a></li> /
					<li class="active">Medicine</li>
				</ul>
				<hr><br />

				<div style="margin-top: -19px; margin-bottom: 21px;">
					<a href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
					<?php
					//require_once('../connect.php');
					$result = $db->prepare("SELECT * FROM medicine ORDER BY med_id DESC");
					$result->execute();
					$rowcount = $result->rowcount();
					?>
					<div style="text-align:center;">
						Total Number of Medicine: <span class="badge badge-success"><?php echo $rowcount; ?></span>
					</div>
				</div>

				<!-- <input type="text" name="filter" value="" id="filter" placeholder="Search Shelf..." autocomplete="off" /> -->
				<form class="form-search">
					<div class="input-append span7">
						<input class="span12 search-query" id="" size="16" type="text" placeholder="Search Medicine..." autocomplete="off">
						<button type="submit" class="btn">Search</button>
					</div>
				</form>
				<a rel="facebox" href="medicine/add.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;"><i class="icon-plus-sign icon-large"></i> Add Medicine</button></a><br><br>
				<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
					<thead>
						<tr>
							<th width="5%"> NO. </th>
							<th width="20%"> Medicine Name </th>
							<th width="15%"> Generic Name </th>
							<th width="15%"> Menufacture Name </th>
							<th width="10%"> Category  </th>
							<th width="20%"> Description  </th>
							<th width="15%"> Action </th>
						</tr>
					</thead>
					<tbody>

						<?php
						for ($i = 0; $row = $result->fetch(); $i++) {
						?>
							<tr class="record">
								<td><?php echo $row['med_id']; ?></td>
								<td><?php echo $row['med_name']; echo $row['med_image']; echo $row['med_dose'];?></td>
								<td><?php echo $row['med_gen_name']; ?></td>
								<td><?php echo $row['med_menufacture']; ?></td>
								<td><?php echo $row['med_cat']; ?></td>
								
								<td><?php echo $row['med_desc']; ?></td>
								<td><a rel="facebox" title="Click to edit the medicine" href="medicine/edit.php?id=<?php echo $row['med_id']; ?>"><button class="btn btn-mini btn-warning"><i class="icon-edit"> Edit</i> </button> </a>
									<a href="#" id="<?php echo $row['med_id']; ?>" class="delbutton" title="Click to Delete the medicine"><button class="btn btn-mini btn-danger"><i class="icon-trash"> Del</i></button></a>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		//$(function() {

			$(".delbutton").click(function() {

				//Save the link in a variable called element
				var element = $(this);

				//Find the id of the link that was clicked
				var del_id = element.attr("id");

				//Built a url to send
				var info = 'id=' + del_id;
				if (confirm("Sure you want to delete this medicine? There is NO undo!")) {

					$.ajax({
						type: "GET",
						url: "medicine/delete.php",
						data: info,
						success: function() {

						}
					});
					$(this).parents(".record").animate({
							backgroundColor: "#fbc7c7"
						}, "fast")
						.animate({
							opacity: "hide"
						}, "slow");

				}

				return false;

			});

		//});
	</script>
</body>
<?php //include('footer.php'); ?>

</html>