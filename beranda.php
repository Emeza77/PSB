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
		<h2>Beranda</h2>
		<div class="box">
			<h3><?php echo $_SESSION['nama']?>, Selamat Datang di Pendaftaran Siswa Online</h3>
		</div>
	</section>

</body>
</html>