var app = angular.module('Details', ['ui.router']);
app.config(function($stateProvider,$urlRouterProvider,$locationProvider){

    $stateProvider.state('about', {
        url:'/about',
        templateUrl:BASE_URL+'details/about',
        controller: 'aboutCtrl'
    }).state('portfolio', {
        url:'/portfolio',
        templateUrl: BASE_URL+'details/portfolio'
    }).state('feature',{
    	url:'/feature',
    	templateUrl: BASE_URL+'details/feature',
        controller:'feaCtrl'
    }).state('donate',{
    	url: '/donate',
    	templateUrl: BASE_URL+'details/donate'
    });
    $urlRouterProvider.otherwise('/about')
});

app.controller('aboutCtrl', function($scope){
        $scope.about = ["HTML",
                        "CSS",
                        "Javascript",
                        "PHP",
                        "Java",
                        "AngularJs",
                        "Codeigniter"];
        $scope.intro = "Burhan Med/Burhanuddin Ahmad, a web developer based in Indonesia. Been working widely with front end and back end.";
});

app.controller('feaCtrl', function($scope){
    $scope.feaBlock = [{title:'Kalkulator Nilai (Develpment', src:'assets/img/fea.jpg', href:'feature/kalkulator_nilai'},
                        {title:'Link Shortener', src:'assets/img/fea.jpg', href:'details#/feature'}];
});
