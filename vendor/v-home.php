
<?php 
    include "../share/authgaurd.php";
    include "menu.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div  class="d-flex justify-content-center align-items-start mt-3 vh-100">
        <form enctype="multipart/form-data" action="upload.php" class="w-50 p-3 bg-info" method="post">
            <input class="form-control mt-3" type="text" name="name" id="" placeholder="product name">
            <input class="form-control mt-3" type="number" name="price" id="" placeholder="product price">
            <textarea class="form-control mt-3" name="details" id="" cols="20" rows="5" placeholder="Product description..."></textarea>
            <input class="form-control mt-3" type="file" name="pdtimg" id="">
            <div class="text-center" >
                <button class="btn btn-success mt-2">submit</button>
            </div>
        </form>
    </div>
</body>
</html>