<?php
include "koneksicoba.php";
$id_matkul = $_POST['matkul'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$ruang = $_POST['ruang'];


$sql = "INSERT into jadwal (id_matkul,hari,jam,ruang) values ('".$id_matkul."','".$hari."','".$jam."','".$ruang."')";
echo $sql;
$a = $koneksi->query($sql);
        if($a === true){
            header('location: hasiljadwal.php');
        }else{
            echo "Eror";
        }
?>