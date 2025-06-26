<?php

include("common/connection.php");
$id= $_GET["delid"];
$exe= $conn->query("delete  from city where id='$id'");
if($exe)
{
    header("location:viewcity.php");
}
else{
    echo"<script>alert('code error..!!');</script>";
}

?>