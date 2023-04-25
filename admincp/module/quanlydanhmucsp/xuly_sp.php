<?php 
    include("../../config/config.php");

    $tensp = $_POST['tensanpham'];
    $masp = $_POST['masanpham'];
    $giasp = $_POST['giasanpham'];
    $soluongsp = $_POST['soluongsanpham'];
    $tomtatsp = $_POST['tomtatsanpham'];
    $noidungsp = $_POST['noidungsanpham'];
    $tinhtrangsp = $_POST['tinhtrangsanpham'];
    //xu lý hình ảnh
    $hinhanhsp = $_FILES['hinhanhsanpham']['name'];
    $hinhanhsp_tmp = $_FILES['hinhanhsanpham']['tmp_name'];
    $hinhanhsp = time().'_'.$hinhanhsp;

    
    if(isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,trangthai) 
        VALUE ('".$tensp."','".$masp."','".$giasp."','".$soluongsp."','".$hinhanhsp."','".$tomtatsp."','".$noidungsp."','".$tinhtrangsp."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanhsp_tmp,'uploads/'.$hinhanhsp);
        header('Location: ../../index_admin.php?action=quanlysanpham&query=them');
    }
    else {
        // Trong phần xuly_sp này xóa sp xong cần phải xóa thêm hình ảnh nữa nên ta phải thêm bước này 
        $idsanpham = $_GET['id'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$idsanpham."' LIMIT 1";
        $query  = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$idsanpham."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index_admin.php?action=quanlysanpham&query=them');
    }
?>

