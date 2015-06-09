/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * test git
 */

app.controller('AddUserController', function ($rootScope, $scope, Globals, ngNotify, ngDialog, userManagerService) {
    $('button').tooltip();
    $scope.loader = 0;
    $scope.userManagerService = userManagerService;
    $scope.user = {user_type: 'User'};

    $scope.addUser = function (userPostedData) {
        userManagerService.addUser(function(success){
            ngNotify.set("Successfully registered new user!", 'success');
        }, function(error){
            ngNotify.set("Ooops! You might have missed something...", 'error');
        }, userPostedData);
    }
});

