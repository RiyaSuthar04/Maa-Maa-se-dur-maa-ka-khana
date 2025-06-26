<?php

include("common/connection.php");
$id= $_GET["delid"];
$exe= $conn->query("delete  from state where id='$id'");
if($exe)
{
    header("location:viewstate.php");
}
else{
    echo"<script>alert('code error..!!');</script>";
}

?>