<?php require_once "dbconfig.php";
if (!isset($_SESSION['userlogin'])) {
    header("location:signin.php");
    unset($_SESSION["cart"]);
}
?>
<?php
$gtotal = 0;
foreach ($_SESSION["cart"] as $keys => $values) {

    $productid = $values["id"];
    $productname = $values["product_name"];
    $quantity = $values["quantity"];
    $price =  $values["price"];
    $total = ($values["quantity"] * $values["price"]);
    $categoryslug = $values["category_slug"];
    $username = $_SESSION["userlogin"];
    $order_date = date('Y-m-d');

    $gtotal = $gtotal + $total;
    $query = iud("INSERT INTO ORDERS (product_id, product_name, price,  quantity, order_date, username, category_slug) 
              VALUES ('" . $productid . "','" . $productname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $categoryslug . "')");

    if ($query != 1) {
?>
        <div class="container">
            <div class="jumbotron">
                <h1>Something went wrong!</h1>
                <p>Try again later.</p>
            </div>
        </div>

<?php
    }
}
?>
<div class="container" style="margin-top: 50px;">
    <center><i class="fas fa-check-circle" style="font-size: 72px;margin-bottom: 20px;color: #28A745;"></i></center>
    <h2 class="text-center">Payment Successful</h2>
    <br>
    <div class="text-center">
        <a href="index.php" class="btn btn-success">Shop more</a>
    </div>
</div>
<?php if (isset($_SESSION['userlogin'])) { ?>
    <div class="container" style="margin: 0 auto;width: 50%;padding: 50px;background: #f1f1f1;margin-top: 50px;margin-bottom: 50px;">
        <div class="row invoice row-printable">
            <div class="col-md-12">
                <!-- col-lg-12 start here -->
                <div class="panel panel-default plain" id="dash_0">
                    <!-- Start .panel -->
                    <div class="panel-body p30">
                        <div class="row">
                            <!-- Start .row -->
                            <div class="col-lg-6">
                                <!-- col-lg-6 start here -->
                                <div class="invoice-logo"><img src="images/logo.png" alt="Invoice logo" style="max-height: 40px;"></div>
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-6">
                                <!-- col-lg-6 start here -->
                                <div class="invoice-from">
                                    <ul class="list-unstyled text-right">
                                        <li><strong>Invoiced To : </strong> <?php echo $_SESSION['username']; ?></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-12">
                                <!-- col-lg-12 start here -->
                                <div class="invoice-details mt25">
                                    <div class="well">
                                        <ul class="list-unstyled mb0">
                                            <?php
                                            $num1 = rand(100000, 999999);
                                            $num2 = rand(100000, 999999);
                                            $num3 = rand(100000, 999999);
                                            $number = $num1 . $num2 . $num3;
                                            ?>
                                            <li><strong>Order</strong> <?php echo "$number"; ?></li>
                                            <li><strong>Transaction</strong> #</li>
                                            <li><strong>Order Date:</strong> <?php echo date("dMY"); ?></li>
                                            <li><strong>Status:</strong> PAID</li>
                                            <?php
                                            $query = "SELECT * FROM `register` WHERE `name` = '{$_SESSION['username']}'";
                                            $result = mysqli_query($cid, $query) or die("query failed");
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) { ?>

                                                    <li><strong>Deliver to</strong> <?php echo $row['address']; ?></li>
                                            <?php

                                                }
                                            }                                        ?>

                                        </ul>
                                    </div>
                                </div>
                                <div class="invoice-items">
                                    <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <!-- <th class="per70 text-center">Description</th>
                                                <th class="per5 text-center">Qty</th>
                                                <th class="per25 text-center">Total</th> -->
                                                </tr>
                                            </thead>
                                            <!-- <tbody>
                                            <tr>
                                                <td>1024MB Cloud 2.0 Server - elisium.dynamic.com (12/04/2014 - 01/03/2015)</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">$25.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td>Logo design</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">$200.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td>Backup - 1024MB Cloud 2.0 Server - elisium.dynamic.com</td>
                                                <td class="text-center">12</td>
                                                <td class="text-center">$12.00 USD</td>
                                            </tr>
                                        </tbody> -->
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="text-right">Grand Total:</th>
                                                    <th class="text-center">₹<?php echo "$gtotal"; ?></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-footer mt25">
                                    <p class="text-center">Thank you for shopping with us!</p>
                                </div>
                            </div>
                            <!-- col-lg-12 end here -->
                        </div>
                        <!-- End .row -->
                    </div>
                </div>
                <!-- End .panel -->
            </div>
            <!-- col-lg-12 end here -->
        </div>
    </div>
<?php } ?>