<div class="clear"></div>
<?php
    if(isset($_GET['action']) && ($_GET['query'])){
        $var = $_GET['action'];
        $query = $_GET['query'];
    }else{
        $var = '';
        $query = '';
    }

    if($var == 'quanlydanhmucsanpham' && $query == 'them'){
        include("module/quanlysanpham/them.php");
        include("module/quanlysanpham/lietke.php");
    }elseif($var == 'quanlydanhmucsanpham' && $query == 'sua'){
            include("module/quanlysanpham/sua.php");
    }elseif($var == 'quanlysanpham' && $query == 'them'){
        include("module/quanlydanhmucsp/them_sp.php");
        include("module/quanlydanhmucsp/lietke_sp.php");
    }
    else{
        include("dashboard.php");
    }


?>