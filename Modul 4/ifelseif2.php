<?php
$waktu = getdate();
if($waktu['hours'] <=10){
    echo ("Selamat pagi");
}else if($waktu['hours'] <=15){
    echo ("Selamat siang");
}else if($waktu['hours'] <= 18){
    echo("Selamat Sore");
}else{
    echo ("Sealamat Malam");
}
?>