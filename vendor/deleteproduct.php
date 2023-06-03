<?php

$pid=$_GET['pid'];

include_once "../share/connection.php";

$status=mysqli_query($conn,"delete from product where pid=$pid");
if($status)
{
    echo "Product removed";
    header("location:view_product.php");
}

?>