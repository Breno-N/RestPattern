(function(){
    'use strict';
    
    angular
            .module('app')
            .controller('userController', userController);
    
    userController.$inject = ['$http'];
    
    function userController($http){
        var vm = this;
        vm.teste = 'oi';

        $http.get('api/user/').then(function(result){
           console.log(result); 
        });
    };
    
})();

