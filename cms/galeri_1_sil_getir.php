<?php

include "ayarlar.php";

$data=array();
$sorgu=mysqli_query($baglanti,"update slider set resim='', metin='' where id=1");

if($sorgu){
    $data['durum']=true;
}
else{
    $data['durum']=false;
}

echo json_encode($data);

?>
