<?php

	include("common/connection.php");
	if(isset($_POST['submit']))
  {
    $fname=$_POST["fname"];
    $lname= $_POST["lname"];
	$email= $_POST["email"];
	$dob= $_POST["dob"];
	$gender= $_POST["gender"];
	$contact= $_POST["contact"];
	$address= $_POST["address"];
	$password= $_POST["password"];
	$cpassword= $_POST["cpassword"];
	$reg = date("Y-m-d H:i:s");
	if($password == $cpassword)
	{
    $exe = $conn->query("insert into user(fname,lname,email,gender,dob,contact,address,password,reg_date)values('$fname','$lname','$email','$gender','$dob','$contact','$address','$password','$reg')");
    if($exe)
    {
      echo"<script>alert('data inserted successfully..!!');</script>";
    }
    else
    {
      echo"<script>alert('code error..!!');</script>";
    }
	}
	else{
		echo"<script>alert('password missmatched..!!');</script>";
	}

  }

?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/odex-live/odex/login-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:17:16 GMT -->
<head>
		<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
        <title>MAA</title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
    </head>
	
    <body class="grocery-theme light">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
           <?php include("common/header3.php");?>
			<!-- ============================================================== -->
			
			<!-- =========================== Breadcrumbs =================================== -->
			<div class="breadcrumbs_wrap dark">
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="text-center">
								<h2 class="breadcrumbs_title">User Register</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item active" aria-current="page">Login-register</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== Login/Signup =================================== -->
			<section >
				<div class="container">
					<div class="row">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="login_signup">
								<h3 class="login_sec_title">Create An Account</h3>
								<form method="post">
									
									<div class="row">
									
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" class="form-control" name="fname" required="">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" class="form-control" name="lname" required="">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Email Address</label>
												<input type="email" class="form-control" name="email" required="">
											</div>
										</div>

									
                						<div class="col-md-6 mb-4 d-flex align-items-center">

                 							<div class="form-outline datepicker w-100">
											 <label for="birthdayDate" class="form-label">Birthday</label>
                    							<input type="date" class="form-control form-control-lg" id="birthdayDate" name="dob" required="">
                 							 </div>

                						</div>
               							 <div class="col-md-6 mb-4">

                 							 <h6 class="mb-2 pb-1">Gender: </h6>

                 							 <div class="form-check form-check-inline">
                 							   <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" checked />
                    						   <label class="form-check-label" for="femaleGender">Female</label>
                 							 </div>

                  							<div class="form-check form-check-inline">
                   								 <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                    							<label class="form-check-label" for="maleGender">Male</label>
                  							</div>

                 							 <div class="form-check form-check-inline">
                  								  <input class="form-check-input" type="radio" name="gender" id="otherGender" value="others" />
                    								<label class="form-check-label" for="otherGender">Other</label>
                  							</div>

                						</div>
              
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Contact</label>
												<input type="text" class="form-control" name="contact" required="">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" name="address" required="">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Password</label>
												<input type="password" class="form-control" name="password" required="">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Confirm Password</label>
												<input type="password" class="form-control" name="cpassword" required="">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
												<div class="d-flex justify-content-center">
  													<div class="login">
  														<div class="form-group mb-0">
      														<button type="submit" class="btn btn-md btn-theme" name="submit">Sign Up</button>
   														</div>
 													</div>
												</div>

											</div>
										</div>
										
									</div>
						
								
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- =========================== Login/Signup =================================== -->

			<?php include("common/footer.php");?>
			<!-- ============================ Footer End ================================== -->
			
			
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/metisMenu.min.js"></script>
		<script src="assets/js/owl-carousel.js"></script>
		<script src="assets/js/ion.rangeSlider.min.js"></script>
		<script src="assets/js/smoothproducts.js"></script>
		<script src="assets/js/jquery-rating.js"></script>
		<script src="assets/js/jQuery.style.switcher.js"></script>
		<script src="assets/js/custom.js"></script>
		
		<script>
			function openRightMenu() {
				document.getElementById("rightMenu").style.display = "block";
			}
			function closeRightMenu() {
				document.getElementById("rightMenu").style.display = "none";
			}
		</script>
		
		<script>
			function openLeftMenu() {
				document.getElementById("leftMenu").style.display = "block";
			}
			function closeLeftMenu() {
				document.getElementById("leftMenu").style.display = "none";
			}
		</script>
		
		<script>
			function openFilterSearch() {
				document.getElementById("filter_search").style.display = "block";
			}
			function closeFilterSearch() {
				document.getElementById("filter_search").style.display = "none";
			}
		</script>

		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from themezhub.net/odex-live/odex/login-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:17:16 GMT -->
</html>