<!DOCTYPE html>
<html ng-app="app" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="angular.js"></script>
        <script src="app.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/custom.css" rel="stylesheet" media="screen">
   </head>
   <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <a class="brand" href="/"><h2>Sitename</h2></a>
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a  ng-href="#/gallery">Gallery</a></li>
                    <li><a href ng-click="form">Form</a></li>
                </ul>
                <form class="navbar-search pull-right ">
                    <input type="text" class="search-query" placeholder="Search">
                </form>
            </div>
        </div> 
        <div class="container-fluid maindiv"  ng-view>
            
            
        </div>  
        <div class="navbar navbar-fixed-bottom navbar-bottom">
            <div class="navbar-inner">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <form class="navbar-search pull-right ">
                    <input type="text" class="search-query" placeholder="Search">
                </form>
            </div>
        </div> 
       
      </body>
</html>
