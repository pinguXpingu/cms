<?php

include "cms_anasayfa_veriler.php";

?>

<hr>
<div ng-controller="AnasayfaLogoKaydetGetir">
    <div>
        <label>Logo URL <span class="label label-default">En fazla 250 karakter</span></label>
        <img class="img-responsive" src="{{resim_logo}}" alt="logo" ng-init="resim_logo='<?php echo $logo[0]; ?>'"/>
        <br>
        <input type="url" pattern="http?://.+" class="form-control" ng-model="form_logo" ng_init="form_logo='<?php echo $logo[0]; ?>'" placeholder="http://" maxlength="250">
    </div>
    <br>
    <div class="pull-right">
        <button ng-click="logoGuncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<br>
<div ng-controller="AnasayfaSloganKaydetGetir">
    <div>
        <label>Slogan <span class="label label-default">En fazla 250 karakter</span></label>
        <input type="text" class="form-control" ng-model="form_slogan" ng_init="form_slogan='<?php echo $slogan[0]; ?>'" maxlength="250">
    </div>
    <br>
    <div class="pull-right">
            <button ng-click="sloganGuncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<br>
<div ng-controller="AnasayfaAciklamaKaydetGetir">
    <div>
            <label>Açıklama<span class="label label-default">En fazla 250 karakter</span></label>
            <textarea rows="4" class="form-control" ng-model="form_aciklama" ng-init="form_aciklama='<?php echo $aciklama[0]; ?>'" maxlength="500">
    </div>
    <br>
    <div class="pull-right">
        <button ng-click="aciklamaGuncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<br>
<div ng-controller="AnasayfaCopyrightKaydetGetir">
    <div>
        <label>Copyright<span class="label label-default">En fazla 100 karakter</span></label>
        <input type="text" class="form-control" ng-model="form_copyright" ng_init="form_copyright='<?php echo $copyright[0]; ?>'" maxlength="100">
    </div>
    <br>
    <div class="pull-right">
            <button ng-click="copyrightGuncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<div ng-controller="AnasayfaFacebookKaydetGetir">
    <div>
        <label>Facebook<span class="label label-default">En fazla 100 karakter</span></label>
        <input type="text" class="form-control" ng-model="form_facebook" ng_init="form_facebook='<?php echo $facebook[0]; ?>'" maxlength="100">
    </div>
    <br>
    <div class="pull-right">
            <button ng-click="copyrightGuncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<div ng-controller="AnasayfaTwitterKaydetGetir">
    <div>
        <label>Twitter<span class="label label-default">En fazla 100 karakter</span></label>
        <input type="text" class="form-control" ng-model="form_twitter" ng_init="form_twitter='<?php echo $twitter[0]; ?>'" maxlength="100">
    </div>
    <br>
    <div class="pull-right">
            <button ng-click="twitterGuncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<div ng-controller="AnasayfaInstagramKaydetGetir">
    <div>
        <label>Instagram<span class="label label-default">En fazla 100 karakter</span></label>
        <input type="text" class="form-control" ng-model="form_instagram" ng_init="form_instagram='<?php echo $instagram[0]; ?>'" maxlength="100">
    </div>
    <br>
    <div class="pull-right">
            <button ng-click="instagramGuncelle()" class="btn btn-primary">Kaydet</button>
    </div>
</div>
<br>
<hr>