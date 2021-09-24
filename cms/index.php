<!DOCTYPE html>
<html lang="tr" ng-app="cms">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <!-- FRAMEWORKS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/angular.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- APPLICATION -->
    <script src="app.js"></script>
    <!-- ADMIN -->
    <script src="servis_giris.js"></script>
    <!-- SERVICES -->
    <script src="servis_anasayfa_logo.js"></script>
    <script src="servis_anasayfa_slogan.js"></script>
    <script src="servis_anasayfa_aciklama.js"></script>
    <script src="servis_anasayfa_copyright.js"></script>
    <script src="servis_anasayfa_facebook.js"></script>
    <script src="servis_anasayfa_twitter.js"></script>
    <script src="servis_anasayfa_instagram.js"></script>
    <script src="servis_galeri_1.js"></script>
    <script src="servis_galeri_2.js"></script>
    <script src="servis_galeri_3.js"></script>
    <script src="servis_galeri_4.js"></script>
    <script src="servis_galeri_5.js"></script>
    <title>pinguXCMS</title>
</head>
<body ng-controller="GirisKontrol">
    <div class="well well-sm">CMS Paneli
        <div class="pull-right">{{hosgeldinMesaji}}</div>
    </div>
    <div ng-show="formGoruntulemeDurumu">
        <form class="form-horizontal" role="form" ng-submit="bilgileriKontrolEt()">
            <div class="form-group">
                <label class="control-label col-sm-4">Kullanıcı Adı:</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" ng-model="form_kullaniciadi">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Şifre:</label>
                <div class="col-lg-4">
                    <input type="password" class="form-control" ng-model="form_sifre">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-4">
                    <button type="submit" class="btn btn-default">Giriş</button>
                </div>
            </div>
        </form>
    </div>
    <div ng-show="cmsPaneliGoruntulemeDurumu">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#cms_anasayfa">Anasayfa</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#cms_galeri">Galeri</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="cms-anasayfa" class="tab-pane fade in active">
                    <div ng-include="'cms_anasayfa.php'"></div>
                </div>
                <div id="cms-galeri" class="tab-pane fade">
                    <div ng-include="'cms_galeri.php'"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>