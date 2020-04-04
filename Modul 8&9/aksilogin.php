<?php
session_start();
include 'koneksi.php';
$user = $_POST['username'];
$password = md5($_POST['password']);
$op = $_GET['op'];

    //
    if ($op == "in") {
		$query = "SELECT * FROM registrasi WHERE username = '$user' AND password ='$password'";
		echo $query;
		$h_1 = $koneksi->query($query);
		if (mysqli_num_rows($h_1) == 1) {
			$d_1 = $h_1->fetch_array();
			$_SESSION['username'] = $d_1['username'];
			$_SESSION['level'] = $d_1['level'];
			if ($d_1['level'] == "admin") {
				header("location: form_admin.php");
			} else if ($d_1['level'] == "pengguna") {
				header("location: form_pengguna.php");
			}
		} else {
				die("password anda salah <a href=\"javascript:history.back()\">kembali</a>");
			}
	} else if ($op == "out"){
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		header("location: index.html");
	}

?>