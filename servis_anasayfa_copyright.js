cms.controller("AnasayfaCopyrightKaydetGetir", function($scope, $http){
    $scope.copyrightGuncelle=function(){
        var request=$http({
            method:"post",
            url:"anasayfa_copyright_kaydet_getir.php",
            data:{
                form_copyright:$scope.form_copyright
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