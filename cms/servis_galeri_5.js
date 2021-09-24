cms.controller("AnasayfaResim5KaydetGetir", function($scope, $http){
    $scope.resim5Guncelle=function(){
        var request=$http({
            method: "post",
            url: "galeri_5_kaydet_getir.php",
            data:{
                form_resim5:$scope.form_resim5,
                form_metin5:$scope.form_metin5
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
    $scope.resim5Sil=function(){
        var request=$http({
            method: "post",
            url: "galeri_5_sil_getir.php",
            headers:{
                'Content-type':'application/x-www-form-urlencoded'
            }
        });
        request.succes(function(data){
            if(data.durum){
                alert("Kayıt silindi");
                $scope.form_resim5="";
                $scope.form_metin5="";
            }
            else{
                alert("Hata! Tekrar dene...");
            }
        });
    }
});