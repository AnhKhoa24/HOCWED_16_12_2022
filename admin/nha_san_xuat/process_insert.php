<?php
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];


require'../connect.php';

$sql = "insert into khoacomback(name,address,phone,photo) 
values('$name','$address','$phone','$photo')";

mysqli_query($connect, $sql);
mysqli_close($connect);