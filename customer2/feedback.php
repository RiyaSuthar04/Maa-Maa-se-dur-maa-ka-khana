<?php

	include("common/connection.php");
	session_start();
	if(isset($_POST['submit']))
  {
    $fname=$_POST["fname"];
	$email= $_POST["email"];
	$rating= $_POST["rating"];
    $rating2= $_POST["rating2"];
	$rating3= $_POST["rating3"];
	$rating4= $_POST["rating4"];
	$text= $_POST["suggestions"];
    $exe = $conn->query("insert into feedback(uname,uemail,food_quality,cleanliness,accuracy,overall_experience,suggestion)values('$fname','$email','$rating','$rating2','$rating3','$rating4','$text')");
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
								<h2 class="breadcrumbs_title">User Feedback</h2>
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#">My Account</a></li>
									<li class="breadcrumb-item active" aria-current="page">User Feedback</li>
									
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
					
						
						
						<div class="col-lg-12 col-md-12">
							<!-- Total Items -->
							<div class="card style-12">
								<div class="card-header">
									<h4 class="mb-0">User Feedback</h4>
								</div>
								<div class="card-body">
									<form class="submit-page" method="post">
										<div class="row">
										
											<div class="col-12 col-md-6">
											  <div class="form-group">
												<label>User Name</label>
												<input class="form-control" type="text"  name="fname" >
											  </div>

											</div>
										
											<div class="col-6">
												<div class="form-group">
													<label> Email Address</label>
													<input class="form-control" type="email" name="email" >
												</div>
											</div>

											<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Food Quality</label>
												<select  class="form-control" id="rating" name="rating" required>
                                                <option value="">--Select--</option>
			                                        <option value="Excellent">Excellent</option>
			                                        <option value="Good">Good</option>
			                                        <option value="Average">Average</option>
			                                        <option value="Below Average">Below Average</option>
			                                        <option value="Poor">Poor</option>
		                                        </select>
											</div>
										</div>

                                        <div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Cleanliness</label>
												<select  class="form-control" id="rating" name="rating2" required>
                                                <option value="">--Select--</option>
			                                        <option value="Excellent">Excellent</option>
			                                        <option value="Good">Good</option>
			                                        <option value="Average">Average</option>
			                                        <option value="Below Average">Below Average</option>
			                                        <option value="Poor">Poor</option>
		                                        </select>
											</div>
										</div>

                                        <div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Order Accuracy</label>
												<select  class="form-control" id="rating" name="rating3" required>
                                                <option value="">--Select--</option>
			                                        <option value="Excellent">Excellent</option>
			                                        <option value="Good">Good</option>
			                                        <option value="Average">Average</option>
			                                        <option value="Below Average">Below Average</option>
			                                        <option value="Poor">Poor</option>
		                                        </select>
											</div>
										</div>

                                        <div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Overall Experience</label>
												<select  class="form-control" id="rating" name="rating4" required>
			                                        <option value="">--Select--</option>
			                                        <option value="Excellent">Excellent</option>
			                                        <option value="Good">Good</option>
			                                        <option value="Average">Average</option>
			                                        <option value="Below Average">Below Average</option>
			                                        <option value="Poor">Poor</option>
		                                        </select>
											</div>
										</div>

                                        <div class="col-12">
												<div class="form-group">
													<label>Any Comments,Questions Or Suggestions?</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="suggestions"></textarea>
												</div>
											</div>
		
											<div class="col-md-12">
											<button class="btn btn-dark" name="submit" type="submit">Submit</button>
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

<!-- Mirrored from themezhub.net/odex-live/odex/account-info.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 18:17:13 GMT -->
</html>