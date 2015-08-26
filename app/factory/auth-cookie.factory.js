(function(){
    'use strict';
    
    angular
            .module('app')
            .factory('authCookie', authCookie);
    
    authCookie.$inject = ['$cookieStore'];
    
    function authCookie($cookieStore){
        var service = {
            auth    : auth,
            create  : create,
            get     : get,
            remove  : remove,
        };
        
        return service;
        
        function auth(){
            return angular.isUndefined($cookieStore.get('appCookieStoreKey')) ? false : true;
        };
        
        function create(user){
            $cookieStore.put('appCookieStoreKey', angular.toJson(user));
        };
        
        function get(){
            return angular.fromJson($cookieStore.get('appCookieStoreKey'));
        };
        
        function remove(){
            $cookieStore.remove('ControleDeCentraisuserGVT');
        };
    };
    
})();