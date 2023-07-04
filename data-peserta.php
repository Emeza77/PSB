<?php
	session_start();
	include 'koneksi.php';
	if ($_SESSION['stat_login'] != true) {
		echo '<script>window.location="login.php"</script>';
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Siswa Online | Administrator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- header -->
	<header>
		<h1><a href="beranda.php">Admin Pendaftaran</h1>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="data-peserta.php">Data Peserta</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	</header>
<br>
<br>
<br>
	<!-- content -->
	<section class="content">
		<h2>Data Peserta</h2>
		<div class="box">
			<a href="cetak-peserta.php" target="_blank"class="btn-cetak">print</a>
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Pendaftaran </th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						$list_peserta = mysqli_query($koneksi, "SELECT * FROM tb_daftar");
						while ($row = mysqli_fetch_array($list_peserta)) {
			
					 ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id_pendaftaran'] ?></td>
						<td><?php echo $row['nm_peserta'] ?></td>
						<td><?php echo $row['jk'] ?></td>
						<td>
							<a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail</a> ||
							<a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?> " onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</section>

</body>
</html>