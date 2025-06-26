<?php

  include("common/connection.php");
  session_start();
  $tid=$_SESSION['aid'];
 
  /*$user=$conn->query("SELECT 
  cart2.id, 
  cart2.product, 
  cart2.img, 
  cart2.price, 
  cart2.quantity, 
  cart2.agency_id,
  cart2.date,
  user.fname AS customer_name,
  user.lname AS customer_lname
FROM 
  cart2 
  INNER JOIN user ON cart2.cid = user.uid
WHERE
  cart2.agency_id = '$tid';
 ");*/

 $user=$conn->query("select * from final_product where agency_id=$tid");
  
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
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row offset">
        <div class="col-lg-12 ">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">USERS</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Food Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Payment Mode</th>
                    <th scope="col">Date</th>
                
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while($row=$user->fetch_object())
                    {

                     ?>
                      <tr>
                    <th scope="row"><?php echo $row->id;?></th>
                    <td> <img  src="images/<?php echo $row->img; ?>"  height="100px" width="100px" ></td>
                    <td><?php echo $row->fname;?> <span><?php echo $row->lname;?></td>
                    <td><?php echo $row->product;?></td>
                    <td><?php echo $row->quantity;?></td>
                    <td><?php echo $row->price;?></td>
                    <td><?php echo $row->payment_type;?></td>
                    <td><?php echo $row->date;?></td>
                   
                   
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