<?php

include("common/connection.php");
session_start();
$id=$_SESSION['uid'];
$view = $conn->query("SELECT t.*, a.tiffin_agency_name
FROM final_product t
JOIN tiffin_service a ON t.agency_id = a.id
where cid='$id'");

?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/odex-live/odex/order-history.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:17:13 GMT -->
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
           
			<?php include("common/header2.php");?>
		
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- =========================== Breadcrumbs =================================== -->
			<div class="breadcrumbs_wrap dark">
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="text-center">
								<h2 class="breadcrumbs_title">My All Orders</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">My Account</a></li>
									<li class="breadcrumb-item active" aria-current="page">My Orders</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			
			<!-- =========================== My All Orders =================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-4 col-md-3">
							<nav class="dashboard-nav mb-10 mb-md-0">
							  <div class="list-group list-group-sm list-group-strong list-group-flush-x">
								<a class="list-group-item list-group-item-action dropright-toggle active" href="order-history.php">
								  Order History
								</a>
								<a class="list-group-item list-group-item-action dropright-toggle" href="account-info.php">
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
						
							<!-- Order Items -->
							<div class="card style-2">
								<div class="card-header">
									<h4 class="mb-0">Total Order</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
												<th scope="col"></th>
													<th scope="col">food Item Name</th>
													<th scope="col">Quantity</th>
													<th scope="col">Price</th>
													<th scope="col">Agency Name</th>
													<th scope="col">Address</th>
													<th scope="col">Order Date</th>
												</tr>
											</thead>
											<tbody>
											<?php
												while ($row = $view->fetch_object()) {
											?>
												<tr>
												    <td> <img  src="agency/images/<?php echo $row->img; ?>"  height="100px" width="100px" ></td>
												    <td><?php echo $row->product; ?></td>
													<td><?php echo $row->quantity; ?></td>
													<td><?php echo $row->price; ?></td>
													<td><?php echo $row->tiffin_agency_name; ?></td>
													<td><?php echo $row->address1; ?></td>
													<td><?php echo $row->date; ?></td>													
												</tr>
												<?php
									}
									?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							
						</div>						
						
					</div>
				</div>
			</section>
			<!-- =========================== My All Orders =================================== -->

			
			<!-- ============================ Footer Start ================================== -->
			<?php include("common/footer.php");?>
			<!-- ============================ Footer End ================================== -->
			
			<!-- cart -->
			

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

<!-- Mirrored from themezhub.net/odex-live/odex/order-history.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:17:13 GMT -->
</html>