<?php

	include("common/connection.php");
	session_start();
	if(isset($_POST['submit']))
  {
    $name=$_POST["name"];
	$email= $_POST["email"];
	$contact= $_POST["num"];
	$date= $_POST["date"];
	$msg=$_POST["msg"];
    $exe = $conn->query("insert into contact(name,email,contact_no,msg,date)values('$name','$email','$contact','$msg','$date')");
    if($exe)
    {
      echo"<script>alert('data inserted successfully..!!');</script>";
    }
    else
    {
      echo"<script>alert('code error..!!');</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/odex-live/odex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:13:29 GMT -->
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
								<h2 class="breadcrumbs_title">Get in Touch</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">Shop</a></li>
									<li class="breadcrumb-item active" aria-current="page">Contact</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== Contact Us =================================== -->
			<section class="gray">
				<div class="container">
				
					<div class="row mb-4">
						
						<div class="col-lg-4 col-md-4">
							
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="contact-box">
								<img src="assets/img/india-marker.png" class="mx-auto" alt="">
								<h4>Evolphin India</h4>
								maa@gmail.com<br>
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							
						</div>
						
					</div>
					
					<div class="row mt-5 align-items-center">
						
						<div class="col-lg-5 col-md-12 hide-91">
							<img src="assets/img/logo-color.png" class="img-fluid rounded" alt="" />
						</div>
						
						<div class="col-lg-7 col-md-12">
							<div class="contact-form">
								<form method="post">
								
									<div class="form-row">
									
										<div class="form-group col-md-6">
										  <label>Name</label>
										  <input type="text" class="form-control" placeholder="Name" name="name">
										</div>
										
										<div class="form-group col-md-6">
										  <label>Email</label>
										  <input type="email" class="form-control" placeholder="Email" name="email">
										</div>
									</div>

									<div class="form-group col-md-12">
										  <label>contact</label>
										  <input type="text" class="form-control" placeholder="contact" name="num">
										</div>
									
									<div class="form-group col-lg-12 col-md-12">
										<label>Message</label>
										<textarea class="form-control" placeholder="Type Here..." name="msg"></textarea>
									</div>

									<div class="form-group col-md-12">
										  <label>date</label>
										  <input type="date" class="form-control" placeholder="date" name="date">
										</div>
									</div>
									
									<div class="form-group col-lg-12 col-md-12">
									<button type="submit" class="btn btn-primary" name="submit">Send Request</button>
									</div>
									
								</form>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- =========================== Contact Us =================================== -->

			
			
			
			<!-- ============================ Footer Start ================================== -->
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

<!-- Mirrored from themezhub.net/odex-live/odex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:13:31 GMT -->
</html>