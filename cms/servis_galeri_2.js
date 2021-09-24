cms.controller("AnasayfaResim2KaydetGetir", function($scope, $http){
    $scope.resim2Guncelle=function(){
        var request=$http({
            method: "post",
            url: "galeri_2_kaydet_getir.php",
            data:{
                form_resim2:$scope.form_resim2,
                form_metin2:$scope.form_metin2
            },
            headers:{
                'Content-type':'application/x-www-form-urlencoded'
            }
        });
        request.succes(function(data){
            if(data.durum){
                alert("Veri kaydedildi");
            }
            else{
                alert("Hata! Tekrar dene...");
            }
        });
    }
    $scope.resim2Sil=function(){
        var request=$http({
            method: "post",
            url: "galeri_2_sil_getir.php",
            headers:{
                'Content-type':'application/x-www-form-urlencoded'
            }
        });
        request.succes(function(data){
            if(data.durum){
                alert("Kayıt silindi");
                $scope.form_resim2="";
                $scope.form_metin2="";
            }
            else{
                alert("Hata! Tekrar dene...");
            }
        });
    }
});