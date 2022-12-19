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

    $id = $_GET['id'];
    $sql1 = "select * from products where id ='$id'";
    $kq = mysqli_fetch_array(mysqli_query($connect, $sql1));
    ?>

    <form action="process_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $kq['id']?>">

        Tên
        <input type="text" name="name" value="<?php echo $kq['name'] ?>">
        <br>
        Đổi ảnh
        <input type="file" name="photo_new">
        <br>
        <img src="photos/<?php echo $kq['photo'] ?>" height="100">
        <input type="hidden" name="photo_old" value="<?php echo $kq['photo'] ?>">
        <br>
        Mô tả
        <br>
        <textarea name="description">
            <?php echo $kq['description'] ?>
        </textarea>
        <br>
        Giá
        <input type="number" name="price" value="<?php echo $kq['price'] ?>">
        <br>
        Nhà sản xuất
        <select name="id_nsx">
            <?php foreach ($result as  $each) : ?>
                <option value="<?php echo $each['id'] ?>" <?php if ($kq['id_nsx'] == $each['id']) { ?> selected <?php } ?>>

                    <?php echo $each['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button>Cập nhật</button>
        <button type="reset">Hoàn tác</button>
    </form>

</body>

</html>