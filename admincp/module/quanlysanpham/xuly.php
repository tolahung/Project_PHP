<?php
include("../../config/config.php");

// ==========================================THEM SP============================================================
$tenloaisp = $_POST['tendm'];
$soluongsp = $_POST['soluongdm'];
if(isset($_POST['themdm'])){
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE ('".$tenloaisp."','".$soluongsp."')";
    mysqli_query($mysqli,$sql_them);
    header('Location: ../../index_admin.php?action=quanlydanhmucsanpham&query=them');
} elseif(isset($_POST['suadanhmuc'])){
    $sql_update = "UPDATE tbl_danhmuc SET tendanhmuc = '".$tenloaisp."',thutu='".$soluongsp."' WHERE id_danhmuc='$_GET[id]'";
    mysqli_query($mysqli,$sql_update);
    header('Location: ../../index_admin.php?action=quanlydanhmucsanpham&query=them');
                        
}else{
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index_admin.php?action=quanlydanhmucsanpham');
}
?>