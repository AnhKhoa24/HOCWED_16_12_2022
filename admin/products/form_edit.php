<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin</title>
</head>
<body>
    <?php
    include'../menu.php';
    include'../connect.php';
    $id = $_GET['id'];
    $sql = "select * from products where id = '$id'";
    $arr= mysqli_fetch_array(mysqli_query($connect, $sql));
    ?>
    <hr>
    <h3>CẬP NHẬT SẢN PHẨM</h3>
    <form action="">


    
    </form>
    
</body>
</html>