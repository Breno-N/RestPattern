(function(){
    'use strict';
    
    angular
            .module('app')
            .run(run);
    
    run.$inject = ['$rootScope', '$window', '$location', 'authCookie'];
    
    function run($rootScope, $window, $location, authCookie){
        
        $rootScope.$on("$routeChangeStart", function(event, next, current) { 
        
            if(!$window.navigator.cookieEnabled || $window.navigator.cookieEnabled === null){
                $location.path('/error/Cookie_Desabilitado');
            }

            if(!authCookie.auth()){
                $location.path('/login');
            }
            
        });
    };
    
})();