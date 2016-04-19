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
        <title> BeQuick: The Beverage Delivery </title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "css/template1.css">
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
						<?php d_getProductCat(); ?>
                    </div>
                </div>
				<div class = "col-md-9">
					<form method = "post">
						<div id="shopping_cart" align = "right"; style = "border: 2px #f05f40 solid;">
							<span style = "font-size: 15px; padding: 5px; line-height: 30px;">
								Welcome Guest! <b>Shopping Cart -</b> Total Items: <b><?php total_items(); ?></b>  Total Price: <b><?php total_price(); ?></b>  <a href = "cart.php"> View Cart </a>
							</span>
						</div>
						<div id = "product_info" class = "row">
							<br><span>Store > <a href = "store.php?cat=2">PickUp</a> > <?php storeName(); ?> > <?php productName(); ?></span><br><br>
							<h1><?php productName(); ?></h1>
							<br>
							<div id = "left_content">
								<img src = 'admin/store_menu_images/<?php productImage(); ?>' />
							</div>
							<div id = "right_content">
								<br>
								<table>
									<tr>
										<td>Sizes&nbsp &nbsp</td>
										<td>
											<select name="size" required>
												<?php
													$product_id = $_GET['pro_id'];
													$get_price_list = "select * from all_products where StoreID = (select StoreID from all_products where p_id = '$product_id') and (p_id = '$product_id'-1 or p_id = '$product_id'-2 or p_id = '$product_id')";
													$run_price_list = mysqli_query($con, $get_price_list);
													while ($row_price_list = mysqli_fetch_array($run_price_list)){
														$pro_id = $row_price_list['p_id'];
														$pro_price = $row_price_list['p_price'];
														$pro_size = $row_price_list['p_size'];
													echo "<option value = '$pro_id'>$pro_size - $$pro_price</option>";
													}
												?>
											</select> 
										</td>
									</tr>
									<tr>
										<td>Hot/Iced&nbsp &nbsp</td>
										<td>
											<select name="hotOrCold" required>
												<option value="Hot">Hot </option>
												<option value="Iced">Iced </option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Extra Orders?&nbsp &nbsp</td>
										<td><textarea rows="4" cols="20" name="comment" placeholder="Customize your order!"></textarea></td>
									</tr>
								</table>
							</div>
							<div id = "buttons">
								<button type = "submit" class = "submitButton" name = "add_cart"><img src="include/addtocart.png" name = "add_to_cart" border="0" width="200" height="75" ></button>
								<a href = "cart.php"><img src="include/viewcart.jpg" border="0" name="view_cart" width="200" height="75" ></a>
							</div>
						</div>
					</form>
					<?php
						global $con;
						$ip = getIp();
						if(isset($_POST['add_cart'])){
							$select_id = $_POST['size'];
							$hc_input = $_POST['hotOrCold'];
							$comment_input = $_POST['comment'];
							
							$check_pro = "select * from shopping_cart where ip_add = '$ip' AND p_id = '$select_id' AND HotorCold = '$hc_input'";
							$run_check = mysqli_query($con, $check_pro);

							$get_store_id = "select StoreID from all_products where p_id = '$select_id'";
							$run_store_id = mysqli_query($con, $get_store_id);
							$row_store_id = mysqli_fetch_array($run_store_id);
							$store_id = $row_store_id['StoreID'];
							
							if(mysqli_num_rows($run_check)==0){
								$insert_pro = "insert into shopping_cart (p_id, ip_add, quantity, HotorCold, ExtraOrder) values ('$select_id', '$ip', '1', '$hc_input', '$comment_input')";
								$run_pro = mysqli_query($con, $insert_pro);
								echo "<script>window.open('d_details.php?store_id=$store_id', '_self')</script>";
							} else {
							$update_qty = "update shopping_cart set quantity = quantity + 1, ExtraOrder = concat(ExtraOrder, '$comment_input') where ip_add = '$ip' AND p_id = '$select_id' AND HotorCold = '$hc_input'";
							$run_update_qty = mysqli_query($con, $update_qty);
							echo "<script>window.open('d_details.php?store_id=$store_id', '_self')</script>";
							}
						}
					?>
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
</html><!DOCTYPE html>

<?php
	include("functions/function.php");
?>

<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width= device-width, initial-scale = 1">
        <meta name = "description" content = "Informatics Capstone Project: Template for Team Core">
        <title> BeQuick: The Beverage PickUp </title>
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
						<?php d_getProductCat(); ?>
                    </div>
                </div>
				<div class = "col-md-9">
					<?php d_cart(); ?>
					<div id="shopping_cart" align = "right"; style = "border: 2px #f05f40 solid;">
						<span style = "font-size: 15px; padding: 5px; line-height: 30px;">
							Welcome Guest! <b>Shopping Cart -</b> Total Items: <b><?php total_items(); ?></b>  Total Price: <b><?php total_price(); ?></b>  <a href = "cart.php"> View Cart </a>
						</span>
					</div>
					<br><span>Store > <a href = "store.php?cat=3">Delivery</a> > <?php storeName(); ?> > <?php productName(); ?></span><br><br>
					<h1><?php productName(); ?></h1>
					<div id = "product_info" class = "row">
						<br>
						<div id = "left_content">
							<img src = 'admin/store_menu_images/<?php productImage(); ?>' />
						</div>
						<div id = "right_content">
							<br>
							<table>
								<tr>
									<td>Sizes&nbsp &nbsp</td>
									<td>
										<select name="size">
											<option value="12 oz.">12 oz. $2.15 USD</option>
											<option value="16 oz.">16 oz. $2.75 USD</option>
											<option value="20 oz.">20 oz. $3.15 USD</option>
										</select> 
									</td>
								</tr>
								<tr>
									<td>Hot/Iced&nbsp &nbsp</td>
									<td>
										<select name="hotOrCold">
											<option value="Hot">Hot </option>
											<option value="Iced">Iced </option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Extra Orders?&nbsp &nbsp</td>
									<td><textarea rows="4" cols="30" name="comment">Customize your order..</textarea></td>
								</tr>
							</table>
						</div>
					</div>
					<div align = "center">
						<a href = "d_orders.php?add_cart=<?php productID(); ?>"><img src="include/addtocart.png" border="0" name="submit" width="200" height="75"></a>
						<a href = "cart.php"><img src="include/viewcart.jpg" border="0" name="submit" width="200" height="75" ></a>
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