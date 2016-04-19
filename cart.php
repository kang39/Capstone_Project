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
        <title> BeQuick: Shopping Cart </title>
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
							<h1 align = "center">< Shopping Cart ></h1>
							<form method = "post" enctype = "multipart/form-data">
								<table border = "1" width = "100%">
									<tr>
										<th align = "center" width = "8%">Remove</th>
										<th width = "37%">Product(s)</th>
										<th width = "10%">Service</th>
										<th width = "10%">Hot/Ice</th>
										<th width = "10%">Price</th>
										<th width = "10%">Quantity</th>
										<th width = "15%">Total Price</th>
									</tr>
									<?php
										$total_p = 0;
										global $con;
										$ip = getIp();
										$sel_cart = "SELECT c.p_id, HotorCold, sc.ServiceName, c.quantity, p.p_price, c.quantity*p.p_price AS sub_total, p.p_name, p.p_image FROM shopping_cart as c, all_products as p, service_categories as sc WHERE c.p_id = p.p_id AND p.ServiceID = sc.ServiceID AND c.ip_add = '$ip'";
										$run_sel_cart = mysqli_query($con, $sel_cart);
										
										while($cart_sel_value = mysqli_fetch_array($run_sel_cart)){
											$pro_id = $cart_sel_value['p_id'];
											$pro_price = $cart_sel_value['p_price'];
											$pro_hc = $cart_sel_value['HotorCold'];
											$pro_service = $cart_sel_value['ServiceName'];
											$pro_qty = $cart_sel_value['quantity'];
											$product_title = $cart_sel_value['p_name'];
											$product_image = $cart_sel_value['p_image'];
											$single_price = $cart_sel_value['sub_total'];
											$product_price = array($cart_sel_value['sub_total']);
											$values = array_sum($product_price);
											$total_p += $values;
									?>
									<tr>
										<td>
											<input type = "checkbox" name = "remove[<?php echo $pro_id; ?>]" value = "<?php echo $pro_hc; ?>"/>
										</td>
										<td id = "pro_td">
											<img src = "admin/store_menu_images/<?php echo $product_image; ?>" width = "60" height = "60" />&nbsp <?php echo $product_title; ?>
										</td>
										<td><?php echo $pro_service; ?></td>
										<td>
											<?php echo $pro_hc; ?>
											<input type = "hidden" name = "hc_li[]" value = "<?php echo $pro_hc; ?>" />
										</td>
										<td><?php echo $pro_price; ?></td>
										<td>
											<input type = "number" name = "qty_li[]" min = "1" value = "<?php echo $pro_qty; ?>" style = "width: 50px" />
											<input type = "hidden" name = "product_li[]" value = "<?php echo $pro_id; ?>" />
										</td>
										<td><?php echo "$" . $single_price; ?></td>
									</tr>
										<?php } ?>
									<tr>
										<td id = "td1" colspan = "6"><b>Sub Total:&nbsp &nbsp &nbsp &nbsp</b></td>
										<td><?php echo "$". $total_p; ?></td>
									</tr> 
									<tr>
										<td colspan = "7">
											<input type = "submit" name = "update_cart" value = "Update Cart">&nbsp &nbsp
											<input type = "submit" name = "continue" value = "Continue Shopping">&nbsp &nbsp
											<button type = "submit" name = "checkout">Check Out</button>
										</td>
									</tr>
								</table>
							</form>
							<?php 
								global $con;
								$ip = getIp();
								if(isset($_POST['update_cart'])){
									$changed_list = $_POST['product_li'];
									$temp_list = $_POST['hc_li'];
									foreach($_POST['qty_li'] as $index => $qty_ea){
										$update_qty = "update shopping_cart set quantity = '$qty_ea' where ip_add = '$ip' and p_id = '$changed_list[$index]' and HotorCold = '$temp_list[$index]'";
										$run_update_qty = mysqli_query($con, $update_qty);
										if ($run_update_qty){
											echo "<script>window.open('cart.php', '_self')</script>";
										}
									}		
								}
																
								if(isset($_POST['update_cart'])){
									foreach($_POST['remove'] as $key => $remove_id){
										$delete_product = "delete from shopping_cart where ip_add = '$ip' and p_id = '$key' and HotorCold = '$remove_id'";
										$run_delete = mysqli_query($con, $delete_product);
										}
									echo "<script>window.open('cart.php', '_self')</script>";
									}
									
								if(isset($_POST['continue'])){
									echo "<script>window.open('store.php', '_self')</script>";
								}	
								
								if(isset($_POST['checkout'])){
									echo "<script>window.open('checkout.php', '_self')</script>";
								}	
							?>
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