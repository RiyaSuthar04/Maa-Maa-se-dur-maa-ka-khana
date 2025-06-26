<?php

include("common/connection.php");
session_start();
$id=$_SESSION["uid"];
$exe = $conn->query("select categories.cat_name as cat_name, subcat.*from categories join subcat on subcat.cat_id=categories.id");


?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/odex-live/odex/grocery-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:13:36 GMT -->

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
		<?php include("common/header.php"); ?>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ======================== Banner Start ==================== -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="assets/img/d2.png" alt="First slide" height="490" height="300">
					<div class="carousel-caption banner_caption light">
						<h4 class="theme-cl">GOOD FOOD <br> <span class="theme-cl">GOOD MOOD</h4>
						
						
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="assets/img/tiffin9.jpg" alt="First slide" height="490" height="300">
					<div class="carousel-caption banner_caption light">
						<h4>Eat <span class="theme-cl">Healthy </span> & </h4>
						<h4> Stay <span class="theme-cl">Healthy</span> </h4>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="assets\img\tiffin6.jpg" alt="First slide" height="490" width="200">
					<div class="carousel-caption banner_caption">
						<h4>Homely </h4>
						<h4><span class="theme-cl">Hygienic</span> </h4>
						<h4> Authentic</h4>
					</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- ======================== Banner End ==================== -->

		<!-- ======================== Choose Category Start ==================== -->
		
		<section class="pt-5 pb-5">
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="owl-carousel category-slider owl-theme">

							<?php
							$result = $conn->query("select * from categories");
							while ($row = $result->fetch_object()) {
							?>
							
								<!-- Single Item -->
								<div class="item">
									<div class="woo_category_box border_style rounded">
										<div class="woo_cat_thumb">
											<a href="viewcatitem.php?editid=<?php echo $row->id; ?>&catname=<?php echo $row->cat_name; ?>"><img src="../admin/images2/<?php echo $row->img; ?>" class="img-fluid" alt="" /></a>
										</div>
										<div class="woo_cat_caption">
											<h4><a href="viewcatitem.php?editid=<?php echo $row->id; ?>&catname=<?php echo $row->cat_name; ?>"><?php echo $row->cat_name; ?></a></h4>
										</div>
									</div>
								</div>
								<?php
                     		 }
                      		 ?>
								
							</div>
						</div>
					</div>
					
				</div>
			</section>


						
							

						
							
		<div class="clearfix"></div>
		<!-- ======================== Choose Category End ==================== -->

		<!-- ======================== Fresh Vegetables Start ==================== -->
		<section class="pt-0 bg-success">
			<div class="container">
				<form class="submit-page" method="post">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="sec-heading-flex pl-2 pr-2">
								<div class="sec-heading-flex-one">
									</br></br>
									<h2>TIFFIN SERVICE AGENCY</h2>
								</div>

							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-3 col-md-3">
							<select class="form-control" name="state">
							<option value="">--Select State--</option>
								<?php
								$fetch = $conn->query("select * from state");
								while ($result2 = mysqli_fetch_assoc($fetch)) {
									?>
									
									<option value="<?php echo $result2['id'] ?>"><?php echo $result2['state_name'] ?></option>
									<?php
								}
								?>
							</select>
						</div>

						<div class="col-lg-3 col-md-3">
							<select class="form-control" name="city">
								<option value="">--Select City--</option>
								<?php
								$fetch = $conn->query("select * from city");
								while ($result2 = mysqli_fetch_assoc($fetch)) {
									?>

									<option value="<?php echo $result2['id'] ?>"><?php echo $result2['city_name'] ?></option>
									<?php
								}
								?>
							</select>
						</div>

						<div class="col-lg-3 col-md-3">
							<select class="form-control" name="area">
							<option value="">--Select Area--</option>
								<?php
								$fetch = $conn->query("select * from area");
								while ($result2 = mysqli_fetch_assoc($fetch)) {
									?>
									
									<option value="<?php echo $result2['id'] ?>"><?php echo $result2['area_name'] ?></option>
									<?php
								}
								?>
							</select>
						</div>

						<div class="col-lg-3 col-md-3">
							<button class="btn btn-dark" name="submit" type="submit">Submit</button>
						</div>

					</div>
				</form>
			</div>
		</section>
		<div class="clearfix"></div>
		<!-- ======================== Fresh Vegetables End ==================== -->

		<!-- ======================== Offer Banner Start ==================== -->
		<section class="offer-banner-wrap gray">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="owl-carousel banner-offers owl-theme">
							<!-- Single Item -->
							<?php

							if (isset($_POST['submit'])) 
							{
								$state = $_POST["state"];
								$city = $_POST["city"];
								$area = $_POST["area"];

								// echo "SELECT tiffin_agency_name, agency_img FROM tiffin_service WHERE state_id='$state' AND city_id='$city' AND area_id='$area'";
								// exit;
								$exe = $conn->query("SELECT id,tiffin_agency_name, agency_img FROM tiffin_service WHERE state_id='$state' AND city_id='$city' AND area_id='$area'");
							}
							while ($r = $exe->fetch_object()) 
							{
								?>
								<!-- Single Item -->
								<div class="item">
									<div class="offer_item">
										<div class="offer_item_thumb">
											<div class="offer-overlay"></div>
											<img src="../admin/images2/<?php echo $r->agency_img; ?>" alt=""
												style="width:500px; height:250px">
										</div>
										<div class="offer_caption">
											<div class="offer_bottom_caption">
												<!-- <p>10% Off</p> -->
												<div class="offer_title">
													<?php echo $r->tiffin_agency_name; ?>
												</div>

											</div>
											<a href="search-sidebar.php?editid=<?php echo $r->id; ?>&viewname=<?php echo $r->tiffin_agency_name; ?>"
												class="btn offer_box_btn">Explore Now</a>
										</div>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="clearfix"></div>
		<!-- ======================== Offer Banner End ==================== -->



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
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

	<script>
		function openRightMenu() {
			document.getElementById("rightMenu").style.display = "block";
		}
		function closeRightMenu() {
			document.getElementById("rightMenu").style.display = "none";
		}
	</script>

</body>

<!-- Mirrored from themezhub.net/odex-live/odex/grocery-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:14:09 GMT -->

</html>