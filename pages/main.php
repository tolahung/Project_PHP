<div class="main">
            <?php
                include("side_bar/side_bar.php");
            ?>
            <div class="main_content">
              <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                } else{
                    $tam ='';
                } 
                
                if($tam == 'danhmucsanpham'){
                    include("main/danhmuc.php");
                } elseif($tam=='giohang'){
                    include("main/giohang.php");
                } elseif($tam=='tintuc'){
                    include("main/tintuc.php");
                }elseif($tam=='lienhe'){
                    include("main/lienhe.php");
                } else{
                    include("main/index_main.php");
                }
                
              ?>
            </div>
        </div>