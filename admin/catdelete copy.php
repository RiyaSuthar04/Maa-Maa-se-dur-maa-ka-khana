<?php

include("common/connection.php");
$id= $_GET["delid"];
$exe= $conn->query("delete  from categories where id='$id'");
if($exe)
{
    header("location:viewcat.php");
}
else{
    echo"<script>alert('code error..!!');</script>";
}

?>