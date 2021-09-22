cms.controller("AnasayfaResim4KaydetGetir", function($scope, $http){
    $scope.resim4Guncelle=function(){
        var request=$http({
            method: "post",
            url: "galeri_4_kaydet_getir.php",
            data:{
                form_resim4:$scope.form_resim4,
                form_metin4=$scope.form_metin4
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
    $scope.resim4Sil=function(){
        var request=$http({
            method: "post",
            url: "galeri_4_sil_getir.php",
            headers:{
                'Content-type':'application/x-www-form-urlencoded'
            }
        });
        request.succes(function(data){
            if(data.durum){
                alert("Kayıt silindi");
                $scope.form_resim4="";
                $scope.form_metin4="";
            }
            else{
                alert("Hata! Tekrar dene...");
            }
        });
    }
});