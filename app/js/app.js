/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var app = angular.module('oSystems', ['ngAnimate','ngNotify','ngDialog','ngRoute','ui.bootstrap'])
    .run(function($rootScope) {
        $rootScope.$on('$routeChangeSuccess', function (e, current, pre) {
            $rootScope.currentRoute = current.$$route.originalPath;
        });

    });


