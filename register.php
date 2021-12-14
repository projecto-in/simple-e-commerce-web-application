<?php require_once "dbconfig.php"; ?>
<?php include 'header.php'; ?>
<?php include 'header-main.php'; ?>



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

	<!-- ============================ COMPONENT REGISTER   ================================= -->
	<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
		<article class="card-body">
			<header class="mb-4">
				<h4 class="card-title">Sign up</h4>
			</header>
			<?php
			if (isset($_REQUEST['signup'])) {
				extract($_REQUEST);
				$a = select("select * from register where email='$email'");
				$ab = mysqli_num_rows($a);
				if ($ab == 1) {
					echo "<div class='alert alert-danger'>Email Already Exist</div>";
				} else {
					$n = iud("INSERT INTO `register`(`name`, `email`, `password`,`first_name`,`last_name`,`address`)
         VALUES ('$name', '$email', '$password','$fname','$lname', '$address' )");
					if ($n == 1) {
						echo "<div class='alert alert-success'>Successful</div>";
						
					} else {
						echo "<div class='alert alert-danger'>Something went wrong Please Try Again</div>";
					}
				}
			}

			?>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="name" class="form-control" placeholder="">
					<!-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> -->
				</div> <!-- form-group end.// -->
				<div class="form-row">
					<div class="col form-group">
						<label>First name</label>
						<input type="text" name="fname" class="form-control" placeholder="">
					</div> <!-- form-group end.// -->
					<div class="col form-group">
						<label>Last name</label>
						<input type="text" name="lname" class="form-control" placeholder="">
					</div> <!-- form-group end.// -->
				</div> <!-- form-row end.// -->
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="">
					<small class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div> <!-- form-group end.// -->
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="">
					<small class="form-text text-muted">We'll never share your password with anyone else.</small>
				</div> <!-- form-group end.// -->
				

				<div class="form-group">
				<label>Address</label>
				<textarea name="address" class="form-control" id="" cols="30" rows="3"></textarea>

				</div>
				<div class="form-group">
					<button type="submit" name="signup" class="btn btn-primary btn-block"> Register </button>
				</div> <!-- form-group// -->

			</form>
		</article><!-- card-body.// -->
	</div> <!-- card .// -->
	<p class="text-center mt-4">Have an account? <a href="">Log In</a></p>
	<br><br>
	<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<?php include 'footer.php'; ?>
<!-- ========================= FOOTER END // ========================= -->



</body>

</html>