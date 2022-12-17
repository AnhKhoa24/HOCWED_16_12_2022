<?php

$id = $_GET['id'];

require'../connect.php';
$sql = "delete from khoacomback
where 
id = '$id'";

mysqli_query($connect, $sql);
mysqli_close($connect);

header('location: index.php?success= Đã xóa thành công!');