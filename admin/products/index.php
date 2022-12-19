<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
</head>

<body>
    <?php include '../menu.php' ?>

    <h3>
        Quản lý sản phẩm
    </h3>
    <a href="form_insert.php">
        THÊM
    </a>

    <?php
    include '../connect.php';
    $sql = "select * 
    from products";
    $result = mysqli_query($connect, $sql);
    ?>

    <table border="1" width="80%">
        <tr>
            <th>MÃ</th>
            <th>TÊN</th>
            <th>ẢNH</th>
            <th>GIÁ</th>
            <th>SỬA</th>
            <th>XÓA</th>
        </tr>

        <?php foreach ($result as $each) { ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['name'] ?></td>
                <td>
                    <img src="photos/<?php echo $each['photo'] ?>" height="100">
                </td>
                <td><?php echo $each['price'] ?></td>
                <td>
                <a href="form_edit.php?id=<?php echo $each['id'] ?>">
                        <img src="photos/co_le.jpg" height="50">

                    </a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $each['id'] ?>">
                        <img src="photos/thung_rac.jpg" height="50">

                    </a>
                </td>
            </tr>

        <?php  } ?>
    </table>

    <?php mysqli_close($connect) ?>
</body>

</html>