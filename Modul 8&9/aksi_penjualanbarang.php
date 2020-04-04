<?php
	session_start();
    include "koneksi.php";

    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];

	//sql
	$sql = "INSERT INTO jualbeli VALUES (null," . $id_barang . ",'" . "jual" ."', " . $jumlah . ")";
	$a = $koneksi->query($sql);

	if ($a == true) {
		echo "<script>
				alert('Penjualan Barang Sukses');
				window.location.href = 'form_pengguna.php';
			</script>";
	} else {
		echo "<script>
				alert('Penjualan Barang Gagal');
				window.location.href = 'form_pengguna.php';
			</script>";
	}
?>