<?php
  $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
  $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
		table {
			border-collapse: collapse;
			width: 100%;
			max-width: 600px;
			margin: auto;
		}
		th, td {
			text-align: center;
			padding: 12px;
			border: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 16px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
		}

         a.delete {
            text-decoration: none;
            color: black;
            border: 1px solid;
            padding: 0 5px;
            background-color: red;
            border-radius: 5px;
        }
         a.edit {
            text-decoration: none;
            color: black;
            border: 1px solid;
            padding: 0 5px;
            background-color: burlywood;
            border-radius: 5px;
        }


	</style>

</head>
<body>
        <h2> Đây là trang liệt kê </h2>
    <table>
        <form action="" method="POST">
        <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Quản lý</th>
                </tr>
            </thead>
            <?php
                $i = 0;
                while($row = mysqli_fetch_array($query_lietke_danhmucsp)){    // mysqli_fetch_array dung để lấy giữ liệu trong database
                    $i++;
            ?>
            <tbody>
                <tr>
                    <td> <?php echo $i?> </td>
                    <td> <?php echo $row['tendanhmuc']?></td>
                    <td> <?php echo $row['thutu']?></td>
                    <td >
                        <a class="delete" href="module/quanlysanpham/xuly.php?id=<?php echo $row['id_danhmuc']?>">Xóa</a> | 
                        <a class="edit" href="index_admin.php?action=quanlydanhmucsanpham&query=sua&id=<?php echo $row['id_danhmuc']?>">Sửa</a>                        
                    </td>                                                                       

                </tr>
            </tbody>                    
            <?php
                }
            ?>
        </form>
    </table>
</body>
</html>
