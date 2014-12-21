mitcoe.controller("LoginCntrl",function TodoCntrl($scope, $location, AuthenticationService)
{

  $scope.credentials = { email: "", password: "" };

  $scope.login = function() {
    AuthenticationService.login($scope.credentials).success(function() {
      $location.path('/home');
    });
  };
});

