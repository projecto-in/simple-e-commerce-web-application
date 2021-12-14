<?php require_once "dbconfig.php"; ?>
<?php include 'header.php'; ?>
<?php include 'header-main.php';
if (!isset($_SESSION['userlogin'])) {
    header("location:signin.php");
    unset($_SESSION["cart"]);
}

?>



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y bg">

    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <!--   SIDEBAR   -->
                <ul class="list-group">
                    <a class="list-group-item active" href="#"> My order history </a>
                    <!-- <a class="list-group-item" href="#"> Transactions </a>
			<a class="list-group-item" href="#"> Return and refunds </a>
			<a class="list-group-item" href="#">Settings </a>
			<a class="list-group-item" href="#"> My Selling Items </a>
			<a class="list-group-item" href="#"> Received orders </a> -->
                </ul>
                <br>
                <a class="btn btn-light btn-block" href="logout.php"> <i class="fa fa-power-off"></i> <span class="text">Log
                        out</span> </a>
                <!--   SIDEBAR .//END   -->
            </aside>
            <main class="col-md-9">
                <?php 
		
		$query = "SELECT * FROM `orders` WHERE `username` = '{$_SESSION['username']}'";
                                            $result = mysqli_query($cid, $query) or die("query failed");
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) { 
												
													$productname = $row['product_name'];
													$productprice = $row['price'];

													?>

											
<br>

                <article class="card">
                    <header class="card-header">
                        <strong class="d-inline-block mr-3">Order ID: <?php echo $row['order_id']; ?></strong>
                        <span>Order Date: <?php echo $row['order_date']; ?></span>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="text-muted">Delivery to</h6>
								<?php 
								$query1 = "SELECT * FROM `register` WHERE `name` = '{$_SESSION['username']}'";
								$result1 = mysqli_query($cid, $query1) or die("query failed");
								if (mysqli_num_rows($result1) > 0) {
									while ($row = mysqli_fetch_assoc($result1)) { ?>
								
                                <p><?php echo ucwords($row['first_name']) ?> <?php echo ucwords($row['last_name']) ?><br>
                                    <?php echo $row['address'] ?>
                                </p>
								<?php }} ?>
                            </div>
                            <div class="col-md-4">
                                <h6 class="text-muted">Payment</h6>
                                <span class="text-success">
                                    <i class="fab fa-lg fa-cc-visa"></i>
                                    Visa **** 4216
                                </span>
                                <!-- <p>Subtotal: $356 <br>
                                    Shipping fee: $56 <br>
                                    <span class="b">Total: $456 </span>
                                </p> -->
                            </div>
                        </div> <!-- row.// -->
                    </div> <!-- card-body .// -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                
                                <td> <b> Product Name </b><br>
                                    <p class="title mb-0"><?php echo $productname; ?> </p>
                                    <!-- <var class="price text-muted">USD 145</var> -->
                                </td>
                                <td> <b>Price </b><br> ₹<?php echo $productprice; ?> </td>
                                <td width="250"> <a href="#" class="btn btn-outline-primary">Track order</a> <a href="#"
                                        class="btn btn-light"> Details </a> </td>
                            </tr>
                           
                        </table>
                    </div> <!-- table-responsive .end// -->
                </article> <!-- order-group.// -->
                <?php }}?>
				<br>
            </main>
			<br>
        </div> <!-- row.// -->
    </div>


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<?php include 'footer.php'; ?>
<!-- ========================= FOOTER END // ========================= -->



</body>

</html>