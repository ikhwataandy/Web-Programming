<?php
//no.1
$tarif = 0;
    if($tarif == 150000 && 250000){
        echo 'Melati';
    }else if($tarif == 250000 && 500000){
        echo 'Deluxe';
    }else if($tarif == 500000 && 1000000){
        echo 'Superior';
    }else if($tarif == 1000000 && 5000000){
        echo 'President';
    }else{
        echo 'belum tersedia';
    }
?>