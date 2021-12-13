<?php require_once "dbconfig.php"; ?>
<?php include 'header.php'; ?>
<?php include 'header-main.php'; ?>



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh">

<!-- ============================ COMPONENT LOGIN   ================================= -->
	<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
      <div class="card-body">
      <h4 class="card-title mb-4">Sign in</h4>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
			 <input type="email" name="email" class="form-control" placeholder="Email Address" >
          </div> <!-- form-group// -->
          <div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" >
          </div> <!-- form-group// -->
          
          <div class="form-group">
          	<a href="#" class="float-right">Forgot password?</a> 
           
          </div> <!-- form-group form-check .// -->
          <div class="form-group">
              <button type="submit" name="signin" class="btn btn-primary btn-block"> Login  </button>
          </div> <!-- form-group// -->    
      </form>
	  <?php
            if (isset($_REQUEST['signin'])) {
              extract($_REQUEST);
              $a = select("select * from register where email='$email' and password='$password'");
              $ab = mysqli_num_rows($a);
              if ($ab == 1) {
                while ($t = mysqli_fetch_array($a)) {
                  $_SESSION['userlogin'] = $t[0];
                  $_SESSION['username'] = $t[1];
                  echo "<script>window.location='index.php';</script>";
                }
              } else {
                echo "<div class='alert alert-danger'>Something went wrong Please Try Again</div>";
              }
            }

            ?>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->

     <p class="text-center mt-4">Don't have account? <a href="register.php">Sign up</a></p>
     <br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<?php include 'footer.php'; ?>
<!-- ========================= FOOTER END // ========================= -->



</body>
</html>