cms.controller("GirisKontrol", function($scope, $http){
    $scope.formGoruntulemeDurumu=true;
    $scope.cmsPaneliGoruntulemeDurumu=false;

    $scope.bilgileriKontrolEt=function(){
        var request=$http({
            method:"post",
            url: "giris.php",
            data:{
                form_kullaniciadi:$scope.form_kullaniciadi,
                form_sifre:$scope.form_sifre
            },
            headers:{
                "Content-type":"application/x-www-form-urlencoded"
            }
        });
        request.then(function(data){
            if(data.data.baglantiDurumu){
                $scope.formGoruntulemeDurumu=false;
                $scope.cmsPaneliGoruntulemeDurumu=true;
                $scope.hosgeldinMesaji="Hoşgeldin "+$scope.form_kullaniciadi;
            }
            else{
                $scope.form_kullaniciadi="";
                $scope.form_sifre="";
            }
        });
    }
});