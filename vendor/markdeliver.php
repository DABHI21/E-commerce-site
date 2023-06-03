<?php

$cartid=$_GET['cartid'];

include_once "../share/connection.php";

$status=mysqli_query($conn,"update cart set is_delivered=1 where cartid=$cartid");
if($status)
{
    echo "Product delivered";
    header("location:view_product.php");
}

?>