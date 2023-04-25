
<?php
  $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[id]' LIMIT 1";
  $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Table Example</title>
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


	</style>
</head>

<body>
	<h2> Sửa danh mục sản phẩm </h2>
	<table>
        <form action="module/quanlysanpham/xuly.php?id=<?php echo $_GET['id']?>" method="POST">
		<thead>
			<tr>
            <th>Số thứ tự</th>
                    <th>Tên sản phẩm</th>
                    <th>Mã sản phẩm</th>
                    <th>Giá Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tóm tắt</th>
                    <th>Nội dung</th>
                    <th>Hình ảnh</th>
                    <th>Tình trạng</th>
                    <th>Quản lý</th>
			</tr>
		</thead>
        <?php
            while($row = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
		<tbody>
			<tr>
				<td><input name ="tensp" type="text" placeholder= "<?php echo $row['tendanhmuc']?>"></td>
				<td><input name ="masp" type="number" placeholder= "<?php echo $row['thutu']?>"></td>
				<td><input name ="giasp" type="number" placeholder= "<?php echo $row['thutu']?>"></td>
				<td><input name ="soluongsp" type="number" placeholder= "<?php echo $row['thutu']?>"></td>
				<td><input name ="tomtatsp" type="number" placeholder= "<?php echo $row['thutu']?>"></td>
				<td><input name ="Noidungsp" type="number" placeholder= "<?php echo $row['thutu']?>"></td>
				<td><input name ="hinhanhsp" type="number" placeholder= "<?php echo $row['thutu']?>"></td>
                <td><input class ="submit" name="suasanpham" type="submit" value="Submit"></td>
			</tr>                                               
		</tbody>
      <?php
            }
         ?>
        </form>
       
	</table>

	
</body>
</html>