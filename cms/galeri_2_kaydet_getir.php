<?php

include "ayarlar.php";

$data=array();

$gelenData=file_get_contents("php://input");
$datalar=json_decode($gelenData);

$resim=$datalar->form_resim2;
$metin=$datalar->form_metin2;

$sorgu=mysqli_query($baglanti,"update slider set resim='$resim', metin='$metin' where id=2");

if($sorgu){
    $data['durum']=true;
}
else{
    $data['durum']=false;
}

echo json_encode($data);

?>