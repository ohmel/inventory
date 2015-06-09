app.service('lookUpService', function ($http, Globals) {

    "use strict";

    var url = Globals.rootUrl + "index.php/api/",
        fetchLevels = function (callback, errback) {
            $http({
                method: 'GET',
                url: url + 'lookUp/fetchLevels'
            }).success(callback).error(errback);
        },

        fetchCourses = function (callback, errback) {
            $http({
                method: 'GET',
                url: url + 'lookUp/fetchCourses'
            }).success(callback).error(errback);
        }

    return {
        fetchLevels: fetchLevels,
        fetchCourses: fetchCourses
    };
});