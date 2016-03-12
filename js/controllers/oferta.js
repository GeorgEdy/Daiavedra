(function () {
    var app = angular.module('daia');
    app.controller('OfertaCtrl', function ($scope, $http, $routeParams) {


        console.log($routeParams);

        $http({
            method: 'GET',
            url: 'https://www.daiavedra.com/wp-json/wp/v2/tour?filter[name]=' + $routeParams.slug
        }).then(function successCallback(res) {
            console.log(res.data);
            $scope.listingDetails = res.data[0];
        }, function errorCallback(response) {
            console.log(response);
        });

    })
})
();