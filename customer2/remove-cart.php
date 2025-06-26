<?php

include("common/connection.php");
$id= $_GET["delid"];
$exe= $conn->query("delete  from cart2 where id='$id'");
if($exe)
{
    header("location:add-to-cart.php");
}
else{
    echo"<script>alert('code error..!!');</script>";
}

?>