cms.controller("AnasayfaInstagramKaydetGetir", function($scope, $http){
    $scope.instagramGuncelle=function(){
        var request=$http({
            method:"post",
            url:"anasayfa_instagram_kaydet_getir.php",
            data:{
                form_instagram:$scope.form_instagram
            },
            headers:{
                "Content-type":"application/x-www-form-urlencoded"
            }
        });

        request.then(function(data){
            if(data.data.durum){
                alert("Veri kaydedildi");
            }
            else{
                alert("Bir hata oldu, tekrar dene");
            }
        });
    }
});