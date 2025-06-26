<?php

include("common/connection.php");
$id= $_GET["delid"];
$exe= $conn->query("delete  from food_item2 where id='$id'");
if($exe)
{
    header("location:viewfood.php");
}
else{
    echo"<script>alert('code error..!!');</script>";
}

?>