<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="customer/savecustomer.php" method="post">
    <center>
        <h4><i class="icon-plus-sign icon-large"></i> Add Customer</h4>
    </center>
    <hr>
    <div id="ac">
        <span><b>Full Name :</b> </span><input type="text" style="width:265px; height:30px;" name="name" placeholder="Full Name" Required /><br>
        <span><b>Address :</b> </span><textarea style="height:60px; width:265px;" name="address" placeholder="Address"></textarea><br>
        <span><b>Contact :</b> </span><input type="text" style="width:265px; height:30px;" name="contact" placeholder="Contact" /><br>
        <!-- <span>Product Name : </span><textarea style="height:70px; width:265px;" name="prod_name"></textarea><br> -->
        <span><b>Membership :</b> </span><input type="text" style="width:265px; height:30px;" name="memno" placeholder="Memnership Number" /><br>
        <span><b>Note :</b> </span><textarea style="height:60px; width:265px;" name="note"></textarea><br>
        <!-- <span>Expected Date: </span><input type="date" style="width:265px; height:30px;" name="date" placeholder="Date" /><br> -->
        <div style="float:right; margin-right:10px;">
            <button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
        </div>
    </div>
</form>