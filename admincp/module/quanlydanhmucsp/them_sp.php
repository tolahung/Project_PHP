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
	<h2> Thêm sản phẩm </h2>
	<table>
        <form action="module/quanlydanhmucsp/xuly_sp.php" method="POST" enctype="multipart/form-data">
		<thead>
			<tr>
				<th>Tên sản phẩm</th>
				<th>Mã sản phẩm</th>
				<th>Giá sản phẩm</th>
				<th>Số lượng</th>
				<th>Tóm tắt</th>
				<th>Nội dung</th>
				<th>Hình ảnh</th>
				<th>Tình trạng</th>
                <th>Submit</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input name ="tensanpham" type="text"></td>
				<td><input name ="masanpham" type="text"></td>
				<td><input name ="giasanpham" type="text"></td>
				<td><input name ="soluongsanpham" type="text"></td>
				<td><textarea rows="5" name="tomtatsanpham"></textarea></td>
				<td><textarea rows="5" name="noidungsanpham"></textarea></td>
				<td><input name ="hinhanhsanpham" type="file"></td>
				<td>
					<select name="tinhtrangsanpham" >
						<option value="1">Kích hoạt</option>
						<option value="0">Ẩn</option>
					</select>
				</td>
                <td><input class ="submit" name="themsanpham" type="submit" value="Submit"></td>
			</tr>
		</tbody>
      
        </form>
       
	</table>

	
</body>
</html>