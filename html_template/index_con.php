<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Welcome to BQ Service </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/creative.css" type="text/css">
</head>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"> BQ Service: Drink your Happiness! </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#starter"> Start! </a></li>
                    <li><a class="page-scroll" href="#pickup"> Pick-Up </a></li>
                    <li><a class="page-scroll" href="#delivery">Delivery</a></li>
                    <li><a href = "user_set.php"><span class = "glyphicon glyphicon-cog"></span> &nbsp<?= $fgmembersite->UserFullName(); ?>&nbsp Settings </a></li>
                    <li><a href="logout.php"><span class = "glyphicon glyphicon-log-out"></span> &nbspLog-Out </a></li>  
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="header-content" id = "starter">
            <div class="header-content-inner">
                <h1> Drink Your Happiness!</h1>
                <hr>
                <p>We deliver and schedule your needs to drink your Happiness. Start our service to make an order for Delivery & Take-Out!</p>
                <a href="#pickup" class="btn btn-primary btn-xl page-scroll"> Get Started </a>
            </div>
        </div>
    </header>
    <section class="bg-primary" id = "pickup">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"> Pick-Up Service </h2>
                    <hr class="light">
                    <p class="text-faded">Schedule your Pick-Up order where you want in Bloomington! Tired of waiting in the line..? This is the right service for you! </p>
                    <a href="pickup_con.php" class="page-scroll btn btn-default btn-xl">Make Pick-Up Order</a>
                </div>
            </div>
        </div>
    </section>
    <section id="delivery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"> Delivery Service </h2>
                    <hr class="primary">
                    <p>Schedule your Delivery order where you want in Bloomington! Need coffee in Wells Library to overcome the Final week? This is the right service for you!</p>
                    <a href="delivery_con.php" class="page-scroll btn btn-default btn-xl" id = "different_btn" >Make Delivery Order</a>
                </div>
            </div>
        </div>
    </section>
    <section class = "bg-primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <p>kang39@indiana.edu</p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
