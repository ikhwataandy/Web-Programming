<?php
$nilai_penjualan = 90000;
if($nilai_penjualan >= 100000){
    $diskon = (($nilai_penjualan*10)/100);
    $bayar = ($nilai_penjualan - $diskon);
    echo ("diskon = $diskon <BR>");
    echo ("Bayar 10% = $bayar");
}else{
    $diskon = (($nilai_penjualan*5)/100);
    $bayar = ($nilai_penjualan - $diskon);
    echo ("diskon = $diskon <BR>");
    echo ("Bayar 5% = $bayar");
}
?>