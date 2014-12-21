var mitcoe = angular.module("mitcoe", ['ngSanitize','ngRoute','ui.router','angularFileUpload','ui.select']);

mitcoe.config(function($stateProvider,$urlRouterProvider) {

$urlRouterProvider.otherwise("/login");
  $stateProvider.state('login',{
    url:'/login',
    templateUrl: ' partials/login.html',
    controller: 'LoginCntrl'
  })
  .state('home',{
    url:'/home',
    templateUrl: ' partials/home.html',
    controller: 'HomeController'
  });

});

mitcoe.run(function($rootScope, $location, AuthenticationService, FlashService) {
  var routesThatRequireAuth = ['/home'];

  $rootScope.$on('$routeChangeStart', function(event, next, current) {
    if(_(routesThatRequireAuth).contains($location.path()) && !AuthenticationService.isLoggedIn())
      {
        $location.path('/login');
      FlashService.show("Please log in to continue.");
    }
    else{
      console.log("Nice");
    }
  });
});








