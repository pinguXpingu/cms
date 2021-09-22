<?php

include "ayarlar.php";

$logo=array();
$slogan=array();
$aciklama=array();
$copyright=array();
$facebook=array();
$twitter=array();
$instagram=array();

$sorgu="select * from anasayfa";
$sorguSonucu=mysqli_query($baglanti,$sorgu);

if($sorguSonucu){
    while($kayit=mysqli_fetch_assoc($sorguSonucu)){
        $logo[]=$kayit["logo"];
        $slogan[]=$kayit["slogan"];
        $aciklama[]=$kayit["aciklama"];
        $copyright[]=$kayit["copyright"];
        $facebook[]=$kayit["facebook"];
        $twitter[]=$kayit["twitter"];
        $instagram[]=$kayit["instagram"];
    }
}

?>