<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà sản xuất</title>
</head>

<body>
    Đây là giao diện nhà sản xuất

    <a href="form_insert.php">
        Thêm
    </a>
    <?php
    include "../menu.php";
    include "../connect.php";
    $sql = "select * from khoacomback";
    $result = mysqli_query($connect, $sql);
    ?>
    <br>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>TÊN</th>
            <th>ĐỊA CHỈ</th>
            <th>SỐ ĐIỆN THOẠI</th>
            <th>ẢNH</th>
            <th>SỬA</th>
            <th>XÓA</th>
        </tr>
        <?php foreach ($result as $each) : ?>
            <tr>
                <td><?php echo $each['id'] ?> </td>
                <td><?php echo $each['name'] ?> </td>
                <td><?php echo $each['address'] ?> </td>
                <td><?php echo $each['phone'] ?> </td>
                <td>
                    <img src="<?php echo $each['photo'] ?>" height="100">
                </td>

                <td>
                    <a href="form_edit.php?id=<?php echo $each['id'] ?>">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvqzOXbXUU2Ges3kkeYieDVIdW62nc2LE7XA&usqp=CAU" height="10" hspace="15">

                    </a>
                </td>

                <td>
                    <a href="process_delete.php?id=<?php echo $each['id']?>">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX6j_9-ZEob8u62eePxC-DdkRI3SgPd0PdKQ&usqp=CAU" height ="19">
                
                </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>



</body>

</html>