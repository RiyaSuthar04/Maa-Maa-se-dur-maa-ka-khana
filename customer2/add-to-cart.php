<?php
// error_reporting(0)
include("common/connection.php");
session_start();
$id=$_SESSION['uid'];
$view = $conn->query("SELECT * FROM cart2 where cid='$id'");
$gtotal = 0;

if (isset($_POST['update'])) {
	$uno = $_POST['unumber'];
	$uid = $_POST['uid'];
	$update = $conn->query("update cart2 set quantity='$uno' where id='$uid'");
	if ($update) {
		header("location:add-to-cart.php");
	} else {
		echo "<script>alert('code error..!!');</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/odex-live/odex/add-to-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:13:28 GMT -->

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
	<div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div>


	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<?php include("common/header2.php"); ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- =========================== Breadcrumbs =================================== -->
		<div class="breadcrumbs_wrap gray">
			<div class="container">
				<div class="row align-items-center">

					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-center">
							<h2 class="breadcrumbs_title">Cart</h2>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">Shop</a></li>
									<li class="breadcrumb-item active" aria-current="page">cart</li>
								</ol>
							</nav>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- =========================== Breadcrumbs =================================== -->

		<!-- =========================== Add To Cart =================================== -->
		<section>
			<div class="container">
				<div class="row">

					<div class="col-lg-8 col-md-12 col-sm-12 col-12">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Product</th>
										<th scope="col">Price</th>
										<th scope="col">Quantity</th>
										<th scope="col">Subscription</th>
										<th></th>
										<th scope="col">Total</th>
									</tr>
								</thead>
								<tbody>
									<?php
									while ($row = $view->fetch_object()) {
										?>
										<tr>
											<td>
												<div class="tbl_cart_product">
													<div class="tbl_cart_product_thumb">
														<img src="agency/images/<?php echo $row->img; ?>" alt=""
															class="img-fluid" />
													</div>
													<div class="tbl_cart_product_caption">
														<h5 class="tbl_pr_title">
															<?php echo $row->product; ?>
														</h5>

													</div>
												</div>
											</td>
											<td>
												<h4 class="tbl_org_price">
													<?php echo number_format($row->price); ?>
												</h4>
											</td>

											<td>
												<h4 class="tbl_org_price">
													<?php echo number_format($row->quantity); ?>
												</h4>
											</td>

											<form method="post">
												<td>
													<!-- <input type="number" name="unumber" 
														value="<?php echo $row->quantity; ?>" /> -->
													<select name="unumber" class="form-control tbl_quan">
													    <option value="1">Single day</option>
														<option value="7">Weekly</option>
														<option value="30">Monthly</option>
														<option value="60">2 Month</option>
														<option value="90">3 Month</option>
														<option value="180">6 Month</option>
													</select>	
												</td>
												<td>
													<input type="hidden" name="uid" value="<?php echo $row->id; ?>">
													<input type="submit" name="update" value="Update Cart"
														class="btn btn-outline-dark">
												</td>
											</form>
											<td>

												<div class="tbl_pr_action">
													<h5 class="tbl_total_price">
														<?php

														$p1 = floatval($row->price);
														$q1 = intval($row->quantity);

														$total = number_format($p1 * $q1);
														echo $total;
														?>
													</h5>

													<a href="remove-cart.php?delid=<?php echo $row->id;?>" class="tbl_remove"><i class="ti-close"></i></a>
												</div>
											</td>
											<?php
									}
									?>
								</tbody>
							</table>
						</div>

						<!-- Coupon Box -->
						<div class="row align-items-end justify-content-between mb-10 mb-md-0">
							<div class="col-12 col-md-7">

								<!-- Coupon -->

								<div class="col">
									<label class="font-size-sm font-weight-bold">Coupon code:</label>
								</div>
								<div class="row form-row">
									<div class="col">
										<!-- Input -->
										<input class="form-control form-control-sm" type="text"
											placeholder="Enter coupon code*">
									</div>
									<div class="col-auto">
										<!-- Button -->
										<button class="btn btn-dark" type="submit">Apply</button>
									</div>
								</div>


							</div>

							<div class="col-12 col-md-auto m-full">

							</div>
						</div>
						<!-- Coupon Box -->

					</div>

					<div class="col-lg-4 col-md-12 col-sm-12 col-12">
						<div class="cart_detail_box mb-4">
							<div class="card-body">
								<ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
									<li class="list-group-item d-flex">
										<h5 class="mb-0">Order Summary</h5>
									</li>
									<li class="list-group-item d-flex">
										<span>Subtotal</span> <span class="ml-auto font-size-sm">
											<?php
											$total=0;
											$sum = $conn->query("SELECT * FROM cart2 where cid='$id'");
											while ($row = $sum->fetch_object()) {
												$p1 = floatval($row->price);
												$q1 = intval($row->quantity);		
												$total = $total+($p1 * $q1);
												
											}
											echo $total;
											?>
										</span>
									</li>
									
									<li class="list-group-item d-flex font-size-lg font-weight-bold">
										<span>Total</span> <span class="ml-auto font-size-sm"><?php
											$total=0;
											$sum = $conn->query("SELECT * FROM cart2 where cid='$id'");
											while ($row = $sum->fetch_object()) {
												$p1 = floatval($row->price);
												$q1 = intval($row->quantity);

												$total =$total+ ($p1 * $q1);
												
											}
											echo $total;
											?></span>
									</li>

								</ul>
							</div>
						</div>
						<a class="btn btn-block btn-dark mb-2" href="billing.php">Proceed to Checkout</a>
						<a class="px-0 text-body" href="home2.php"><i class="ti-back-left mr-2"></i> Continue Shopping</a>
					</div>


				</div>
			</div>
		</section>
		<!-- =========================== Add To Cart =================================== -->



		<!-- ============================ Footer Start ================================== -->
		<?php include("common/footer.php"); ?>
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

	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>

<!-- Mirrored from themezhub.net/odex-live/odex/add-to-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:13:28 GMT -->

</html>