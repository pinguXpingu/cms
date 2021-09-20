<?php

include "ayarlar.php";

$data=array();

$sorgu="select * from kullanici";
$sorgusonucu=mysqli_query($baglanti,$sorgu);

if($sorgusonucu){
    while($kayit=mysqli_fetch_assoc($sorgusonucu)){
        $kullaniciadi=$kayit["kullaniciadi"];
        $sifre=$kayit["sifre"];
    }
}

$gelenData=file_get_contents("php://input");
$datalar=json_decode($gelenData);
$form_kullaniciadi=$datalar->form_kullaniciadi;
$form_sifre=$datalar->form_sifre;

if($kullaniciadi==$form_kullaniciadi && $sifre=$form_sifre){
    $data["baglantiDurumu"]=true;
}
else{
    $data["baglantiDurumu"]=false;
}

echo json_encode($data);

?>