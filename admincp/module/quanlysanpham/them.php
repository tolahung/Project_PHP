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
        <form action="module/quanlysanpham/xuly.php" method="POST">
		<thead>
			<tr>
				<th>Danh mục</th>
				<th>Số lượng</th>
                <th>Submit</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input name ="tendm" type="text"></td>
				<td><input name ="soluongdm" type="number"></td>
                <td><input class ="submit" name="themdm" type="submit" value="Submit"></td>
			</tr>
		</tbody>
      
        </form>
       
	</table>

	
</body>
</html>