<!DOCTYPE html>
<html>
<head>
	<title>POS</title>
	<link rel="shortcut icon" href="images/pos.jpg">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
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
	<script src="lib/jquery.js" type="text/javascript"></script>
	
	<?php
	require_once('auth.php');
	?>
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

	<script language="javascript" type="text/javascript">
		// function loadPage(element){
		// 	$('.span10').load(element.name+'.php');
		// }
		function loadDashboard(){
			$('.span10').load('dashboard.php');
		}
		function pageLoad(element){
		var tu = element.attr("data");
		$.ajax({
				url: tu,
				type: 'POST',
				dataType: 'html',
				data: {},
				success: function(content)
				{
					$(".span10").html(content);
				}  
		});
	}
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
		window.onload = startclock;
		// End -->*/
	</SCRIPT>
</head>

<body >
	<?php include('navfixed.php'); ?>
	<?php
	$position = $_SESSION['SESS_LAST_NAME'];
	if ($position == 'cashier') {
	?>

		<a href="../index.php">Logout</a>
	<?php
	}
	if ($position == 'admin') {
	?>

		<div class="container-fluid">
			<div class="row-fluid">
				<?php include('sidebarNav.php'); ?>
				<!--/span-->
				<div class="span10"><?php include('dashboard.php')?></div>
			</div>
		</div>
	<?php } ?>
</body>
<?php include('footer.php'); ?>

</html>