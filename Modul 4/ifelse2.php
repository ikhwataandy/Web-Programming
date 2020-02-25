<?php
$jumlah_beli = 5;
$harga_beli = 50000;
$total = $jumlah_beli * $harga_beli;
if($total >= 200000)
    $bonus = "bonus pulsa";
else
    $bonus = "makan gratis";

echo ("jumlah beli : $jumlah_beli <BR>");
echo ("total : $total <BR>");
echo ("bonus : $bonus");
?>