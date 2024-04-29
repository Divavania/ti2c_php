<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa PNM TI 2C</title>
	<style>
		body {
  			font-family: Arial, sans-serif;
  			margin: 20px;
		}

		h1 {
  			text-align: center;
		}

		table {
  			border: 1px solid #ddd;
  			width: 700px;
  			margin: 0 auto;
		}

		th, td {
  			padding: 15px;
  			border: 1px solid #ddd;
		}

		th {
  			text-align: left;
  			background-color: #eaeaea;
  			font-weight: bold;
		}

		input[type="text"], input[type="submit"] {
  			width: 100%;
  			padding: 5px;
  			border: 1px solid #ccc;
		}

		input[type="submit"] {
  			background-color: #4CAF50;
  			color: white;
  			cursor: pointer;
		}

	</style>
</head>
<body>
 
	<h1>Tambah Data Mahasiswa</h1>
	<form method="post" action="simpan.php">
		<table>
            <tr>			
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td><input type="text" name="ttl"></td>
			</tr>
            <tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-Laki" checked>Laki-Laki 
				<input type="radio" name="jk" value="Perempuan" checked>Perempuan</td>
			</tr>
            <tr>
				<td>Usia</td>
				<td><input type="text" name="usia"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="simpan"></td>
			</tr>		
		</table>
	</form>
</body>
</html>