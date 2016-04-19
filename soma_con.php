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
        <link rel = "stylesheet" type = "text/css" href = "css/template2.css">
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
                        <li><a href="pickup.html"> Pick-Up </a></li>
                        <li><a href="delivery.html">Delivery</a></li>
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
                        <a href = "#" class = "list-group-item"> Roaster-Featured Coffee </a>
                        <a href = "#" class = "list-group-item"> African Coffee </a>
						<a href = "#" class = "list-group-item"> Pacific Island Coffee </a>
						<a href = "#" class = "list-group-item"> New World (Americas) Coffees </a>	
						
                    </div>
                </div>
               <div class = "col-md-9">
                    <div class = "row">
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/roastcoffee.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "Mulawi_con.php"> Mulawi </a></h4></center>
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/kenyaaa.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "Kenya.html"> Kenya AA </a></h4></center>
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/ethiopia.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Ethiopia Sidamo </a></h4></center>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/tanzania.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Tanzania Peaberry </a></h4></center>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/organic.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Organic Ethiopia Yrgacheffe </a></h4></center>
                                </div>
                            </div>
                        </div>                          
						<div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/ethiopianatural.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Ethiopia Natural Process Sidamo </a></h4></center>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/organicfair.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Organic/Fair Trade French Sumatra </a></h4></center>
                                </div>
                            </div>
                        </div>  

                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/gayoland.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Organic/Fair Trade Sumatra Gayoland </a></h4></center>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/mandheling.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Organic/Fair Trade Sumatra Mandheling Permata Gayo </a></h4></center>
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/papua.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Papua New Guinea Goroka A </a></h4></center>
                                </div>
                            </div>
                        </div>  
						
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/brazil.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Brazil Natural Process </a></h4></center>
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/colombia.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Organic/Fair Trade Colombia Supremo </a></h4></center>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/guatemala.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Organic/Fair Trade Guatemala </a></h4></center>
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/elsalvador.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> El Salvador San Rita </a></h4></center>
                                </div>
                            </div>
                        </div>  
						
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/jamaica.png" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Jamaica Blue Mountain Peaberry Blend </a></h4></center>
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/haitian.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Fair Trade Haitian Blue Pine </a></h4></center>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/mexico.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Organic/Fair Trade Mexico Altura </a></h4></center>
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/peru.png" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Organic/Fair Trade Peru </a></h4></center>
                                </div>
                            </div>
                        </div>  
						
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/huehuetenango.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Oranic/Fair Trade Guatamala Huehuetenango SHB </a></h4></center>
                                </div>
                            </div>
                        </div>  						

                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/ancora.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> Brazil Minas de Gervais Pocos de Caldas </a></h4></center>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/micro.jpg" alt = "">
                                <div class = "caption">
                                    <center><h4><a href = "#"> El Salvador (Micro lot "Brasil") </a></h4></center>
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
