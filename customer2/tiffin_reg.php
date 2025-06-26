<?php

	include("common/connection.php");
	if(isset($_POST['submit']))
  {
    $tname=$_POST["tname"];
    $owner= $_POST["owner_name"];
	//$img=$_POST["img"];
	$email= $_POST["email"];
	$contact= $_POST["contact"];
	$address= $_POST["address"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	$area=$_POST["area"];
	$status=$_POST["status"];
	$password= $_POST["password"];
	$cpassword= $_POST["cpassword"];
	$file = $_FILES['img'];
    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileTmpName = $file['tmp_name'];
	
	if($password == $cpassword)
	{
		if ($fileSize > 2 * 1024 * 1024) {
			echo "File size is too large. Maximum file size allowed is 2 MB.";
			exit();
		}
		$uploadPath = '../admin/images2/'.$fileName;
    	move_uploaded_file($fileTmpName, $uploadPath);
		$exe = $conn->query("insert into tiffin_service(tiffin_agency_name,owner_name,agency_img,email,contact,address,state_id,city_id,area_id,status,password)values('$tname','$owner','$fileName','$email','$contact','$address','$state','$city','$area','$status','$password')");
		if($exe)
		{
		  echo"<script>alert('data inserted successfully..!!');</script>";
		}
		else
		{
		  echo"<script>alert('code error..!!');</script>";
		}
	}
	else
	{
		echo"<script>alert('password doesn't match..!!');</script>";
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
								<h2 class="breadcrumbs_title">Tiffin service agency Register</h2>
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
								<form method="post" enctype="multipart/form-data">
									
									<div class="row">
									
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Tiffin service agency Name</label>
												<input type="text" class="form-control" name="tname" required="">
											</div>
										</div>

										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Tiffinservice agency owner name</label>
												<input type="text" class="form-control" name="owner_name" required="">
											</div>
										</div>

										<div class="col-lg-6 col-md-6">
											<div class="form-group">
											<label>Tiffinservice agency Picture</label>
											<input type="file" class="form-control" name="img" id="fileToUpload">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Email Address</label>
												<input type="email" class="form-control" name="email" required="">
											</div>
										</div>

                                        <div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Contact</label>
												<input type="text" class="form-control" name="contact" required="">
											</div>
										</div>

                                        <div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" name="address" required="">
											</div>
										</div>

										<div class="col-lg-4 col-md-4">
											<div class="form-group">
											<label for="inputState" class="form-label">State</label>
                							  <select id="inputState" class="form-control" name="state">
                								  <?php
                     								 $fetch =  $conn->query("select * from state");
                      									while($result2= mysqli_fetch_assoc($fetch))
                     									 {
                       									 ?>
                       									 <option value="<?php echo $result2['id']?>"><?php echo $result2['state_name']?></option>
                       									 <?php
                     									 }
                      									 ?>
                 								 </select>
											</div>
										</div>

										<div class="col-lg-4 col-md-4">
											<div class="form-group">
											<label for="inputState" class="form-label">City</label>
                  							<select id="inputState" class="form-control" name="city">
                  								<?php
                     								 $fetch =  $conn->query("select * from city");
                     								 while($result2= mysqli_fetch_assoc($fetch))
                      								{
                      									  ?>
                      								  <option value="<?php echo $result2['id']?>"><?php echo $result2['city_name']?></option>
                       										 <?php
                     								 }
                      									 ?>
                  							</select>
											</div>
										</div>

										<div class="col-lg-4 col-md-4">
										<div class="form-group">
											<label for="inputState" class="form-label">Area</label>
                  							<select id="inputState" class="form-control" name="area">
                  								<?php
                     								 $fetch =  $conn->query("select * from area");
                     								 while($result2= mysqli_fetch_assoc($fetch))
                      								{
                      									  ?>
                      								  <option value="<?php echo $result2['id']?>"><?php echo $result2['area_name']?></option>
                       										 <?php
                     								 }
                      									 ?>
                  							</select>
											</div>
										</div>

										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Status</label>
												<input type="text" class="form-control" name="status">
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