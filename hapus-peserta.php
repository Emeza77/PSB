<?php 
	include 'koneksi.php';

	if (isset($_GET['id'])) {
		$delete = mysqli_query($koneksi, "DELETE FROM tb_daftar WHERE id_pendaftaran = '".$_GET['id']."' ");
		echo '<script>window.location="data-peserta.php"</script>';
	}
?>
 