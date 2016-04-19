<!DOCTYPE html>
<?php
session_start();
?>

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
				<div class = "col-md-9">
					<div class = "row">
						<?php
						include("functions/function.php");
						include("includes/db_connect.php");
	
						$total_p = 0.00;
						global $con;
						$ip = getIp();
						$sel_cart = "SELECT SUM(sc.quantity*ap.p_price) AS sub_total FROM shopping_cart as sc, all_products as ap WHERE sc.p_id = ap.p_id AND sc.ip_add = '$ip'";
						$run_sel_cart = mysqli_query($con, $sel_cart);
						$cart_sel_value = mysqli_fetch_array($run_sel_cart);
						$product_title = $cart_sel_value['p_name'];
						$total_p = $total_p + $cart_sel_value['sub_total'];
						
						//getting quantity of the product
						$get_qty = "select * from shopping_cart where p_id='$pro_id;";
						$run_qty = mysqli_query($con, $get_qty);

						$row_qty = mysqli_fetch_array($run_qty);
						$qty = $row_qty['qty'];

						if($qty==0){
							$qty=1;
						}
						else {
							$qty=$qty;
							$total = $total*$qty;
						}

						// this is about the customer
						$user = $_SESSION['customer_email'];
						$get_c = "select * from uers_info where email='$user'";
						$run_c = mysqli_query($con, $get_img);
						$row_c = mysqli_fetch_array($run_c);
						$c_id = $row_c['customer_id'];

						$amount = $_GET['amt'];
						$currency = $_GET['cc'];
						$trx_id = $_GET['tx'];

						//inserting the payment to table
						$insert_payments = "insert into payments (amount, customer_id,product_id,trx_id,currency,payment_date) values ('$c_id','$pro_id','$trx_id','$currency',NOW())";
						$run_payments = mysqli_query($con, $insert_payment);
						//inserting the order into table
						$insert_order = "insert into orders (op_id, oc_id, o_qty, order_date) values ('$pro_id','$c_id','qty',NOW())";
						$run_order = mysqli_query($con, $insert_order);
						//removing the products from cart
						$empty_cart = "delete from shopping_cart";
						$run_cart = mysqli_query($con, $insert_order);

						if($amount==$total){
							echo "<h2>Welcome:" . $_SESSION['customer_email']. "<br>". "Your Payment was successful!</h2>";
							echo "<a href='http://cgi.soic.indiana.edu/~team11/'>Go Back to Main Page</a>";
						}
						else {
							echo "<h2>Welcome Guest, Payment was failed</h2><br>";
							echo "<a href='http://cgi.soic.indiana.edu/~team11/'>Go Back to shop</a>";
						}
						?>
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
