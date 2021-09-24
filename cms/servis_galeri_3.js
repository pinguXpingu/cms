cms.controller("AnasayfaResim3KaydetGetir", function($scope, $http){
    $scope.resim3Guncelle=function(){
        var request=$http({
            method: "post",
            url: "galeri_3_kaydet_getir.php",
            data:{
                form_resim3:$scope.form_resim3,
                form_metin3:$scope.form_metin3
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
    $scope.resim3Sil=function(){
        var request=$http({
            method: "post",
            url: "galeri_3_sil_getir.php",
            headers:{
                'Content-type':'application/x-www-form-urlencoded'
            }
        });
        request.succes(function(data){
            if(data.durum){
                alert("Kayıt silindi");
                $scope.form_resim3="";
                $scope.form_metin3="";
            }
            else{
                alert("Hata! Tekrar dene...");
            }
        });
    }
});