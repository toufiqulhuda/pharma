<?php
	// function createRandomPassword()
	// {
	// 	$chars = "003232303232023232023456789";
	// 	srand((float)microtime() * 1000000);
	// 	$i = 0;
	// 	$pass = '';
	// 	while ($i <= 7) {

	// 		$num = rand() % 33;

	// 		$tmp = substr($chars, $num, 1);

	// 		$pass = $pass . $tmp;

	// 		$i++;
	// 	}
	// 	return $pass;
	// }
	// $finalcode = 'RS-' . createRandomPassword();
	?>
<div class="span2">
    <div class="well sidebar-nav">
        <ul class="nav nav-list">
            <li><a href="index.php" name="dashboard" onClick="pageLoad($(this))" data="dashboard.php"><i class="icon-dashboard "></i> Dashboard </a></li>
            <li><a href="shelf.php"><i class="icon-dashboard "></i> Shelf </a></li>
            <li><a href="category.php"><i class="icon-dashboard "></i> Categories </a></li>
            <li><a href="index.php"><i class="icon-dashboard "></i> Brand / Company </a></li>
            <li><a href="medicine.php"><i class="icon-medkit "></i> Medicines List</a></li>
            <li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart "></i> Sales</a> </li>
            <li><a href="products.php"><i class="icon-briefcase "></i> Products</a> </li>
            <li><a href="customer.php" name="customer" onClick="pageLoad($(this))" data="customer1.php"><i class="icon-group "></i> Customers</a> </li>
            <li><a href="supplier.php"><i class="icon-truck "></i> Suppliers</a> </li>
            <li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart "></i> Sales Report</a> </li>
            
            <!-- <li>
                <div class="hero-unit-clock">

                    <form name="clock">
                        <font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
                    </form>
                </div>
            </li> -->
        </ul>
    </div>
    <!--/.well -->
</div>
