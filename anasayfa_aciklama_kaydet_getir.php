<?php

include "ayarlar.php";

$data=array();

$gelenData=file_get_contents("php://input");
$datalar=json_decode($gelenData);
$aciklama=$datalar->form_aciklama;

$sorgu=mysqli_query($baglanti, "update anasayfa set aciklama='$aciklama' where id='1'");

if($sorgu){
    $data['durum']=true;
}
else{
    $data['durum']=false;
}

echo json_encode($data);

?>