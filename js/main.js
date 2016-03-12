var BaseUrl = "http://188.27.254.146/newdaia/wp-content/themes/daiaia/";

angular.module('daia', ['ngRoute'])
    .config(function ($locationProvider, $routeProvider) {
        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        });
        $routeProvider
            .when('/newdaia', {
                templateUrl: BaseUrl + 'views/main.html'
            })
            .otherwise({
                redirectTo: BaseUrl + '/newdaia'
            });
    });
