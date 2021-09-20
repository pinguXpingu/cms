cms.controller("AnasayfaSloganKaydetGetir", function($scope, $http){
    $scope.sloganGuncelle=function(){
        var request=$http({
            method:"post",
            url:"anasayfa_slogan_kaydet_getir.php",
            data:{
                form_slogan:$scope.form_slogan
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