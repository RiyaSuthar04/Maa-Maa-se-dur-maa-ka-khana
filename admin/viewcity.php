<?php

  include("common/connection.php");
  $exe=$conn->query("select state.state_name as state_name, city.*from state join city on city.state_id=state.id");

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
      <div class="row offset-md-2 mt-5">
        <div class="col-lg-8 ">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">CITY</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">City id</th>
                    <th scope="col">City Name</th>
                    <th scope="col">state name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while($row=$exe->fetch_object())
                    {
                     ?>
                      <tr>
                    <th scope="row"><?php echo $row->id;?></th>
                    <td><?php echo $row->city_name;?></td>
                    <td><?php echo $row->state_name;?></td>
                    <td><a href="cityedit.php?editid=<?php echo $row->id;?>">Edit</a></td>
                    <td><a href="citydel.php?delid=<?php echo $row->id;?>">Delete</a></td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
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