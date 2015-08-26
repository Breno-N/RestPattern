(function(){
    'use strict';

    angular
            .module('app')
            .config(config);
    
    config.$inject = ['$routeProvider'];
    
    function config($routeProvider){
        $routeProvider
            .when('/login',{
                controller      : 'loginController',
                controllerAs    : 'login',
                templateUrl     : 'app/login/login.tpl.html',
                title           : 'Login'
            })
            .when('/home',{
                controller      : 'homeController',
                controllerAs    : 'home',
                templateUrl     : 'app/home/home.tpl.html',
                title           : 'Home'
            })
            .when('/',{
                redirectTo: '/home'
            })
            .otherwise({
                redirectTo: '/home'
            });
    }
    
})();


