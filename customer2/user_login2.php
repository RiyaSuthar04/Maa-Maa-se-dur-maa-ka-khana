<?php

     session_start();
    include("common/connection.php");

    if(isset($_POST['submit']))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
	
		$result = $conn->query("select * from user where email='$email' and password='$password'");
       	 $rowcount= $result->num_rows;
        	if($rowcount == 1)
        	{
          		$row= $result->fetch_object();
          		$_SESSION['uid']= $row->uid;
         		 header("location:home2.php");
       		 }
       		 else
        	{
          		echo"<script>alert('invalid username or password');</script>";
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
		
        <title>MAA- maa se dur maa ka khana</title>
		 
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
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<?php include("common/header3.php");?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- =========================== Breadcrumbs =================================== -->
			<div class="breadcrumbs_wrap dark">
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="text-center">
								<h2 class="breadcrumbs_title">User Login</h2>
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
			<section>
				<div class="container ">
					
					<div class="row">
						
						<div class="col-lg-6 col-md-12 col-sm-12 mx-auto">
							<div class="login_signup">
								<h3 class="login_sec_title">Sign In</h3>
								<form method="post">
								
									<div class="form-group">
										<label>Email Address</label>
										<input type="text" class="form-control" name="email" required="">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password" required="">
									</div>
									
									<div class="login_flex">
										<div class="login_flex_1">
											<a href="user_reg.php" class="text-bold">Don't Have Account?</a>
										</div>
										<div class="login_flex_2">
											<div class="form-group mb-0">
												<button type="submit" class="btn btn-md btn-theme" name="submit">Login</button>
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

			<!-- ============================ Call To Action ================================== --> 
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