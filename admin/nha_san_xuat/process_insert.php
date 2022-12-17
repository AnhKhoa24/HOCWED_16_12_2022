<?php

if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['photo']))
{
    header('location:form_insert.php?loi= Điền thiếu thông tin!');
    exit;
}


$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];


require'../connect.php';

$sql = "insert into khoacomback(name,address,phone,photo) 
values('$name','$address','$phone','$photo')";

mysqli_query($connect, $sql);
mysqli_close($connect);

header('location:index.php?success=Đã thêm thành công!');