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
                    <a class="navbar-brand" href="index.html"> BQ Service </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="store.php"> Store </a></li>
                        <li><a href = "register.php"><span class = "glyphicon glyphicon-user"></span> &nbspSign-Up </a></li>
                        <li><a href="login.php"><span class = "glyphicon glyphicon-log-in"></span> &nbspLogin </a></li>  
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "container">
            <div class = "row">
                <div class = "col-md-12">
                    <div class = "visible-xs">
                        <button class = "btn btn-primary btn-xs" data-toggle = "offcanvas">Hide/Show HelpBar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container">
            <div class = "row row-offcanvas row-offcanvas-left">
                <div class = "col-md-3 sidebar-offcanvas" id = "sidebar">
                    <div class = "list-group">
						<a href = 'p_details.php?store_id=1' class = 'list-group-item'>Soma</a>
					<a href = 'p_details.php?store_id=2' class = 'list-group-item'>Panera Bread PickUp</a>
					<a href = 'd_details.php?store_id=2' class = 'list-group-item'>Panera Bread Delivery</a>
				
					<a href = 'p_details.php?store_id=3' class = 'list-group-item'>Starbucks PickUp</a>
					<a href = 'd_details.php?store_id=3' class = 'list-group-item'>Starbucks Delivery</a>
				<a href = 'd_details.php?store_id=4' class = 'list-group-item'>Bub's Burger</a><a href = 'd_details.php?store_id=5' class = 'list-group-item'>McAlister's Deli</a><a href = 'p_details.php?store_id=6' class = 'list-group-item'>The Chocolate Moose</a>
					<a href = 'p_details.php?store_id=7' class = 'list-group-item'>Stone Cutters PickUp</a>
					<a href = 'd_details.php?store_id=7' class = 'list-group-item'>Stone Cutters Delivery</a>
				
					<a href = 'p_details.php?store_id=8' class = 'list-group-item'>Red Mango PickUp</a>
					<a href = 'd_details.php?store_id=8' class = 'list-group-item'>Red Mango Delivery</a>
				<a href = 'p_details.php?store_id=9' class = 'list-group-item'>The Pour House Cafe</a>                    </div>
                </div>
							
<h1>Welcome <?php echo $_SESSION['customer_email']; ?></h1>
<h2>Your Payment was cancelled, please go to your account</h2>
<h3><a href="http://cgi.soic.indiana.edu/~team11/">Go Back to Main Page</a></h3>
<br>

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
