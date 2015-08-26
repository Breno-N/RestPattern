(function(){
    'use strict',
    
    angular
            .module('app')
            .controller('loginController', loginController);
    
    loginController.$inject = ['validLogin'];
    
    function loginController(validLogin){
        var vm = this;
        vm.clear = {};
        vm.auth = auth;
        vm.reset = reset;
        
        function auth(form){
            validLogin.auth(form);
        }
        
        function reset(item){
            angular.copy(vm.clear, item);
        }
    };
    
})();