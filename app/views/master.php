<!DOCTYPE html>
<html lang="en" ng-app="contact">
  <head>
    <title>Contacts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 
    <link href="css/vendors/bootstrap.css" rel="stylesheet">
    <link href="css/vendors/toastr.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet"> -->
    <link href="dist/app.min.css" rel="stylesheet">
  </head>
  <body id="home">
    <section class="container" ng-controller="AppController">

		<!-- row 1: navigation -->
	    <div class="row">
	        <!-- the role navigation section is the navbar ,navbar-fixed-top is for full width , navbar-inverse is for color black or inverse color and icon-bar is the icons which comes on the button when u reduce the page size!-->
	        <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	            <div class="navbar-header">
	            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse" >
	                    <span class="src-only"></span>   
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a href="/" class="navbar-brand">Contacts</a>
	            </div> 
	            <div class="collapse navbar-collapse" id="collapse">
	                <ul class="nav navbar-nav">
	                    <li ng-class="home"><a href="#">Home</a></li>
	                    <li ng-class="about"><a href="#">About</a></li>
	                </ul>
	            </div>
	        </nav> 
	    </div> <!-- navigation -->

	
    <header class="row">
    	<div class="col col-sm-12">
        	<img src="/img/animals.jpg" alt="" id="logo" class="img-responsive center-block">
        </div>
    </header> <!-- header -->
    
    <div id="main">
		<div ng-view></div>
	</div>
	
	</section> <!-- container -->
	<script src="dist/main.min.js" type="text/javascript"></script>
    <!--
    <script src="js/vendors/jquery.js" type="text/javascript"></script>
    <script src="js/vendors/bootstrap.js" type="text/javascript"></script>
    <script src="js/vendors/toastr.js" type="text/javascript"></script>
    <script src="js/vendors/angular.js" type="text/javascript"></script>
    <script src="js/vendors/angular-route.js" type="text/javascript"></script>
    <script src="js/vendors/angular-resource.js" type="text/javascript"></script>
	
	<script src="js/controllers/home.js" type="text/javascript"></script>
	<script src="js/controllers/app.js" type="text/javascript"></script>
	<script src="js/services.js" type="text/javascript"></script>
	<script src="js/route.js" type="text/javascript"></script> 
    !-->
  </body>
</html>