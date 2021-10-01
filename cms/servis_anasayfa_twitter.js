cms.controller("AnasayfaTwitterKaydetGetir", function($scope, $http){
    $scope.twitterGuncelle=function(){
        var request=$http({
            method:"post",
            url:"anasayfa_twitter_kaydet_getir.php",
            data:{
                form_twitter:$scope.form_twitter
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