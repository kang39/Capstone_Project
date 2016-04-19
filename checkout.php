<!DOCTYPE html>

<?php
	include("functions/function.php");
?>

<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width= device-width, initial-scale = 1">
        <meta name = "description" content = "Informatics Capstone Project: Template for Team Core">
        <title> BeQuick: Check-Out </title>
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
						<?php allStoreList(); ?>
                    </div>
                </div>
				<div class = "col-md-9">
					<div class = "row">
						<div id="shopping_cart" align = "right"; style = "border: 2px #f05f40 solid;">
							<span style = "font-size: 15px; padding: 5px; line-height: 30px;">
								Welcome Guest! <b>Shopping Cart -</b> Total Items: <b><?php total_items(); ?></b>  Total Price: <b><?php total_price(); ?></b>  <a href = "cart.php"> View Cart </a>
							</span>
						</div>
						<div id = "products_box"><br>
							<?php 
								$total_p = 0.00;
								global $con;
								$ip = getIp();
								$sel_cart = "SELECT ap.p_name, SUM(sc.quantity*ap.p_price) AS sub_total FROM shopping_cart as sc, all_products as ap WHERE sc.p_id = ap.p_id AND sc.ip_add = '$ip'";
								$run_sel_cart = mysqli_query($con, $sel_cart);
								$cart_sel_value = mysqli_fetch_array($run_sel_cart);
								$total_p = $total_p + $cart_sel_value['sub_total'];
	
							?>
							
							<h1 align = "center">Check-Out</h1>
							<h2 align = "center">Select the type of method of payment.</h2><br>
							<div align = "center">
								<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
									<!-- Identify your business so that you can collect the payments. -->
									<input type="hidden" name="business" value="bqbusiness@test.com">

									<!-- Specify a Buy Now button. -->
									<input type="hidden" name="cmd" value="_xclick">

									<!-- Specify details about the item that buyers will purchase. -->
									<input type="hidden" name="item_name" value="Total Amount of Order">
									<input type="hidden" name="amount" value="<?php echo $total_p; ?>">
									<input type="hidden" name="currency_code" value="USD">
									
									<input type="hidden" name="return" value="http://cgi.soic.indiana.edu/~kang39/capstone/paypal_success.php" >
									<input type="hidden" name="cancel_return" value="http://cgi.soic.indiana.edu/~kang39/capstone/paypal_cancel.php" >
									
									<!-- Display the payment button. -->
									<input type="image" name="submit" border="0" src="include/paynow.png" alt="PayPal - The safer, easier way to pay online">
									<img alt="" border="0" width="1" height="1"src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
								</form>
							</div>
							<br><p align = "center">Currently, PayPal is only AVAILABLE! Sorry for your inconvenience!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class = "container">
			<div class = "row row-offcanvas row-offcanvas-left">
				<hr>
				<footer>
					<div class = "row">
						<div class = "col-lg-12" align = "center">
							<p> Copyright & Copy; Team Core 2016 </p>
						</div>
					</div>
				</footer>
			</div>
        </div>
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src = "js/bootstrap.js"></script>
        <script src = "js/offcanvas.js"></script>
    </body>
</html>