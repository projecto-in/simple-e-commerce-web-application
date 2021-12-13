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
	<a href="store.php" class="btn btn-outline-primary">Store</a>
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
					<a href="#" class="widget-header pl-3 ml-3">
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
<div class="card">
	<div class="row no-gutters">
		<aside class="col-md-6">
<article class="gallery-wrap"> 
	<div class="img-big-wrap">
	   <a href="#"><img src="./images/items/12.jpg"></a>
	</div> <!-- img-big-wrap.// -->
	
</article> <!-- gallery-wrap .end// -->
		</aside>
		<main class="col-md-6 border-left">
<article class="content-body">

<h2 class="title">Off-White Odsy-1000 Low-Top Sneakers</h2>

<div class="mb-3"> 
	<var class="price h4">$815.00</var> 
</div> 

<p>Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>


<hr>
	<div class="row">
		<div class="item-option-select">
			<h6>Choose Color</h6>
			<div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
			  <label class="btn btn-light">
			    <input type="radio" name="radio_color"> Silver
			  </label>
			  <label class="btn btn-light">
			    <input type="radio" name="radio_color" > Gray
			  </label>
			  <label class="btn btn-light active">
			    <input type="radio" name="radio_color checked"> Gold
			  </label>
			  <label class="btn btn-light">
			    <input type="radio" name="radio_color"> Black
			  </label>
			</div> 
		</div>
	</div> <!-- row.// -->
	<div class="row">
		<div class="item-option-select">
			<h6>Select Size</h6>
			<div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
			  <label class="btn btn-light">
			    <input type="radio" name="radio_color"> S
			  </label>
			  <label class="btn btn-light active">
			    <input type="radio" name="radio_color" checked> M
			  </label>
			  <label class="btn btn-light">
			    <input type="radio" name="radio_color"> L
			  </label>
			  <label class="btn btn-light">
			    <input type="radio" name="radio_color"> XL
			  </label>
			</div> 
		</div>
	</div> <!-- row.// -->
	<hr>
	<a href="product-detail.php" class="btn  btn-primary"> <span class="text">Add to cart</span> <i class="fas fa-shopping-cart"></i>  </a>
</article> <!-- product-info-aside .// -->
		</main> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->
<!-- ============================ COMPONENT 1 END .// ================================= -->

<br>

<div class="row">
			<div class="col-md-9">

	<header class="section-heading">
		<h3>Customer Reviews </h3>  
		
	</header>

	<article class="box mb-3">
		<div class="icontext w-100">
			<img src="./images/avatars/avatar1.jpg" class="img-xs icon rounded-circle">
			<div class="text">
				<span class="date text-muted float-md-right">24.04.2020 </span>  
				<h6 class="mb-1">Mike John </h6>
				
			</div>
		</div> <!-- icontext.// -->
		<div class="mt-3">
			<p>
				Dummy comment Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip
			</p>	
		</div>
	</article>

	

	</div> <!-- col.// -->
</div> <!-- row.// -->


</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

</body>
</html>