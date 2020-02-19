<?php
echo "selamat datang", 1,2, "sampai jumpa";
print ("Selamat datang <br/>");
printf("%< %d %0.02f <br/>\n", "string", 10,3.14);

// tipe data
$a = 10;
echo $a;
$b = 20.20;
echo $b;

$c="<br/>Bismillah lulus tepat waktu";
echo $c;

//variabel
$info = 10;
$info = 20.2;
$info = "Bismillah golek ilmu";

//konstanta
define ("Phi", 3.14);
echo "Judul";
$r = 10;
echo "<br> jari-jari = $r<br/>\n";
$luas= Phi * $r * $r;
echo "Luas lingkaran = $luas";

//operator
$bil1 = 200;
$bil2 = 12;
$hasil = $bil1+$bil2;
echo "<br/>$bil1 + $bil2 = $hasil";

$hasil = $bil1-$bil2;
echo "<br/>$bil1 - $bil2 = $hasil";

$hasil = $bil1*$bil2;
echo "<br/>$bil1 * $bil2 = $hasil";

$hasil = $bil1/$bil2;
echo "<br/>$bil1 / $bil2 = $hasil";

$hasil = $bil1%$bil2;
echo "<br/>$bil1 % $bil2 = $hasil";

$hasil = $bil1++;
echo "<br/>$bil1++ = $hasil";

$hasil = $bil1--;
echo "<br/>$bil1--= $hasil";

//operator perbandingan

$angka1 = 100;
$angka2 = 50;

$teks1 = "PHP";
$teks2 = "php";

printf("<br>%d == %d adalah %d<br>\n",$angka1,$angka2, $angka1 == $angka2);
printf("<br>%d != %d adalah %d<br>\n",$angka1,$angka2, $angka1 != $angka2);
printf("<br>%d >= %d adalah %d<br>\n",$angka1,$angka2, $angka1 >= $angka2);
printf("<br>%d <= %d adalah %d<br>\n",$angka1,$angka2, $angka1 <= $angka2);
printf("<br>%s == %s adalah %d<br>\n",$teks1,$teks2, $teks1 == $teks2);

//operator logika
$hasillogika=($angka1<>$angka2) or ($angka1==$angka2);
printf("(%d<>%d) or (%s == %s) adalah %d<br>\n", $angka1,$angka2,$teks1,$teks2,$hasillogika);

//operator string
$text1 = "Aku sedang belajar";
$text2 = "WEB";
$text3 = "PHP";

$hasilstring = $text1.$text2.$text3;
printf("hasil = %s<br>\n",$hasilstring);
?>