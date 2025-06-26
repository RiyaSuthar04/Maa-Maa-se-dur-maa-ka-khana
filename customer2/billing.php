<?php
include("common/connection.php");
	session_start();
	$id=$_SESSION['uid'];

	if(isset($_POST['submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$atype=$_POST['addresstype'];
		$address1=$_POST['address1'];
		$address2=$_POST['address2'];
		$city=$_POST['city'];
		$pin=$_POST['pin'];
		$phno=$_POST['phno'];
		$ptype=$_POST['payment'];
		$sub_total=0;


		$view=$conn->query("SELECT * FROM cart2 where cid='$id'");
		while ($row = $view->fetch_assoc())
		{
			$columns = [];
			foreach ($row as $column => $value) {
				$columns[] = "'" . $conn->real_escape_string($value) . "'";
			}
			$columnString = implode(",", array_keys($row));
			$valueString = implode(",", $columns);
			$sql = $conn->query("INSERT INTO final_product ($columnString,fname,lname,email,mobile_number,address_type,address1,address2,city,pin,payment_type) VALUES ($valueString,'$fname','$lname','$email','$phno','$atype','$address1','$address2','$city','$pin','$ptype')");
			
		if($sql)
		{
			if($ptype == 'online')
			{
				header("location:payment.php");
			}	
			else{
				header("location:success.php");
			}
		}
		else{
			echo "<script>alert('code error..!!');</script>";
		}
			
		}
		// $product_name = implode(',', $sub_product);
		// $product_quantity = implode(',', $quantity);
		// $aid2 = implode(',', $aid);
		
		// echo "insert into final_product(user_id,product_name,price,fname,lname,email,mobile_number,address_type,address1,address2,city,pin)values('$id','$total_product','$sub_total','$fname','$lname','$email','$phno','$atype','$address1','$address2','$city','$pin')";
		// exit;
	}
	

?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/odex-live/odex/billing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:17:13 GMT -->
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
           <?php include("common/header2.php");?>
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- =========================== Breadcrumbs =================================== -->
			<div class="breadcrumbs_wrap gray">
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="text-center">
								<h2 class="breadcrumbs_title">Payment Page</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#">Shop</a></li>
									<li class="breadcrumb-item active" aria-current="page">Payment Page</li>
								  </ol>
								</nav>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- =========================== Breadcrumbs =================================== -->
			
			<!-- =========================== Billing Section =================================== -->
			<section>
				<div class="container">
				  <form method="post">

					<div class="row">
					
						<div class="col-lg-8 col-md-12">
						  
								<!-- Heading -->
								<h4 class="mb-5">Billing Details</h4>

								<!-- Billing details -->
								<div class="row mb-5">
									<div class="col-12 col-md-6">
										<!-- First Name -->
										<div class="form-group">
										<label for="checkoutBillingFirstName">First Name *</label>
										<input class="form-control form-control-sm" id="checkoutBillingFirstName" type="text" name="fname" placeholder="First Name" required="">
										</div>
									</div>
									
									<div class="col-12 col-md-6">
										<!-- Last Name -->
										<div class="form-group">
										<label for="checkoutBillingLastName">Last Name *</label>
										<input class="form-control form-control-sm" id="checkoutBillingLastName" type="text" name="lname" placeholder="Last Name" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Email -->
										<div class="form-group">
										<label for="checkoutBillingEmail">Email *</label>
										<input class="form-control form-control-sm" id="checkoutBillingEmail" type="email" name="email" placeholder="Email" required="">
										</div>
									</div>

									<div class="col-12" style="text-align: center;">
									<h4 class="mb-4" >Address Type</h4>
									</div>

									<div class="col-4">
										<!-- Company Name -->
										<div class="form-group">
										<input class="custom-control-input" id="address" value="work" name="addresstype" type="radio"  checked>
										<label for="address">Work</label>
										</div>
									</div>

									<div class="col-4">
										<!-- Company Name -->
										<div class="form-group">
										<input class="custom-control-input" id="address1" value="home" name="addresstype" type="radio" >
										<label for="address1">Home</label>
										</div>
									</div>

									<div class="col-4">
										<!-- Company Name -->
										<div class="form-group">
										<input class="custom-control-input" id="address2" value="other" name="addresstype" type="radio" >
										<label for="address2">Other</label>
										</div>
									</div>
								
									<div class="col-12">
										<!-- Address Line 1 -->
										<div class="form-group">
										<label for="checkoutBillingAddress">Address Line 1 *</label>
										<input class="form-control form-control-sm" id="checkoutBillingAddress" type="text" name="address1" placeholder="Address Line 1" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Address Line 2 -->
										<div class="form-group">
										<label for="checkoutBillingAddressTwo">Address Line 2</label>
										<input class="form-control form-control-sm" id="checkoutBillingAddressTwo" type="text" name="address2" placeholder="Address Line 2 (optional)">
										</div>
									</div>
								
									<div class="col-12 col-md-6">
										<!-- Town / City -->
										<div class="form-group">
										<label for="checkoutBillingTown">Town / City *</label>
										<input class="form-control form-control-sm" id="checkoutBillingTown" type="text" name="city" placeholder="Town / City" required="">
										</div>
									</div>
								
									<div class="col-12 col-md-6">
										<!-- ZIP / Postcode -->
										<div class="form-group">
										<label for="checkoutBillingZIP">PIN code *</label>
										<input class="form-control form-control-sm" id="checkoutBillingZIP" type="text" name="pin" placeholder="ZIP / Postcode" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Mobile Phone -->
										<div class="form-group mb-0">
										<label for="checkoutBillingPhone">Mobile Phone *</label>
										<input class="form-control form-control-sm" id="checkoutBillingPhone" name="phno" type="tel" placeholder="Mobile Phone" required="">
										</div>
									</div>
								
								</div>

								

								<!-- Shipping details -->
								<div class="table-responsive mb-3">
									
								</div>

								<!-- Address -->
								<div class="mb-5">

									<!-- Collapse -->
									<div class="collapse" id="checkoutShippingAddressCollapse" style="">
									  <div class="row mt-4">
										<div class="col-12">
										</div>
										<div class="col-12">
										</div>
									  </div>
									</div>

								</div>


								<!-- Heading -->
								<h4 class="mb-3">Payment</h4>

								<!-- List group -->
								<div class="list-group list-group-sm mb-5">
									<div class="list-group-item">
										<!-- Radio -->
										<div class="custom-control custom-radio">
											<!-- Input -->
											<input class="custom-control-input" id="checkoutPaymentCard" value="online" name="payment" type="radio" data-toggle="collapse" data-action="show" data-target="#checkoutPaymentCardCollapse" checked>
											<!-- Label -->
											<label class="custom-control-label font-size-sm text-body text-nowrap" for="checkoutPaymentCard">Online </label>
										</div>
									</div>
									<div class="list-group-item collapse show py-0" id="checkoutPaymentCardCollapse">

										<!-- Form -->
										
											
											

									</div>
								
									<div class="list-group-item">
										<!-- Radio -->
										<div class="custom-control custom-radio">
										<input class="custom-control-input" id="checkoutPaymentCard2" value="Cash on Delivery " name="payment" type="radio" data-toggle="collapse" data-action="show" data-target="#checkoutPaymentCardCollapse" checked>
											<!-- Label -->
											<label class="custom-control-label font-size-sm text-body text-nowrap" for="checkoutPaymentCard2">Cash on Delivery </label>
										</div>
									</div>
									
								</div>

								<!-- Notes -->
								<textarea class="form-control form-control-sm mb-9 mb-md-0 font-size-xs" rows="5" placeholder="Order Notes (optional)"></textarea>

							
						</div>
						
						<div class="col-12 col-md-12 col-lg-4">
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

														$total =$total+ ($p1 * $q1);
												
											}
											echo $total;
											?>
											</span>
										</li>
										
										<li class="list-group-item d-flex font-size-lg font-weight-bold">
											<span>Total</span> <span class="ml-auto font-size-sm">
											<?php
											$total=0;
											$sum = $conn->query("SELECT * FROM cart2 where cid='$id'");
											while ($row = $sum->fetch_object()) {
												$p1 = floatval($row->price);
														$q1 = intval($row->quantity);

														$total =$total+ ($p1 * $q1);
												
											}
											echo $total;
											?>
											</span>
										</li>
										
									</ul>
								</div>
							</div>
							<input class="btn btn-block btn-dark mb-2" type="submit" name="submit" value="Proceed to Checkout">
							<a class="px-0 text-body" href="grocery-2.php"><i class="ti-back-left mr-2"></i> Continue Shopping</a>
						</div>
						
					</div>
					</form>
				</div>
			</section>
			<!-- =========================== Billing Section =================================== -->
			
			<!-- ============================ Footer Start ================================== -->
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

		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from themezhub.net/odex-live/odex/billing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:17:16 GMT -->
</html>