<?php

include "ayarlar.php";

$resim=array();
$metin=array();

$sorgu="select * from slider";
$sorguSonucu=mysqli_query($baglanti,$sorgu);

if($sorguSonucu){
    while($kayit=mysqli_fetch_assoc($sorguSonucu)){
        $resim[]=$kayit["resim"];
        $metin[]=$kayit["metin"];
    }
}


?>