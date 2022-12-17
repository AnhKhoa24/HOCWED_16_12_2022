<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SỬA THÔNG TIN</title>
</head>

<body>
    <?php
    include'../menu.php';
    include'../connect.php';
    $id = $_GET['id'];
    $sql = "select* from khoacomback where id = '$id'";
    $result  = mysqli_query($connect, $sql);
    $arr1st = mysqli_fetch_array($result);
    ?>
    <h2>CẬP NHẬT THÔNG TIN</h2>
    <form method="post" action="process_update.php">
        <input type="hidden" name="id" value="<?php echo $arr1st['id'] ?>">
        <br>
        TÊN
        <input type="text" name="name" value="<?php echo $arr1st['name'] ?>">
        <br>
        ĐỊA CHỈ
       <textarea name="address"><?php echo $arr1st['address']?></textarea>
        <br>
        ĐIỆN THOẠI
        <input type="text" name="phone" value="<?php echo $arr1st['phone'] ?>">
        <br>
        ẢNH
        <input type="text" name="photo" value="<?php echo $arr1st['photo']?>">
        <br>
        <button>UPDATE</button>
        <button  type="reset">RESET</button>     



        
    </form>
        

</body>

</html>