/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * test git
 */

app.controller('UserManagerController', function ($rootScope, $scope, Globals, ngNotify, ngDialog, userManagerService) {

    $scope.loader = 0;
    $scope.userManagerService = userManagerService;

    $scope.setRoute = function (currentRoute) {
        $rootScope.route = currentRoute;
    }

    userManagerService.fetchUsers(
        function (success) {
            userManagerService.users = success.data;
            $scope.loader = 1;
            ngNotify.set("Successfully loaded all users", 'info');
        }, function (error) {
            ngNotify.set(error.message, 'error');
        });

});

