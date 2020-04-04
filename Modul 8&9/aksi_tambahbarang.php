<?php
    session_start();
    include "koneksi.php";
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
	
	// sql 
    $sql = "INSERT INTO barang VALUES (null, '{$nama_barang}', '{$harga}', '{$stok}')";
	$a = $koneksi->query($sql);

	// alert
	if ($a == true) {
		echo "<script>
				alert('Pembelian Barang Sukses');
				window.location.href = 'form_admin.php';
			</script>";
	} else {
		echo "<script>
				alert('Pembelian Barang Gagal');
				window.location.href = 'form_admin.php';
			</script>";
	}

	
?>