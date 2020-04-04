<?php
	session_start();
    include "koneksi.php";
	$id_barang = $_POST['id_barang'];
    $stok = $_POST['stok'];

	//sql
	$sql = "INSERT INTO jualbeli VALUES (null," . $id_barang . ",'" . "beli" ."', " . $stok . ")";
	$a = $koneksi->query($sql);

	if ($a == true) {
		echo "<script>
				alert('Input Pembelian Barang Anda Sukses');
				window.location.href = 'form_admin.php';
			</script>";
	} else {
		echo "<script>
				alert('Input Pembelian Barang Anda Gagal');
				window.location.href = 'form_admin.php';
			</script>";
	}
?>