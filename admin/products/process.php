<?php
$name = $_POST['name'];
$photo = $_FILES['photo'];
$description = $_POST['description'];
$id_nsx = $_POST['id_nsx'];
$price = $_POST['price'];

$folder = 'photos/';
$file_extension = explode('.', $photo['name'])[1];
$file_name = time() . '.' . $file_extension;
$path_file = $folder . $file_name;

move_uploaded_file($photo["tmp_name"], $path_file);

require'../connect.php';
$sql = "insert into products(name, photo, price, description, id_nsx)
values('$name', '$file_name', '$price', '$description', '$id_nsx')";

mysqli_query($connect, $sql);
mysqli_close($connect);

// header('location: index.php?success=Thêm thành cmn công!');