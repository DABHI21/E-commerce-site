<?php

session_start();
$userid=$_SESSION['userid'];
include_once "../share/connection.php";

$status=mysqli_query($conn,"update cart set is_ordered=1 where userid=$userid");
if($status)
{
    echo "Ordered Placed successfully!";
    header("location:c-home.php");
}

?>