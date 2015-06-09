/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

app.controller('SiteController', function($scope, Globals, ngNotify, ngDialog) {
    $('i').tooltip();
    $scope.clickToOpen = function() {
        ngDialog.open({
            template:'\
                <p>Are you sure you want to close the parent dialog?</p>\
                <div class="ngdialog-buttons">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="confirm(1)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="closeThisDialog(0)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-plain'
        });
    };


});

