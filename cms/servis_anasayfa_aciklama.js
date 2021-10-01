cms.controller("AnasayfaAciklamaKaydetGetir", function($scope, $http){
    $scope.aciklamaGuncelle=function(){
        var request=$http({
            method:"post",
            url:"anasayfa_aciklama_kaydet_getir.php",
            data:{
                form_aciklama:$scope.form_aciklama
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