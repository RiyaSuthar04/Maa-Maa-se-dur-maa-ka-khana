<?php

include("common/connection.php");
session_start();
$agency_id = $_GET["editid"];
$name = $_GET["viewname"];



?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/odex-live/odex/search-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:13:31 GMT -->

<head>
	<meta charset="utf-8" />
	<meta name="author" content="www.frebsite.nl" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>MAA- maa se dur maa ka khana</title>

	<!-- Custom CSS -->
	<link href="assets/css/styles.css" rel="stylesheet">

</head>

<body class="grocery-theme">

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
		<?php include("common/header3.php"); ?>
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
							<h2 class="breadcrumbs_title">
								<?php echo $name; ?>
							</h2>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="home2.php"><i class="ti-home"></i></a></li>
									<?php
									$result = $conn->query("select address from tiffin_service where id='$agency_id'");
									$row = $result->fetch_object()
									?>
									<li class="breadcrumb-item"><?php echo $row->address;?></a></li>
									
								</ol>
								</ol>
							</nav>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- =========================== Breadcrumbs =================================== -->


		<!-- =========================== Search Products =================================== -->
		<section>
			<div class="container">

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="filter_search_opt">
							<a href="javascript:void(0);" onclick="openFilterSearch()"><i class="ti-reload"></i></a>
						</div>
					</div>
				</div>

				<div class="row">


					<div class="col-lg-12 col-md-12">

						<!-- Banner -->
						

						<!-- Shorter Toolbar -->
						
						<!-- row -->
						<div class="row">
							<?php
							$result = $conn->query("select * from food_item2 where tiffin_agency_id='$agency_id'");
							while ($row = $result->fetch_object()) {
							?>
								<!-- Single Item -->
								<div class="col-lg-4 col-md-4 col-sm-4">

									<form method="post">

										<div class="woo_product_grid">

											<div class="woo_product_thumb">
												<img src="agency/images/<?php echo $row->img; ?>" class="img-fluid" alt=""
													style="width:320px; height:300px" />
												<input type="hidden" name="img" value="<?php echo $row->img; ?>">

											</div>
											<div class="woo_product_caption center">
												<div class="woo_rate">
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star filled"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="woo_title">
													<h4 class="woo_pro_title"><a href="detail-1.html">
															<?php echo $row->fname; ?>
														</a></h4>
													<input type="hidden" name="fname" value="<?php echo $row->fname; ?>">
												</div>

												<div class="woo_title">
													<h4 class="woo_pro_title"><a href="detail-1.html">
															<?php echo $row->sdescription; ?>
														</a></h4>
												</div>

												<div class="woo_price">
													<h6>
														<?php echo $row->fprice; ?><span class="less_price">
														</span>
													</h6>
													<input type="hidden" name="price" value="<?php echo $row->fprice; ?>">
												</div>


											</div>
											<div class="woo_product_cart hover">
												

											</div>
										</div>

									</form>
								</div>
							<?php } ?>

						</div>
						<!-- row -->

						

					</div>

				</div>
			</div>
		</section>
		<!-- =========================== Search Products =================================== -->


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

<!-- Mirrored from themezhub.net/odex-live/odex/search-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:13:32 GMT -->

</html>