<?php 
    $user_name=$_POST['user_name'];
    $user_pass=$_POST['user_pass'];

    include_once "../share/connection.php";

    // Starting a session 

    session_start();
    $_SESSION['login status']=false;
    
    $sql_result=mysqli_query($conn,"select * from user where username='$user_name' and password='$user_pass'");
    
    // verifying credentials 

    $row_count=mysqli_num_rows($sql_result);
    if($row_count==0)
    {
        echo "invalid Credentials";
        die;
    }
    
    // fetching the data from sql 

    $row=mysqli_fetch_assoc($sql_result);
    $userid=$row['userid'];
    $username=$row['username'];
    $user_type=$row['user_type'];

    $_SESSION['login status']=true;
    $_SESSION['userid']=$userid;
    $_SESSION['username']=$username;
    $_SESSION['user_type']=$user_type;

    // redirecting to vendor and customer 

    if($user_type=="vendor")
    {
        header("location:../vendor/v-home.php");
    }

    if($user_type=="customer")
    {
        header("location:../customer/c-home.php");
    }
?>