(function(){
    'use strict';
    
    angular
            .module('app')
            .controller('errorController', errorController);
    
    errorController.$inject = ['$routeParams', '$window'];
    
    function errorController($routeParams, $window){
        var vm = this;
        
        if ($routeParams.error === 'Cookie_Desabilitado') {
            vm.mensagem = 'Cookies Desabilidatos';
            vm.subMensage = 'Os cookies do seu navegador estão desabilitados, para utilizar essa aplicação é necessário habilitar.';
        } 
        
        vm.redirecionar = function(pagina) {
            $window.location.href = pagina;
        };
        
    };
    
})();