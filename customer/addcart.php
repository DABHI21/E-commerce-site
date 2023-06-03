<?php

$pid=$_GET['pid'];

session_start();

$userid=$_SESSION['userid'];

// No duplicate product from same customer allowed 

 include_once "../share/connection.php";

 $sql_result=mysqli_query($conn,"select * from cart where userid='$userid' and pid='$pid' and is_ordered=0");
 $row_count=mysqli_num_rows($sql_result);
 if($row_count>0)
 {
     echo "Product is already in cart ";
     header("location:c-home.php");
     die;
 }


 $status=mysqli_query($conn,"insert into cart(userid,pid) values($userid,$pid)");
 if($status)
 {
    echo "Product added to cart sucessfully!";
    header("location:c-home.php");
 }

?>