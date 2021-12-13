<?php include 'header.php'; ?>
<header class="section-header">
<nav class="navbar p-md-0 navbar-expand-sm navbar-light border-bottom">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTop4">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item dropdown">
		 	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">   Language </a>
		    <ul class="dropdown-menu small">
				<li><a class="dropdown-item" href="#">English</a></li>
				<li><a class="dropdown-item" href="#">Arabic</a></li>
				<li><a class="dropdown-item" href="#">Russian </a></li>
		    </ul>
		</li>
		<li class="nav-item dropdown">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> USD </a>
			<ul class="dropdown-menu small">
				<li><a class="dropdown-item" href="#">EUR</a></li>
				<li><a class="dropdown-item" href="#">AED</a></li>
				<li><a class="dropdown-item" href="#">RUBL </a></li>
		    </ul>
		</li>
    </ul>
    <ul class="navbar-nav">
		<li><a href="#" class="nav-link"> <i class="fa fa-envelope"></i> Email </a></li>
		<li><a href="#" class="nav-link"> <i class="fa fa-phone"></i> Call us </a></li>
	</ul> <!-- list-inline //  -->
  </div> <!-- navbar-collapse .// -->
</div> <!-- container //  -->
</nav>

<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-md-3 col-6">
		<a href="./" class="brand-wrap">
			<img class="logo" src="./images/logo.png">
		</a> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg col-sm col-md col-6 flex-grow-0">
		<div class="category-wrap dropdown d-inline-block float-right">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> 
				<i class="fa fa-bars"></i> All category 
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Machinery / Mechanical Parts / Tools </a>
				<a class="dropdown-item" href="#">Consumer Electronics / Home Appliances </a>
				<a class="dropdown-item" href="#">Auto / Transportation</a>
				<a class="dropdown-item" href="#">Apparel / Textiles / Timepieces </a>
				<a class="dropdown-item" href="#">Home & Garden / Construction / Lights </a>
				<a class="dropdown-item" href="#">Beauty & Personal Care / Health </a> 
			</div>
		</div>  <!-- category-wrap.// -->
	</div> <!-- col.// -->
	<a href="./store.php" class="btn btn-outline-primary">Store</a>
	<div class="col-lg  col-md-6 col-sm-12 col">
		<form action="#" class="search">
			<div class="input-group w-100">
			    <input type="text" class="form-control" style="width:60%;" placeholder="Search">
			    
			    <div class="input-group-append">
			      <button class="btn btn-primary" type="submit">
			        <i class="fa fa-search"></i>
			      </button>
			    </div>
		    </div>
		</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-3 col-sm-6 col-8 order-2 order-lg-3">
				<div class="d-flex justify-content-end mb-3 mb-lg-0">
					<div class="widget-header">
						<small class="title text-muted">Welcome guest!</small>
						<div> 
							<a href="signin.php">Sign in</a> <span class="dark-transp"> | </span>
							<a href="register.php"> Register</a>
						</div>
					</div>
					<a href="cart.php" class="widget-header pl-3 ml-3">
						<div class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></div>
						<span class="badge badge-pill badge-danger notify">0</span>
					</a>
				</div> <!-- widgets-wrap.// -->
			</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->



</header> <!-- section-header.// -->


<section class="section-content padding-y bg">
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
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
<tr>
	<td>
		<figure class="itemside align-items-center">
			<div class="aside"><img src="./images/items/11.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Camera Canon EOS M50 Kit</a>
				<p class="text-muted small">Matrix: 25 Mpx <br> Brand: Canon</p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<!-- col.// -->
					<div class="col"> 
						<div class="input-group input-spinner">
							<div class="input-group-prepend">
							<button class="btn btn-light" type="button" id="button-plus"> <i class="fa fa-minus"></i> </button>
							</div>
							<input type="text" class="form-control"  value="1">
							<div class="input-group-append">
							<button class="btn btn-light" type="button" id="button-minus"> <i class="fa fa-plus"></i> </button>
							</div>
						</div> <!-- input-group.// -->
					</div> <!-- col.// -->
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">$1156.00</var> 
			<small class="text-muted"> $315.20 each </small> 
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	<a href="" class="btn btn-danger"> Remove</a>
	</td>
</tr>
<tr>
	<td>
		<figure class="itemside align-items-center">
			<div class="aside"><img src="./images/items/10.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">ADATA Premier ONE microSDXC</a>
				<p class="text-muted small">Size: 256 GB  <br> Brand: ADATA </p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<!-- col.// -->
					<div class="col"> 
						<div class="input-group input-spinner">
							<div class="input-group-prepend">
							<button class="btn btn-light" type="button" id="button-plus"> <i class="fa fa-minus"></i> </button>
							</div>
							<input type="text" class="form-control"  value="1">
							<div class="input-group-append">
							<button class="btn btn-light" type="button" id="button-minus"> <i class="fa fa-plus"></i> </button>
							</div>
						</div> <!-- input-group.// -->
					</div> <!-- col.// -->
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">$149.97</var> 
			<small  class="text-muted"> $75.00 each </small>  
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	<a href="" class="btn btn-danger"> Remove</a>
	</td>
</tr>
<tr>
	<td>
		<figure class="itemside align-items-center">
			<div class="aside"><img src="./images/items/9.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Logitec headset for gaming</a>
				<p class="small text-muted">Version: CUH-ZCT2E  <br> Brand: Sony</p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<!-- col.// -->
					<div class="col"> 
						<div class="input-group input-spinner">
							<div class="input-group-prepend">
							<button class="btn btn-light" type="button" id="button-plus"> <i class="fa fa-minus"></i> </button>
							</div>
							<input type="text" class="form-control"  value="1">
							<div class="input-group-append">
							<button class="btn btn-light" type="button" id="button-minus"> <i class="fa fa-plus"></i> </button>
							</div>
						</div> <!-- input-group.// -->
					</div> <!-- col.// -->
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">$98.00</var> 
			<small class="text-muted"> $578.00 each</small> 
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
		<a href="" class="btn btn-danger"> Remove</a>
	</td>
</tr>
</tbody>
</table>
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<aside class="col-lg-3">

		<div class="card">
		<div class="card-body">
			<dl class="dlist-align">
			  <dt>Total price:</dt>
			  <dd class="text-right">$69.97</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Tax:</dt>
			  <dd class="text-right"> $10.00</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Total:</dt>
			  <dd class="text-right text-dark b"><strong>$59.97</strong></dd>
			</dl>
			<hr>
			<p class="text-center mb-3">
				<img src="./images/misc/payments.png" height="26">
			</p>
			<a href="place-order.php" class="btn btn-primary btn-block"> Checkout </a>
			<a href="store.php" class="btn btn-light btn-block">Continue Shopping</a>
		</div> <!-- card-body.// -->
		</div> <!-- card.// -->

</aside> <!-- col.// -->


</div> <!-- row.// -->
<!-- ============================ COMPONENT 1 END .// ================================= -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
</body>
</html>