<?php
 
  include("common/connection.php");
  $id= $_GET["editid"];
  $result= $conn->query("select * from categories where id='$id'");
  $row=$result->fetch_object();
  if(isset($_POST['submit']))
  {
    $cat=$_POST["cat"];
    $file = $_FILES['catimg'];
    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileTmpName = $file['tmp_name'];
    if ($fileSize > 2 * 1024 * 1024) {
      echo "File size is too large. Maximum file size allowed is 2 MB.";
      exit();
  }
    $uploadPath = 'images2/'.$fileName;
    move_uploaded_file($fileTmpName, $uploadPath);
    $exe= $conn->query("update categories set cat_name='$cat', img='$fileName' where id='$id'");
    if($exe)
    {
      header("location:viewcat.php");
    }
    else
    {
      echo"<script>alert('code error..!!');</script>";
    }
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MAA-maa se dur maa ka khana</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
 <?php include("common/header.php");?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include("common/sidebar.php");?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="deshboard.php">Home</a></li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">ADD CATEGORIES</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3 " method="post">
                <div class="col-md-8 offset-md-2">
                  <label for="inputName5" class="form-label">Category Name</label>
                  <input type="text" class="form-control" id="inputName5" name="cat" value="<?php echo $row->cat_name;?>">
                </div>

                <div class="col-md-8 offset-md-2">
                  <label for="inputName5" class="form-label">Category Image</label>
                  <input type="file" class="form-control" id="inputName" name="catimg">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include("common/footer.php");?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>