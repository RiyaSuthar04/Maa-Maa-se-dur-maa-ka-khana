<?php
include("common/connection.php");
session_start();
$id=$_SESSION["uid"];
$exe=$conn->query("select * from user where uid='$id' ");
if($row=$exe->fetch_object())
{
	$fname=$row->fname;
	$lname=$row->lname;
	$email=$row->email;
	$dob=$row->dob;
	$contact=$row->contact;
	$address=$row->address;
	$password=$row->password;
	
}
if(isset($_POST['edit']))
{
	header("location:editprofile.php");
}
?>



<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/odex-live/odex/account-info.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:17:13 GMT -->
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
			<?php include("common/header2.php");?>
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
								<h2 class="breadcrumbs_title">Account Settings</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">My Account</a></li>
									<li class="breadcrumb-item active" aria-current="page">Account Settings</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== Account Settings =================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-4 col-md-3">
							<nav class="dashboard-nav mb-10 mb-md-0">
							  <div class="list-group list-group-sm list-group-strong list-group-flush-x">
								<a class="list-group-item list-group-item-action dropright-toggle" href="order-history.php">
								  Order History
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle active" href="account-info.php">
								  Account Settings
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="feedback.php">
								  User Feedback
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="logout.php">
								  Logout
								</a>
							  </div>
							</nav>
						</div>
						
						<div class="col-lg-8 col-md-9">
							<!-- Total Items -->
							<div class="card style-2">
								<div class="card-header">
									<h4 class="mb-0">Account Detail</h4>
								</div>
								<div class="card-body">
									<form class="submit-page" method="post">
										<div class="row">
										
											<div class="col-12 col-md-6">
											  <div class="form-group">
												<label>First Name</label>
												<input class="form-control" type="text" value="<?php echo $fname;?>" readonly >
											  </div>

											</div>
										
											<div class="col-12 col-md-6">
											  <div class="form-group">
												<label>Last Name</label>
												<input class="form-control" type="text" value="<?php echo $lname;?>" readonly >
											  </div>

											</div>
										
											<div class="col-12">
												<div class="form-group">
													<label> Email Address</label>
													<input class="form-control" type="email" value="<?php echo $email;?>" readonly >
												</div>
											</div>

											<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" value="<?php echo $address;?>" name="address" readonly>
											</div>
										</div>

										<div class="col-12 col-lg-6">
                 							 <div class="form-outline datepicker w-100">
											 <label for="birthdayDate" class="form-label">Birthday</label>
                    							<input type="date" class="form-control form-control-lg" id="birthdayDate" value="<?php echo $dob;?>" name="dob" readonly>
                 							 </div>

											</div>

											<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Contact</label>
												<input type="text" class="form-control" value="<?php echo $contact;?>" name="contact" readonly>
											</div>
										</div>
										
											
						
											<div class="col-md-6">
											<button class="btn btn-dark" name="edit" type="submit">Edit Profile</button>
											</div>

											<div class="col-md-6">
											  <button class="btn btn-dark" type="submit">Log Out</button>
											</div>
										
										</div>
									</form>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- =========================== Account Settings =================================== -->

			
			<!-- ============================ Call To Action ================================== --> 
			<?php include("common/footer.php");?>
			<!-- ============================ Footer End ================================== -->
			
			

			<!-- Left Collapse navigation -->
			<div class="w3-ch-sideBar-left w3-bar-block w3-card-2 w3-animate-right"  style="display:none;right:0;" id="leftMenu">
				<div class="rightMenu-scroll">
					<div class="flixel">
						<h4 class="cart_heading">Navigation</h4>
						<button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
					</div>
					
					<div class="right-ch-sideBar">
						
						<div class="side_navigation_collapse">
							<div class="d-navigation">
								<ul id="side-menu">
									<li class="dropdown">
										<a href="#">Category<span class="ti-angle-left"></span></a>
										<ul class="nav nav-second-level">
											<li><a href="#">Grocery</a></li>
											<li><a href="#">Organic</a></li>
											<li><a href="#">Electronics</a></li>
											<li><a href="#">Fashion</a></li>
											<li><a href="#">Education</a></li>
											<li><a href="#">Beauty</a></li>
											
											<li class="dropdown">
												<a href="#">Digital<span class="ti-angle-left"></span></a>
												<ul class="nav nav-second-level">
													<li><a href="#">Sub Product</a></li>
													<li><a href="#">Sub Product</a></li>
													<li><a href="#">Sub Product</a></li>
													<li><a href="#">Sub Product</a></li>
												</ul>
											</li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a href="#">Brands<span class="ti-angle-left"></span></a>
										<ul class="nav nav-second-level">
											<li><a href="#">Nike</a></li>
											<li><a href="#">Apple</a></li>
											<li><a href="#">Hackerl</a></li>
											<li><a href="#">Tuffan</a></li>
											<li><a href="#">Orio</a></li>
											<li><a href="#">Kite</a></li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a href="#">Products<span class="ti-angle-left"></span></a>
										<ul class="nav nav-second-level">
											<li><a href="#">3 Columns products</a></li>
											<li><a href="#">4 Columns products</a></li>
											<li><a href="#">5 Columns products</a></li>
											<li><a href="#">6 Columns products</a></li>
											<li><a href="#">7 Columns products</a></li>
											<li><a href="#">8 Columns products</a></li>
										</ul>
									</li>
									
									<li><a href="#">About Us</a></li>
									<li><a href="#">Blogs</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Buy Odex</a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- Left Collapse navigation -->
			

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

		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from themezhub.net/odex-live/odex/account-info.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:17:13 GMT -->
</html>