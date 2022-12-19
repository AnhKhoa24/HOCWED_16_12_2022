<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>

<body>
<?php
    include "../menu.php";
    include "../connect.php";
    $sql = "select * from khoacomback";
    $result = mysqli_query($connect, $sql);
    ?>

    <form action="process.php" method="post" enctype="multipart/form-data">
        Tên
        <input type="text" name="name">
        <br>
        Ảnh
        <input type="file" name="photo">
        <br>
        Mô tả
        <textarea name="description">
        </textarea>
        <br>
        Giá
        <input type="number" name="price">
        <br>
        Nhà sản xuất
        <select name ="id_nsx">
            <?php foreach ($result as  $each): ?>
                <option value="<?php echo $each['id']?>">
                    <?php echo $each['name'] ?>
                </option>
           <?php endforeach ?>
        </select>
        <br>
       <button>Thêm</button>
    </form>

</body>

</html>