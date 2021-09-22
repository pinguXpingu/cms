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
<body ng-controller="IcerikDoldur">
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
        <div class="row">
            <div class="col-sm-12">
                <br>
                <div id="slayt" class="carousel-slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slayt" data-slide-to="1" class="active"></li>
                        <li data-target="#slayt" data-slide-to="2"></li>
                        <li data-target="#slayt" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item-active">
                            <img src="img/slider/1.jpg" alt="r1">
                            <div class="carousel-caption">
                                <h1><strong></strong></h1>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slider/2.jpg" alt="r2">
                            <div class="carousel-caption">
                                <h1><strong></strong></h1>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slider/3.jpg" alt="r3">
                            <div class="carousel-caption">
                                <h1><strong></strong></h1>
                            </div>
                        </div>
                    </div>
                    <a href="#slayt" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </a>
                    <a href="#slayt" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
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
                    <a href="<?php echo $facebook[0]; ?>" target="_blank"><img src="facebook.png" alt="face"></a>&nbsp;
                    <a href="<?php echo $twitter[0]; ?>" target="_blank"><img src="twitter.png" alt="twitter"></a>&nbsp;
                    <a href="<?php echo $instagram[0]; ?>" target="_blank"><img src="instagram.png" alt="instagram"></a>
                </div>
            </div>
        </div>
    </footer>
    <hr>
</body>
</html>