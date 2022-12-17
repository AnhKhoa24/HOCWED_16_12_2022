<ul>
    <li>
        <a href = "../nha_san_xuat">
            Quản lý nhà sản xuất
        </a>
    </li>
</ul>
<?php 
if(isset($_GET['loi']))
{ ?>

<span style="color: red;">
<?php echo $_GET['loi']?>
</span>

<?php }
?>

<?php 
if(isset($_GET['success']))
{ ?>

<span style="color: green;">
<?php echo $_GET['success']?>
</span>

<?php }
?>