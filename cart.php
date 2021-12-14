<?php require_once "dbconfig.php"; ?>
<?php include 'header.php'; ?>
<?php include 'header-main.php';
if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
      $item_array_id = array_column($_SESSION["cart"], "id");
      if (!in_array($_GET["id"], $item_array_id)) {
        $count = count($_SESSION["cart"]);

        $item_array = array(
          'id' => $_GET["id"],
		  'img' => $_POST["hidden_img"],
          'product_name' => $_POST["hidden_product_name"],
          'price' => $_POST["hidden_price"],
          'category_slug' => $_POST["hidden_category_slug"],
          'quantity' => $_POST["quantity"]
        );
        $_SESSION["cart"][$count] = $item_array;
        echo '<script>window.location="cart.php"</script>';
      } else {

        echo '<script>window.location="cart.php"</script>';
      }
    } else {
      $item_array = array(
        'id' => $_GET["id"],
        'img' => $_POST["hidden_img"],
		'product_name' => $_POST["hidden_product_name"],
        'price' => $_POST["hidden_price"],
        'category_slug' => $_POST["hidden_category_slug"],
        'quantity' => $_POST["quantity"]
      );
      $_SESSION["cart"][0] = $item_array;
    }
  }
  if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
      foreach ($_SESSION["cart"] as $keys => $values) {
        if ($values["id"] == $_GET["id"]) {
          unset($_SESSION["cart"][$keys]);
          echo '<script>alert("Food has been removed")</script>';
          echo '<script>window.location="cart.php"</script>';
        }
      }
    }
  }

  if (isset($_GET["action"])) {
    if ($_GET["action"] == "empty") {
      foreach ($_SESSION["cart"] as $keys => $values) {

        unset($_SESSION["cart"]);
        echo '<script>alert("Cart is made empty!")</script>';
        echo '<script>window.location="cart.php"</script>';
      }
    }
  }
?>
<section class="section-content padding-y bg">

    <?php if (!empty($_SESSION["cart"])) { ?>

    <div class="container">

        <!-- ============================ COMPONENT 1 ================================= -->

        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" width="120">Total</th>

                                <th scope="col" class="text-right" width="200"> </th>
                            </tr>
                        </thead>
                        <?php

							$total = 0;
							foreach ($_SESSION["cart"] as $keys => $values) {
							?>
                        <tbody>
                            <tr>
                                <td>
                                    <figure class="itemside align-items-center">
                                        <div class="aside"><img src="./images/items/<?php echo $values["img"] ?>"
                                                class="img-sm"></div>
                                        <figcaption class="info">
                                            <a href="#"
                                                class="title text-dark"><?php echo $values["product_name"]; ?></a>
                                            <!-- <p class="text-muted small">Matrix: 25 Mpx <br> Brand: Canon</p> -->
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <!-- col.// -->
                                    <?php echo $values["quantity"] ?>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price"><?php echo $values["price"] ?></var>
                                        <!-- <small class="text-muted"> $315.20 each </small> -->
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var
                                            class="price"><?php echo number_format($values["quantity"] * $values["price"], 2); ?></var>
                                        <!-- <small class="text-muted"> $315.20 each </small> -->
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right">
                                    <a href="cart.php?action=delete&id=<?php echo $values["id"]; ?>"
                                        class="btn btn-danger"> Remove</a>
                                </td>
                            </tr>
                            <?php 
							$total = $total + ($values["quantity"] * $values["price"]);
							}
							?>
                        </tbody>
                    </table>
                </div> <!-- card.// -->

            </aside> <!-- col.// -->
            <aside class="col-lg-3">

                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Grand Total :</dt>
                            <dd class="text-right"><?php echo number_format($total); ?></dd>
                        </dl>

                        <hr>
                        <p class="text-center mb-3">
                            <img src="./images/misc/payments.png" height="26">
                        </p>


                        <a href="store.php" class="btn btn-success btn-block">Continue Shopping</a>
                        <a href="cart.php?action=empty" class="btn btn-danger btn-block"> Empty Cart </a>
                        <a href="order-complete.php" class="btn btn-primary btn-block"> Checkout </a>
                    </div> <!-- card-body.// -->
                </div> <!-- card.// -->

            </aside> <!-- col.// -->


        </div> <!-- row.// -->
        <!-- ============================ COMPONENT 1 END .// ================================= -->

    </div> <!-- container .//  -->

    <?php }
	
	if (empty($_SESSION["cart"])) {
  ?>
    <div class="container">
        <div class="jumbotron">
            <h1>Your Shopping Cart</h1>
            <p>Oops! empty cart. Go back and <a href="index.php">order now.</a></p>

        </div>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
  }
  ?>
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
</body>

</html>