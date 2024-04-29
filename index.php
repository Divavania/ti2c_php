<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa PNM TI 2C</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1, h4 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
  			width: auto;
  			max-width: 100%;
  			margin: 0 auto;
		}

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            text-align: left;
            background-color: #f2f2f2;
        }
		

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
        }

        .aksi a {
            display: inline-block;
            padding: 5px 10px;
            margin-right: 5px;
            border: 1px solid #007bff;
            color: #007bff;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .aksi a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
 
	<h1>Data Mahasiswa TI 2C</h1>
	<h4><a href="tambah.php">+ Tambah Mahasiswa</a></h4>

	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tempat Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['ttl']; ?></td>
                <td><?php echo $d['jk']; ?></td>
                <td><?php echo $d['usia']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>