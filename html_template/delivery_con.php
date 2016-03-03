<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width= device-width, initial-scale = 1">
        <meta name = "description" content = "Informatics Capstone Project: Template for Team Core">
        <title> BeQuick: The Beverage Delivery </title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "css/template.css">
        <link rel = "stylesheet" href= "css/offcanvas.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"> BQ Service: Drink your Happiness! </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="pickup_con.php"> Pick-Up </a></li>
                        <li><a href="delivery_con.php">Delivery</a></li>
                        <li><a href = "#"><span class = "glyphicon glyphicon-user"> Account Settings </span></a></li>
                        <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"> Log-Out </span></a></li>
                    </li>  
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "container">
            <div class = "row">
                <div class = "col-md-12">
                    <div class = "visible-xs">
                        <button class = "btn btn-primary btn-xs" data-toggle = "offcanvas"> Toogle Lists </button>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container">
            <div class = "row row-offcanvas row-offcanvas-left">
                <div class = "col-md-3 sidebar-offcanvas" id = "sidebar">
                    <div class = "list-group">
                        <a href = "#" class = "list-group-item active"> All </a>
                        <a href = "#" class = "list-group-item"> Blu Boy Chocolate Caf챕 & Cakery </a>
                        <a href = "#" class = "list-group-item"> Bub?셲 Burgers & Ice Cream </a>
						<a href = "#" class = "list-group-item"> McAlister?셲 Deli </a>
						<a href = "#" class = "list-group-item"> Panera Bread </a>
						<a href = "#" class = "list-group-item"> Red Mango </a>
						<a href = "#" class = "list-group-item"> Scholars Inn Bakehouse </a>
						<a href = "#" class = "list-group-item"> Soma </a>
						<a href = "#" class = "list-group-item"> Starbucks </a>
						<a href = "#" class = "list-group-item"> The Chocolate Moose </a>
						
                    </div>
                </div>
               <div class = "col-md-9">
                    <div class = "row carousel-holder">
                        <div class = "col-md-12">
                            <div id = "myCarousel" class = "carousel slide" data-ride = "carousel">
                                <ol class = "carousel-indicators">
                                    <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
                                    <li data-target = "#myCarousel" data-slide-to = "1"></li>
                                    <li data-target = "#myCarousel" data-slide-to = "2"></li>
                                </ol>
                                <div class = "carousel-inner">
                                    <div class = "item active">
                                        <img class = "slide-image" src = "http://placehold.it/800x300" alt = "" width = 877.5px>
                                    </div>
                                    <div class = "item">
                                        <img class = "slide-image" src = "http://placehold.it/800x300" alt = "" width = 877.5px>
                                    </div>
                                    <div class = "item">
                                        <img class = "slide-image" src = "http://placehold.it/800x300" alt = "" width = 877.5px>
                                    </div>
                                </div>
                                <a class = "left carousel-control" href = "#myCarousel" data-slide = "prev">
                                    <span class = "glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class = "right carousel-control" href = "#myCarousel" data-slide = "next">
                                    <span class = "glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>  
                        </div>                    
                    </div>
                    <div class = "row">
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "/include/soma.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 15 Minutes </h4>
                                    <h4><a href = "#"> Soma </a></h4>
                                    <p><li>322 E Kirkwood Ave</li>
									<li>Opens at 6:30 AM</li></p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 15 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "http://placehold.it/320x150" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 16 Minutes </h4>
                                    <h4><a href = "#"> Panera Bread </a></h4>
                                    <p><li>322 S College Mall Rd</li>
									<li>Opens at 6:00 AM</li></p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 18 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "http://placehold.it/320x150" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 20 Minutes </h4>
                                    <h4><a href = "#"> Starbucks </a></h4>
                                    <p><li>110 S Indiana Ave</li>
									<li>Opens at 6:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 11 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "http://placehold.it/320x150" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 22 Minutes </h4>
                                    <h4><a href = "#"> Blu Boy Chocolate Cafe & Cakery </a></h4>
                                    <p><li>112 E Kirkwood Ave</li>
									<li>Opens at 10:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 15 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "http://placehold.it/320x150" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 24 Minutes </h4>
                                    <h4><a href = "#"> Bub's Burger & Ice Cream </a></h4>
                                    <p><li>480 N Morton St</li>
									<li>Opens at 11:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 20 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "http://placehold.it/320x150" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 22 Minutes </h4>
                                    <h4><a href = "#"> McAlister's Deli </a></h4>
                                    <p><li>2510 E 3rd St</li>
									<li>Opens at 10:30 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 16 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "http://placehold.it/320x150" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 25 Minutes </h4>
                                    <h4><a href = "#"> The Chocolate Moose </a></h4>
                                    <p><li>401 S Walnut St</li>
									<li>Opens at 11:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 5 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  

                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "http://placehold.it/320x150" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 26 Minutes </h4>
                                    <h4><a href = "#"> Stone Cutters Cafe & Roastery </a></h4>
                                    <p><li>919 15th St</li>
									<li>Opens at 07:30 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 23 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "http://placehold.it/320x150" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 29 Minutes </h4>
                                    <h4><a href = "#"> Red Mango </a></h4>
                                    <p><li>1793 E 10th St</li>
									<li>Opens at 12:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 31 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class = "container">
            <hr>
            <footer>
                <div class = "row">
                    <div class = "col-lg-12" align = "center">
                        <p> Copyright & Copy; Team Core 2016 </p>                    
                    </div>
                </div>
            </footer>
        </div>
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src = "js/bootstrap.js"></script>
        <script src = "js/offcanvas.js"></script>
    </body>
</html>
