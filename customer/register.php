<?php
    $user_name=$_POST['user_name'];
    $user_pass=$_POST['user_pass'];
    $user_rpass=$_POST['user_rpass'];

    if($user_pass!=$user_rpass)
    {
        echo "Password Does Not Match";
        die;
    }
    include_once "../share/connection.php";

    $sql_result=mysqli_query($conn,"select * from user where username='$user_name'");
    $row_count=mysqli_num_rows($sql_result);
    if($row_count>0)
    {
        echo "Username already Exist";
        die;
    }
    
    $query="insert into user(username,password,user_type) values('$user_name','$user_pass','customer')";
    $status=mysqli_query($conn,$query);
    if($status)
    {
        echo "Registration successfull";
    }
    else
    {
        echo "Error In Registration";
        echo mysqli_error($conn);
    }
?>