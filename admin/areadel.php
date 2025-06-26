<?php

include("common/connection.php");
$id= $_GET["delid"];
$exe= $conn->query("delete  from area where id='$id'");
if($exe)
{
    header("location:viewarea.php");
}
else{
    echo"<script>alert('code error..!!');</script>";
}

?>