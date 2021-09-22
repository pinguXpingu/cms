cms.controller("AnasayfaFacebookKaydetGetir", function($scope, $http){
    $scope.facebookGuncelle=function(){
        var request=$http({
            method:"post",
            url:"anasayfa_facebook_kaydet_getir.php",
            data:{
                form_facebook:$scope.form_facebook
            },
            headers:{
                "Content-type":"application/x-www-form-urlencoded"
            }
        });

        request.success(function(data){
            if(data.durum){
                alert("Veri kaydedildi");
            }
            else{
                alert("Bir hata oldu, tekrar dene");
            }
        });
    }
});