cms.controller("AnasayfaResim1KaydetGetir", function($scope, $http){
    $scope.resim1Guncelle=function(){
        var request=$http({
            method: "post",
            url: "galeri_1_kaydet_getir.php",
            data:{
                form_resim1:$scope.form_resim1,
                form_metin1:$scope.form_metin1
            },
            headers:{
                'Content-type':'application/x-www-form-urlencoded'
            }
        });
        request.then(function(data){
            if(data.data.durum){
                alert("Veri kaydedildi");
            }
            else{
                alert("Hata! Tekrar dene...");
            }
        });
    }
    $scope.resim1Sil=function(){
        var request=$http({
            method: "post",
            url: "galeri_1_sil_getir.php",
            headers:{
                'Content-type':'application/x-www-form-urlencoded'
            }
        });
        request.then(function(data){
            if(data.data.durum){
                alert("Kayıt silindi");
                $scope.form_resim1="";
                $scope.form_metin1="";
            }
            else{
                alert("Hata! Tekrar dene...");
            }
        });
    }
});