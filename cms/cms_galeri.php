<?php

include "cms_galeri_veriler.php";

?>

<hr>
<div ng-controller="AnasayfaResim1KaydetGetir">
    <div>
        <h4><span class="label label-primary">Resim1</span></h4>
    </div>
    <br>
    <img class="img-responsive" src="{{form_resim1}}" ng-init="form_resim1='<?php echo $resim[0]; ?>'" alt="resim1">
    <br>
    <div>
        <label>URL<span class="label label-default"><small>&nbspEn fazla 500 karakter</small></span></label>
        <input type="url" pattern="https?://.+" class="form-control" ng-model="form_resim1" placeholder="https://" maxlength="500">
    </div>
    <br>
    <div>
        <label>Metin<span class="label label-default"><small>&nbspEn fazla 250 karakter</small></span></label>
        <input type="text" class="form-control" ng-model="form_metin1" ng-init="form_metin1='<?php echo $metin[0];?>'" maxlength="250">
    </div>
    <div class="float-right">
        <button ng-click="resim1Sil()" class="btn btn-danger">Sil</button>&nbsp;&nbsp;<button ng-click="resim1Guncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<br>
<div ng-controller="AnasayfaResim2KaydetGetir">
    <div>
        <h4><span class="label label-primary">Resim2</span></h4>
    </div>
    <br>
    <img class="img-responsive" src="{{form_resim2}}" ng-init="form_resim2='<?php echo $resim[0]; ?>'" alt="resim2">
    <br>
    <div>
        <label>URL<span class="label label-default"><small>&nbspEn fazla 500 karakter</small></span></label>
        <input type="url" pattern="https?://.+" class="form-control" ng-model="form_resim2" placeholder="https://" maxlength="500">
    </div>
    <br>
    <div>
        <label>Metin<span class="label label-default"><small>&nbspEn fazla 250 karakter</small></span></label>
        <input type="text" class="form-control" ng-model="form_metin2" ng-init="form_metin2='<?php echo $metin[0];?>'" maxlength="250">
    </div>
    <div class="float-right">
        <button ng-click="resim2Sil()" class="btn btn-danger">Sil</button>&nbsp;&nbsp;<button ng-click="resim2Guncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<br>
<div ng-controller="AnasayfaResim3KaydetGetir">
    <div>
        <h4><span class="label label-primary">Resim3</span></h4>
    </div>
    <br>
    <img class="img-responsive" src="{{form_resim3}}" ng-init="form_resim3='<?php echo $resim[0]; ?>'" alt="resim3">
    <br>
    <div>
        <label>URL<span class="label label-default"><small>&nbspEn fazla 500 karakter</small></span></label>
        <input type="url" pattern="https?://.+" class="form-control" ng-model="form_resim3" placeholder="https://" maxlength="500">
    </div>
    <br>
    <div>
        <label>Metin<span class="label label-default"><small>&nbspEn fazla 350 karakter</small></span></label>
        <input type="text" class="form-control" ng-model="form_metin3" ng-init="form_metin3='<?php echo $metin[0];?>'" maxlength="350">
    </div>
    <div class="float-right">
        <button ng-click="resim3Sil()" class="btn btn-danger">Sil</button>&nbsp;&nbsp;<button ng-click="resim3Guncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<br>
<div ng-controller="AnasayfaResim4KaydetGetir">
    <div>
        <h4><span class="label label-primary">Resim4</span></h4>
    </div>
    <br>
    <img class="img-responsive" src="{{form_resim4}}" ng-init="form_resim4='<?php echo $resim[0]; ?>'" alt="resim4">
    <br>
    <div>
        <label>URL<span class="label label-default"><small>&nbspEn fazla 500 karakter</small></span></label>
        <input type="url" pattern="https?://.+" class="form-control" ng-model="form_resim4" placeholder="https://" maxlength="500">
    </div>
    <br>
    <div>
        <label>Metin<span class="label label-default"><small>&nbspEn fazla 450 karakter</small></span></label>
        <input type="text" class="form-control" ng-model="form_metin4" ng-init="form_metin4='<?php echo $metin[0];?>'" maxlength="450">
    </div>
    <div class="float-right">
        <button ng-click="resim4Sil()" class="btn btn-danger">Sil</button>&nbsp;&nbsp;<button ng-click="resim4Guncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<br>
<div ng-controller="AnasayfaResim5KaydetGetir">
    <div>
        <h5><span class="label label-primary">Resim5</span></h5>
    </div>
    <br>
    <img class="img-responsive" src="{{form_resim5}}" ng-init="form_resim5='<?php echo $resim[0]; ?>'" alt="resim5">
    <br>
    <div>
        <label>URL<span class="label label-default"><small>&nbspEn fazla 500 karakter</small></span></label>
        <input type="url" pattern="https?://.+" class="form-control" ng-model="form_resim5" placeholder="https://" maxlength="500">
    </div>
    <br>
    <div>
        <label>Metin<span class="label label-default"><small>&nbspEn fazla 550 karakter</small></span></label>
        <input type="text" class="form-control" ng-model="form_metin5" ng-init="form_metin5='<?php echo $metin[0];?>'" maxlength="550">
    </div>
    <div class="float-right">
        <button ng-click="resim5Sil()" class="btn btn-danger">Sil</button>&nbsp;&nbsp;<button ng-click="resim5Guncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<br>
<hr>