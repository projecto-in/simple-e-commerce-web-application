<?php require_once "dbconfig.php"; ?>
<?php include 'header.php'; ?>
<?php include 'header-main.php'; ?>

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Our Store</h2>

    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">

                <div class="card">
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="title">Categories</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_1" style="">
                            <div class="card-body">

                                <ul class="list-menu">
                                    <?php
									$r = select("select * from category");
									while ($row = mysqli_fetch_array($r)) { ?>
                                    <li><a href="category.php?category=<?php echo $row['category_slug']; ?>"><?php echo $row['category_name'];?>
                                        </a></li>
                                    <?php
									}
									?>
                                </ul>

                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group  .// -->
                </div> <!-- card.// -->

            </aside> <!-- col.// -->
            <main class="col-md-9">

                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <span class="mr-md-auto">32 Items found </span>

                    </div>
                </header><!-- sect-heading -->

                <div class="row">
                    <?php

							$limit = 3;

							if (isset($_GET['page'])) {
								$page = $_GET['page'];
							} else {
								$page = 1;
							}
							$offset = ($page - 1) * $limit;
							$record_index = ($page - 1) * $limit;
							$product_query = "SELECT * FROM `products` LIMIT $record_index, $limit ";
							$product_result = mysqli_query($cid, $product_query) or die("Product Query Failed.");

							if (mysqli_num_rows($product_result) > 0) {
								while ($row = mysqli_fetch_assoc($product_result)) {


							?>

                    <div class="col-md-4">
                        <form action="cart.php?action=add&id=<?php echo $row["id"]; ?>" method="POST">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">

                                    <img src="images/items/<?php echo $row['img'];?>">

                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height">
                                        <a href="product-detail.php?id=<?php echo $row['id']; ?>"
                                            class="title"><?php echo $row['product_name']; ?></a>
                                        <div class="price-wrap mt-2">
                                            <span class="price">₹<?php echo $row['price']; ?></span>
                                            <!-- <del class="price-old">$1980</del> -->
                                        </div> <!-- price-wrap.// -->
                                    </div>
                                    <!-- col.// -->
                                    <div class="col">
                                        <p class="card-text">Quantity:
                                            <input type="number" min="1" max="25" name="quantity" class="form-control"
                                                value="1" style="width: 60px;">
                                        </p>
                                    </div> <!-- col.// -->
                                    <br>

                                    <input type="hidden" name="hidden_product_name"
                                        value="<?php echo $row["product_name"]; ?>">
                                    <input type="hidden" name="hidden_img" value="<?php echo $row["img"]; ?>">
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                    <input type="hidden" name="hidden_category_slug"
                                        value="<?php echo $row["categoty_slug"]; ?>">
                                    <input type="submit" name="add" class="btn btn-block btn-success"
                                        value="Added to cart">
                                </figcaption>
                            </figure>
                        </form>
                    </div> <!-- col.// -->

                    <?php  }
			}else{
				echo "<h3>NO DATA FOUND.</h3>";
			} ?>


                </div> <!-- row end.// -->


                <div style="text-align:center" class="col-lg-12">


				<?php

					$dep_query1 = "SELECT * FROM `products`";
					$result1 = mysqli_query($cid, $dep_query1) or die("query failed..");

					if (mysqli_num_rows($result1) > 0) {

						$total_records = mysqli_num_rows($result1);
						$total_pages = ceil($total_records / $limit);
						echo '  <ul class="pagination">';
						if ($page > 1) {
							echo '<li class="paginate_button page-item previous" id="zero_config_previous"><a href="store.php?page=' . ($page - 1) . '" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>';
						}
						for ($i = 1; $i < $total_pages; $i++) {
							if ($i == $page) {
								$active = "active";
							} else {
								$active = "";
							}
							echo '<li class="paginate_button page-item ' . $active . '"><a href="store.php?page=' . $i . '" aria-controls="zero_config"  class="page-link">' . $i . '</a></li>';
						}
						if ($total_pages > $page) {
							echo '<li class="paginate_button page-item next" id="zero_config_next"><a href="store.php?page=' . ($page + 1) . '" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>';
						}
						echo '</ul>';

					?>

					<?php } ?>
                                                            
                                                              

                </div>

            </main> <!-- col.// -->

        </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->
<?php include 'footer.php'; ?>
<!-- ========================= FOOTER END // ========================= -->


<script>
$("input[type='number']").inputSpinner()
</script>



</body>

</html>