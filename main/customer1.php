
<div class="contentheader">
    <i class="icon-group"></i> Customers
</div>
<ul class="breadcrumb">
    <li><a href="index.php">Dashboard</a></li> /
    <li class="active">Customers</li>
</ul>
<hr><br />
<div style="margin-top: -19px; margin-bottom: 21px;">
    <a href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
    <?php
    include('../connect.php');
    $result = $db->prepare("SELECT * FROM customer ORDER BY customer_id DESC");
    $result->execute();
    $rowcount = $result->rowcount();
    ?>
    <div style="text-align:center;">
        Total Number of Customers: <font color="green" style="font:bold 22px 'Aleo';"><?php echo $rowcount; ?></font>
    </div>
</div>
<input type="text" name="filter" style="/*padding:15px;*/" id="filter" placeholder="Search Customer..." autocomplete="off" />
<a rel="facebox" href="customer/addcustomer.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Customer</button></a><br><br>

<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
    <thead>
        <tr>
            <th width="15%"> Full Name </th>
            <th width="20%"> Address </th>
            <th width="15%"> Contact Number</th>
            <!-- <th width="23%"> Product Name</th> -->
            <th width="15%"> Membership Number </th>
            <th width="20%"> Note </th>
            <!-- <th width="9%"> Due Date </th> -->
            <th width="15%"> Action </th>
        </tr>
    </thead>
    <tbody>

        <?php
        //include('../connect.php');
        $result = $db->prepare("SELECT * FROM customer ORDER BY customer_id DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
        ?>
            <tr class="record">
                <td><?php echo $row['customer_name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <!-- <td><?php //echo $row['prod_name']; 
                            ?></td> -->
                <td><?php echo $row['membership_number']; ?></td>
                <td><?php echo $row['note']; ?></td>
                <!-- <td><?php //echo $row['expected_date']; 
                            ?></td> -->

                <td><a title="Click To Edit Customer" rel="facebox" href="customer/editcustomer.php?id=<?php echo $row['customer_id']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit </button></a>
                    <a href="#" id="<?php echo $row['customer_id']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button></a>
                </td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>
<div class="clearfix"></div>