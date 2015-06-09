app.config(['$locationProvider', '$routeProvider',
    function ($locationProvider, $routeProvider) {
        $locationProvider.html5Mode(false);
        $routeProvider.
            when('/userManagement', {
                templateUrl: '../../app/js/userManager/template/userManager.html',
                controller: 'UserManagerController',
                currentRoute: 'userManagement'
            }).
            when('/addUser', {
                templateUrl: '../../app/js/userManager/template/addUser.html',
                controller: 'AddUserController',
                currentRoute: 'addUser'
            }).
            when('/enrollment', {
                templateUrl: '../../app/js/admission/template/enrollment.html',
                controller: 'AdmissionController',
                currentRoute: 'enrollment'
            }).
            when('/addStudent', {
                templateUrl: '../../app/js/admission/template/addStudent.html',
                controller: 'AdmissionController',
                currentRoute: 'addStudent'
            }).
            when('/tests', {
                templateUrl: '../../app/js/admission/template/tests.html',
                controller: 'TestsController',
                currentRoute: 'tests'
            }).
            when('/viewTest/:testId', {
                templateUrl: '../../app/js/admission/template/viewTest.html',
                controller: 'TestsController',
                currentRoute: 'viewTest'
            }).
            when('/makeTest', {
                templateUrl: '../../app/js/admission/template/addTest.html',
                controller: 'TestsController',
                currentRoute: 'makeTest'
            }).
            when('/studentMonitoring', {
                templateUrl: '../../app/js/studentMonitoring/template/studentMonitoring.html',
                controller: 'StudentMonitoringController',
                currentRoute: 'studentMonitoring'
            }).
            when('/studentList', {
                templateUrl: '../../app/js/studentMonitoring/template/studentList.html',
                controller: 'StudentMonitoringController',
                currentRoute: 'studentList'
            }).
            when('/studentActions', {
                templateUrl: '../../app/js/studentMonitoring/template/studentActions.html',
                controller: 'StudentMonitoringController',
                currentRoute: 'studentActions'
            }).
            when('/', {
                templateUrl: '../../app/js/admission/template/admission.html',
                controller: 'AddUserController',
                currentRoute: 'addUser'
            }).
            otherwise({
                redirectTo: '/'
            });
    }]);


