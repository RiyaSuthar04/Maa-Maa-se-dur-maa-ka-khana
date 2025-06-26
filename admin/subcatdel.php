<?php

include("common/connection.php");
$id= $_GET["delid"];
$exe= $conn->query("delete  from subcat where id='$id'");
if($exe)
{
    header("location:viewsubcat.php");
}
else{
    echo"<script>alert('code error..!!');</script>";
}

?>