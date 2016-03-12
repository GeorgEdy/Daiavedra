(function () {
    var app = angular.module('daia');
    app.controller('MainCtrl', function ($scope, $http) {

        $scope.recomandate = [];

        $http({
            method: 'GET',
            url: 'https://www.daiavedra.com/wp-json/wp/v2/tour?per_page=9'
        }).then(function successCallback(res) {
            res.data.forEach(function(e){
                $http({
                    method: 'GET',
                    url: "https://www.daiavedra.com/wp-json/wp/v2/media/" + e.featured_media
                }).then(function successCallback(ress) {
                    e.featured_image = ress.data.source_url;
                }, function errorCallback(response) {
                    console.log(response);
                });
               $scope.recomandate.push(e);
            });
        }, function errorCallback(response) {
            console.log(response);
        });

    })
})
();