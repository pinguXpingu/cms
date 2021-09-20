<?php
$baglanti=mysqli_connect("localhost","cmsapp","7QcWnDdiurgEFTU","cmsapp");
$baglanti->set_charset("utf8");

if(!$baglanti){
    die("Hata: ".mysqli_connect_error());
}
?>