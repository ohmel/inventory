app.service('userManagerService', function ($http, Globals) {

    "use strict";

    var url = Globals.rootUrl+"index.php/api/",
        users = [],
        fetchUsers = function (callback, errback) {
            $http({
                method: 'GET',
                url: url+'user/fetchUsers'
            }).success(callback).error(errback);
        },
        addUser = function(callback, errback, user){
            $http({
                method: 'POST',
                url: url+'user/addUser',
                data: user
            }).success(callback).error(errback);
        };



    return {
        users: users,
        fetchUsers: fetchUsers,
        addUser: addUser
    };
});