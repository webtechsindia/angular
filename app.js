var app    =    angular.module('app',[]).config(function($routeProvider){
    $routeProvider.when('/',{
           templateUrl:'/welcome.php',
           controller:'welcomeController' 
    })  
    $routeProvider.when('/home',{
        templateUrl:'/home.php',
        controller:'homeController'
    })
    $routeProvider.when('/gallery',{
        templateUrl:'/gallery.php',
        controller:'galleryController'
    })
    
    $routeProvider.otherwise({
           redirectTo: '/',
    })
});
app.controller('welcomeController',function(){

})

app.controller('homeController',function(){
})

app.controller('galleryController',function(){
})
