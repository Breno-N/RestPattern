(function(){
    'use strict';
    
    angular
            .module('app')
            .factory('validLogin', validLogin);
    
    validLogin.$inject = ['$location', 'dataService', 'authCookie'];
    
    function validLogin($location, dataService, authCookie){
        var service = {
            auth : auth
        };
        
        return service;
        
        function auth(form){
            dataService
                    .post('api/login', angular.toJson(form))
                    .then(authComplete)
                    .catch(authFailed);
        }
        
        function authComplete(response){
            if(response.error == '0' || angular.isUndefined(response.error)) {
                authCookie.create(response.data);
                $location.path('/home');
            } else {
                alert(response.message);
            }
        }
        
        function authFailed(error){
            console.log('Error: '.error);
        }
    };
    
})();