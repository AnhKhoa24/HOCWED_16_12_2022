<?php
$id = $_GET['id'];

$action = "delete from products 
where id = '$id'";
require'../connect.php';

mysqli_query($connect, $action);
mysqli_close($connect);

header("location:index.php?success=Đã xóa thành công!");