cms.controller("AnasayfaLogoKaydetGetir", function($scope, $http){
    $scope.logoGuncelle=function(){
        var request=$http({
            method:"post",
            url:"anasayfa_logo_kaydet_getir.php",
            data:{
                form_logo:$scope.form_logo
            },
            headers:{
                "Content-type":"application/x-www-form-urlencoded"
            }
        });

        request.then(function(data){
            if(data.data.durum){
                alert("Veri kaydedildi");
                $scope.resim_logo=$scope.form_logo;
            }
            else{
                alert("Bir hata oldu, tekrar dene");
            }
        });
    }
});