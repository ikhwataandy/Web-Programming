<?php
include "koneksicoba.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];
$sql = "INSERT into bukutamu (nama,email,komentar) values ('".$nama."','".$email."','".$komentar."')";
$a = $koneksi->query($sql);
        if($a === true){
            header('location: viewdata.php');
        }else{
            echo "Eror";
        }
?>