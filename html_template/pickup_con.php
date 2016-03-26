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
        <title> BeQuick: The Beverage Pick-Up </title>
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
                        <li><a href = "user_set.php"><span class = "glyphicon glyphicon-cog"></span> &nbsp<?= $fgmembersite->UserFullName(); ?>&nbsp Settings </a></li>
                        <li><a href="logout.php"><span class = "glyphicon glyphicon-log-out"></span> &nbspLog-Out </a></li>  
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
                        <a href = "#" class = "list-group-item"> Bloomington Bagel Co </a>
                        <a href = "#" class = "list-group-item"> Blu Boy Chocolate Cafe & Cakery </a>
						<a href = "#" class = "list-group-item"> Red Mango </a>
						<a href = "#" class = "list-group-item"> Panera Bread </a>
						<a href = "#" class = "list-group-item"> Scholars Inn Bakehouse </a>
						<a href = "soma_con.php" class = "list-group-item"> Soma </a>
						<a href = "#" class = "list-group-item"> Starbucks </a>
						<a href = "#" class = "list-group-item"> The Chocolate Moose </a>
						<a href = "#" class = "list-group-item"> The Pour House Cafe </a>
						
                    </div>
                </div>
                <div class = "col-md-9">
					<a href="#" id="get_location">Get location</a>
				<div id="map">
					<iframe id="google_map" width="850" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com?output=embed"></iframe>
				</div>
				<script>
				var c = function(pos) {
					var lat = pos.coords.latitude,
					long = pos.coords.longitude,
					acc = pos.coords.accuracy,
					coords = lat + ', ' + long;
				
					document.getElementById('google_map').setAttribute('src', 'https://maps.google.com/?q=' + coords + '0&z=16&output=embed');
				}
		
				var e = function(error) {
					if (error.code === 1) {
						alert('Unable to get location');
					}
				}	
		
				document.getElementById('get_location').onclick = function() {
					navigator.geolocation.getCurrentPosition(c, e, {
						enableHighAccuracy: true,
					});
					return false;
				}
				</script>
				
				
				
				<br></br>
                    <div class = "row">
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <a href = "http://cgi.soic.indiana.edu/~team11/soma.html"><img src = "include/soma.jpg" alt = ""></a>
                                <div class = "caption">
                                    <h4 class = "pull-right"> 5 Minutes </h4>
                                    <h4><a href = "soma_con.php"> Soma </a></h4>
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
                                <img src = "include/thepourhousecafe.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 6 Minutes </h4>
                                    <h4><a href = "#"> The Pour House Cafe </a></h4>
                                    <p><li>314 E Kirkwood Ave</li>
									<li>Opens at 8:00 AM</li></p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 12 reviews </p>
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
                                <img src = "include/starbucks.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 8 Minutes </h4>
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
                                <img src = "include/bluboy.png" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 11 Minutes </h4>
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
                                <img src = "include/redmango.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 13 Minutes </h4>
                                    <h4><a href = "#"> Red Mango </a></h4>
                                    <p><li>1793 E 10th St</li>
									<li>Opens at 12:00 PM</li> </p>
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
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/ChocoMoose.png" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 16 Minutes </h4>
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
                                <img src = "include/panerabread.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 20 Minutes </h4>
                                    <h4><a href = "#"> Panera Bread </a></h4>
                                    <p><li>322 S College Mall Rd</li>
									<li>Opens at 06:00 AM</li> </p>
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
                                <img src = "include/scholarsinnbakehouse.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 23 Minutes </h4>
                                    <h4><a href = "#"> Scholars Inn Bakehouse </a></h4>
                                    <p><li>125 N College Ave</li>
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
                                <img src = "include/bloomingtonbagelco.gif" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 29 Minutes </h4>
                                    <h4><a href = "#"> Bloomington Bagel Co </a></h4>
                                    <p><li>913 S College Mall Rd</li>
									<li>Opens at 06:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 3 reviews </p>
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