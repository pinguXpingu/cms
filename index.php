<!DOCTYPE html>
<html lang="tr" ng-app="site">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/angular.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="app/uygulama.js"></script>
    <script src="app/kontroller.js"></script>
    <?php
        include "cms/cms_anasayfa_veriler.php";
        include "cms/cms_galeri_veriler.php"
    ?>
    <title><?php echo $slogan[0]; ?></title>
</head>
<body ng-controller="IcerikDoldur" ng-init="sosyal={facebookURL:'<?php echo $facebook[0]; ?>',twitterURL:'<?php echo $twitter[0]; ?>',instagramURL:'<?php echo $instagram[0]; ?>'}">
    <div class="container-fluid">
        <!--LOGO-->
        <header>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <figure>
                        <img src="<?php echo $logo[0]; ?>" alt="logo">
                    </figure>
                </div>
            </div>
        </header>
        <!--SLIDER-->
        <div class="row" ng-init="resimlerURL='<?php echo htmlspecialchars(json_encode($resim)) ?>';resimlerMetin='<?php echo htmlspecialchars(json_encode($metin)) ?>'">
            <div class="col-sm-12">
                <br>
                <div id="slayt" class="carousel-slide" data-ride="carousel" data-interval="2000">
                    <ol class="carousel-indicators">
                        <li data-target="#slayt" ng-repeat="x in resimlerURL" data-ng-class="{active:$first}" data-slide-to="{{$index}}"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item" ng-repeat="x in resimlerURL" ng-class="{'active':$index==0}">
                            <img ng-src="{{x}}" alt="slider">
                            <div class="carousel-caption">
                                <h1><strong>{{resimlerMetin[$index]}}</strong></h1>
                            </div>
                        </div>
                    </div>
                    <a href="#slayt" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a href="#slayt" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
        <!--SLOGAN-->
        <div class="col-sm-10 col-sm-offset-1">
            <h1 class="text-center"><strong><?php echo $slogan[0]; ?></strong></h1>
        </div>
        <!--AÇIKLAMA-->
        <div class="col-sm-12">
            <summary class="text-center"><?php echo $aciklama[0]; ?></summary>
        </div>
    </div>
    <!--FOOTER-->
    <footer class="footer navbar-fixed-bottom" style="background-color: levander; padding:5px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" style="padding-top:15px">
                    <?php echo $copyright[0]; ?>
                </div>
                <div class="col-sm-6" style="text-align:right">
                    <a ng-if="sosyal.facebookURL!=''" href="<?php echo $facebook[0]; ?>" target="_blank"><img src="img/facebook.png" alt="face"></a>&nbsp;
                    <a ng-if="sosyal.twitterURL!=''" href="<?php echo $twitter[0]; ?>" target="_blank"><img src="img/twitter.png" alt="twitter"></a>&nbsp;
                    <a ng-if="sosyal.instagramURL!=''" href="<?php echo $instagram[0]; ?>" target="_blank"><img src="img/instagram.png" alt="instagram"></a>
                </div>
            </div>
        </div>
    </footer>
    <hr>
</body>
</html>