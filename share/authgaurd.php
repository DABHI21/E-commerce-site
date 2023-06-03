<!DOCTYPE html>
<head>
    <style>
        .user-info
        {
            display: flex;
            justify-content: space-around;
            background-color: brown;
        }

    </style>
</head>
<body>
</body>
</html>
<?php
    session_start();

    if(!isset($_SESSION['login status']))
    {
        echo "Unauthorized Access";
        die;
    }
    if($_SESSION['login status']==false)
    {
        echo "illegal attempt";
        die;
    }
    $uname=$_SESSION['username'];
    $userid=$_SESSION['userid'];
    $user_type=$_SESSION['user_type'];

    echo "<div class='user-info'>
        <div>$userid:$uname</div>
        <div>$user_type</div>
        <div>
            <a href='../share/logout.php'>
                <button>Logout</button>
            </a>    
        </div>
    </div>"
 ?>