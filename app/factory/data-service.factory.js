(function(){
    'use strict';
    
    angular
            .module('app')
            .factory('dataService', dataService);
    
    dataService.$inject = ['$http'];
    
    function dataService($http){
        var service = {
            get     : get,
            post    : post,
            put     : put,
            remove  : remove,
        };
        
        return service;
        
        function get(url, params){
            return $http.get(url,{ params : params }).then(function(result){
                return result.data;
            });
        };
        
        function post(url, params){
            return $http.post(url, params).then(function(result){
                return result.data;
            });
        };
        
        function put(url, params){
            return $http.put(url, params).then(function(result){
                return result.data;
            });
        };
        
        function remove(url){
            return $http.remove(url).then(function(result){
                return result.data;
            });
        };
    };
    
})();