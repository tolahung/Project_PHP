
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
				<th>Danh mục</th>
				<th>Số lượng</th>
                <th>Submit</th>
			</tr>
		</thead>
        <?php
            while($row = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
		<tbody>
			<tr>
				<td><input name ="tendm" type="text" placeholder= "<?php echo $row['tendanhmuc']?>"></td>
				<td><input name ="soluongdm" type="number" placeholder= "<?php echo $row['thutu']?>"></td>
                <td><input class ="submit" name="suadanhmuc" type="submit" value="Submit"></td>
			</tr>                                               
		</tbody>
      <?php
            }
         ?>
        </form>
       
	</table>

	
</body>
</html>