<?php
$id = $_POST['id'];
if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['photo']) )
{
    header("location:form_edit.php?id=$id&loi=Nhập thiếu!");
    exit;
}

$name = $_POST['name'];
$address= $_POST['address'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];

require'../connect.php';
$update = "update khoacomback 
set
name = '$name',
address = '$address',
phone = '$phone',
photo = '$photo'
where
id = '$id'";
mysqli_query($connect, $update);
mysqli_close($connect);
header('location:index.php?success= Đã cập nhật thành công!');