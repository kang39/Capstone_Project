<?php
	//----------------------------HELPER FUNCTION---------------------------//
	//------------------------HELPER FUNCTION STARTS------------------------//
	
	$con = mysqli_connect("db.soic.indiana.edu", "caps16_team11", "my+sql=caps16_team11", "caps16_team11");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}	

	//getting the user IP address
	function getIp() {
		$ip = $_SERVER['REMOTE_ADDR'];
	 
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
	 
		return $ip;
	}	
	//--------------------------HELPER FUNCTION ENDS------------------------//
	
	//---------------------------STORE PAGE FUNCTION---------------------------//
	//------------------------STORE PAGE FUNCTION STARTS-----------------------//
	
	//getting the categories
	function getServiceCat(){
		global $con;
		$get_cats = "select * from service_categories";
		$run_cats = mysqli_query($con, $get_cats);
		while ($row_cats = mysqli_fetch_array($run_cats)){
			$service_id = $row_cats['ServiceID'];
			$service_title = $row_cats['ServiceName'];
		echo "<a href = 'store.php?cat=$service_id' class = 'list-group-item'>$service_title</a>";
		}
	}
	
	//Getting store information based on the database to show the page
	function getStore(){
		if(!isset($_GET['cat'])){
			global $con;
			$get_store = "select * from stores";
			$run_get_store = mysqli_query($con, $get_store);
			
			while($row_store = mysqli_fetch_array($run_get_store)){
				$store_id = $row_store['StoreID'];
				$store_name = $row_store['StoreName'];
				$service_available = $row_store['ServicePossible'];
				$service_star = $row_store['ServiceStars'];
				$service_reviews = $row_store['ServiceReviews'];
				$service_logo = $row_store['StoreLogoImage'];
				$count_store = mysqli_num_rows($run_get_store);
				
				$star_code = "";
				$star_full = "<span class = 'glyphicon glyphicon-star'></span>";
				$star_empty = "<span class = 'glyphicon glyphicon-star-empty'></span>";
			
				for($i = 1; $i <= 5; $i++){
					if($i <= $service_star){
						$star_code = $star_code.$star_full;
					} else{
						$star_code = $star_code.$star_empty;
					}
				}
				
				if ($service_available == 2){
					echo "
					<div class = 'col-sm-4 col-lg-4 col-md-4'>
						<div class = 'thumbnail'>
							<img src = 'admin/store_logo_images/$service_logo' />
							<div class = 'caption'>
								<center><h4>$store_name</h4></center>
								<a href = 'p_details.php?store_id=$store_id'><div class = 'button'>PICK-UP</div></a>
							</div>
							<div align = 'center'><span>Distances from You: <b><span id = 'distance$store_id'></span></b></span></div>
							<div class = 'ratings'>
								<p class = 'pull-right'> $service_reviews reviews </p>
								<p>$star_code</p>
 							</div>
						</div>
					</div>";
				} elseif ($service_available == 3){
					echo "
					<div class = 'col-sm-4 col-lg-4 col-md-4'>
						<div class = 'thumbnail'>
							<img src = 'admin/store_logo_images/$service_logo' /'>
							<div class = 'caption'>
								<center><h4>$store_name</h4></center>
								<a href = 'd_details.php?store_id=$store_id'><div class = 'button'>DELIVERY</div></a>
							</div>
							<div align = 'center'><span>Distances from You: <b><span id = 'distance$store_id'></span></b></span></div>
							<div class = 'ratings'>
								<p class = 'pull-right'> $service_reviews reviews </p>
								<p>$star_code</p>
							</div>
						</div>
					</div>";
				} elseif ($service_available == 4){
					echo "
					<div class = 'col-sm-4 col-lg-4 col-md-4'>
						<div class = 'thumbnail'>
							<img src = 'admin/store_logo_images/$service_logo' />
							<div class = 'caption'>
								<center><h4>$store_name</h4></center>
								<div class = 'two_buttons'>
									<a href = 'p_details.php?store_id=$store_id'><div class='button1'>PICK-UP</div></a>
									<a href = 'd_details.php?store_id=$store_id'><div class='button2'>DELIVERY</div></a>
								</div>
							</div>
							<div align = 'center'><span>Distances from You: <b><span id = 'distance$store_id'></span></b></span></div>
							<div class = 'ratings'>
								<p class = 'pull-right'> $service_reviews reviews </p>
								<p>$star_code</p>
							</div>
						</div>
					</div>";
				}
			}
		}
	}
	
	//Getting stores by categories with available service
	function getStoreService(){
		if(isset($_GET['cat'])){
			$service_id = $_GET['cat'];
			global $con;
			
			if ($service_id == 1){
				$get_service_store = "select * from stores";
			} else{
				$get_service_store = "select * from stores where ServicePossible = '$service_id'";
			}
			$run_service_store = mysqli_query($con, $get_service_store);
			$count_store = mysqli_num_rows($run_service_store);
			
			if($count_store == 0){
				echo "<h2 align = 'center'>There is no available product in this category!</h2><br><br>";
			}
			
			while($row_service_store = mysqli_fetch_array($run_service_store)){
				$store_id = $row_service_store['StoreID'];
				$store_name = $row_service_store['StoreName'];
				$service_available = $row_service_store['ServicePossible'];
				$service_star = $row_service_store['ServiceStars'];
				$service_reviews = $row_service_store['ServiceReviews'];
				$service_logo = $row_service_store['StoreLogoImage'];
				
				$star_code = "";
				$star_full = "<span class = 'glyphicon glyphicon-star'></span>";
				$star_empty = "<span class = 'glyphicon glyphicon-star-empty'></span>";
			
				for($i = 1; $i <= 5; $i++){
					if($i <= $service_star){
						$star_code = $star_code.$star_full;
					} else{
						$star_code = $star_code.$star_empty;
					}
				}
				
				if ($service_available == 2){
					echo "
					<div class = 'col-sm-4 col-lg-4 col-md-4'>
						<div class = 'thumbnail'>
							<img src = 'admin/store_logo_images/$service_logo' />
							<div class = 'caption'>
								<center><h4>$store_name</h4></center>
								<a href = 'p_details.php?store_id=$store_id'><div class = 'button'>PICK-UP</div></a>
								<div id = 'distance$store_id'></div>
							</div>
							<div class = 'ratings'>
								<p class = 'pull-right'> $service_reviews reviews </p>
								<p>$star_code</p>
							</div>
						</div>
					</div>";
				} elseif ($service_available == 3){
					echo "
					<div class = 'col-sm-4 col-lg-4 col-md-4'>
						<div class = 'thumbnail'>
							<img src = 'admin/store_logo_images/$service_logo' />
							<div class = 'caption'>
								<center><h4>$store_name</h4></center>
								<a href = 'd_details.php?store_id=$store_id'><div class = 'button'>DELIVERY</div></a>
								<div id = 'distance$store_id'></div>
							</div>
							<div class = 'ratings'>
								<p class = 'pull-right'> $service_reviews reviews </p>
								<p>$star_code</p>
							</div>
						</div>
					</div>";
				} elseif ($service_available == 4){
					echo "
					<div class = 'col-sm-4 col-lg-4 col-md-4'>
						<div class = 'thumbnail'>
							<img src = 'admin/store_logo_images/$service_logo' />
							<div class = 'caption'>
								<center><h4>$store_name</h4></center>
								<div class = 'two_buttons'>
									<a href = 'p_details.php?store_id=$store_id'><div class='button1'>PICK-UP</div></a>
									<a href = 'd_details.php?store_id=$store_id'><div class='button2'>DELIVERY</div></a>
								</div>
								<div id = 'distance$store_id'></div>
							</div>
							<div class = 'ratings'>
								<p class = 'pull-right'> $service_reviews reviews </p>
								<p>$star_code</p>
							</div>
						</div>
					</div>";
				}
			}
		}
	}
	//------------------------STORE PAGE FUNCTION ENDS-------------------------//
	
	
	//---------------------------PICKUP PAGE FUNCTION--------------------------//
	//-----------------------PICKUP PAGE FUNCTION STARTS-----------------------//
	
	//Getting the store name to show in the product menu
	function storeName(){
		if(isset($_GET['store_id'])){
			$store_id = $_GET['store_id'];
			global $con;
			$get_store_names = "select StoreName from stores where StoreID = '$store_id'";
			$run_store_names = mysqli_query($con, $get_store_names);
			$row_store = mysqli_fetch_array($run_store_names);
			$store_name = $row_store['StoreName'];
			echo "$store_name";
		} elseif (isset($_GET['p_cat'])){
			$product_cat_id = $_GET['p_cat'];
			global $con;
			$get_store_names = "select s.StoreName from stores as s, all_categories as ac where s.StoreID = ac.StoreID AND c_id = '$product_cat_id'";
			$run_store_names = mysqli_query($con, $get_store_names);
			$row_store = mysqli_fetch_array($run_store_names);
			$store_name = $row_store['StoreName'];
			echo "$store_name";
		} else{
			$product_id = $_GET['pro_id'];
			global $con;
			$get_store_names = "select s.StoreName from stores as s, all_products as ap where s.StoreID = ap.StoreID AND ap.p_id = '$product_id'";
			$run_store_names = mysqli_query($con, $get_store_names);
			$row_store = mysqli_fetch_array($run_store_names);
			$store_name = $row_store['StoreName'];
			echo "$store_name";
		}
	}
	
	//getting the categories
	function p_getProductCat(){
		if(isset($_GET['store_id'])){
			$store_id = $_GET['store_id'];
			global $con;
			$get_pro_cats = "select * from all_categories where StoreID = '$store_id'";
			$run_pro_cats = mysqli_query($con, $get_pro_cats);
			while ($row_cats = mysqli_fetch_array($run_pro_cats)){
				$category_id = $row_cats['c_id'];
				$category_name = $row_cats['c_name'];
				echo "<a href = 'p_details.php?p_cat=$category_id' class = 'list-group-item'>$category_name</a>";
			}
		} elseif (isset($_GET['p_cat'])){
			$product_cat_id = $_GET['p_cat'];
			global $con;
			$get_pro_cats = "select c_id, c_name from all_categories where storeID = (select storeID from all_categories where c_id = '$product_cat_id')";
			$run_pro_cats = mysqli_query($con, $get_pro_cats);
			while ($row_cats = mysqli_fetch_array($run_pro_cats)){
				$category_id = $row_cats['c_id'];
				$category_name = $row_cats['c_name'];
				echo "<a href = 'p_details.php?p_cat=$category_id' class = 'list-group-item'>$category_name</a>";
			}
		} else{
			$product_id = $_GET['pro_id'];
			global $con;

			$get_pro_cats = "select c_id, c_name from all_categories where storeID = (select storeID from all_products where p_id = '$product_id')";
			$run_pro_cats = mysqli_query($con, $get_pro_cats);
			while ($row_cats = mysqli_fetch_array($run_pro_cats)){
				$category_id = $row_cats['c_id'];
				$category_name = $row_cats['c_name'];
				echo "<a href = 'p_details.php?p_cat=$category_id' class = 'list-group-item'>$category_name</a>";
			}
		}
	}
	
	//Getting product menu from the PICKUP Page
	function p_productMenu(){
		if(isset($_GET['store_id'])){
			$store_id = $_GET['store_id'];
			global $con;
			$get_products = "select * from all_products where StoreID = '$store_id' AND ServiceID = 2";
			$run_get_products = mysqli_query($con, $get_products);
			$price_info = "";
			
			while($row_product = mysqli_fetch_array($run_get_products)){
				$product_id = $row_product['p_id'];
				$product_name = $row_product['p_name'];
				$product_price = $row_product['p_price'];
				$product_image = $row_product['p_image'];

				if ($product_id % 3 == 0){
					$price_info = $price_info. " $". $product_price;
					echo "
					<a href = 'p_orders.php?pro_id=$product_id'>
						<div class = 'col-sm-4 col-lg-4 col-md-4'>
							<div class = 'thumbnail'>
								<img src = 'admin/store_menu_images/$product_image' />
								<div align = 'center'; class = 'caption'>
									<h4>$product_name</h4>
									<h5>$price_info</h5>
								</div>
							</div>
						</div>
					</a>";
					$price_info = "";
				} else{
					$price_info = $price_info. " $". $product_price. " / ";
				}
			}
		} else{
			$product_cat_id = $_GET['p_cat'];
			global $con;
			
			$get_c_name = "select c_name from all_categories where c_id = '$product_cat_id'";
			$run_c_name = mysqli_query($con, $get_c_name);
			$row_c_name = mysqli_fetch_array($run_c_name);
			
			if($row_c_name['c_name'] == 'All'){
				$get_StoreID = "select * from all_products where StoreID = (select StoreID from all_categories where c_id = '$product_cat_id') AND ServiceID = 2";
				$run_StoreID = mysqli_query($con, $get_StoreID);
				
				$price_info = "";
			
				while($row_pro_cat = mysqli_fetch_array($run_StoreID)){
					$product_id = $row_pro_cat['p_id'];
					$store_id = $row_pro_cat['StoreID'];
					$product_name = $row_pro_cat['p_name'];
					$product_price = $row_pro_cat['p_price'];
					$product_image = $row_pro_cat['p_image'];
					
					if ($product_id % 3 == 0){
						$price_info = $price_info. " $". $product_price;
						echo "
						<a href = 'p_orders.php?pro_id=$product_id'>
							<div class = 'col-sm-4 col-lg-4 col-md-4'>
								<div class = 'thumbnail'>
									<img src = 'admin/store_menu_images/$product_image' />
									<div align = 'center'; class = 'caption'>
										<h4>$product_name</h4>
										<h5>$price_info</h5>
									</div>
								</div>
							</div>
						</a>";
						$price_info = "";	
					} else{
						$price_info = $price_info. " $". $product_price. " / ";
					}
				}
			} else{
				$get_pro_cat = "select * from all_products where p_category = '$product_cat_id' AND ServiceID = 2";
				$run_pro_cat = mysqli_query($con, $get_pro_cat);
				$count_pro_cat = mysqli_num_rows($run_pro_cat);
				
				if($count_pro_cat == 0){
					echo "<h2 align = 'center'>There is no available product in this category!</h2><br><br>";
				}
				
				$price_info = "";
				
				while($row_pro_cat = mysqli_fetch_array($run_pro_cat)){
					$product_id = $row_pro_cat['p_id'];
					$store_id = $row_pro_cat['StoreID'];
					$product_name = $row_pro_cat['p_name'];
					$product_price = $row_pro_cat['p_price'];
					$product_image = $row_pro_cat['p_image'];
					
					if ($product_id % 3 == 0){
						$price_info = $price_info. " $". $product_price;
						echo "
						<a href = 'p_orders.php?pro_id=$product_id'>
							<div class = 'col-sm-4 col-lg-4 col-md-4'>
								<div class = 'thumbnail'>
									<img src = 'admin/store_menu_images/$product_image' />
									<div align = 'center'; class = 'caption'>
										<h4>$product_name</h4>
										<h5>$price_info</h5>
									</div>
								</div>
							</div>
						</a>";
						$price_info = "";	
					} else{
						$price_info = $price_info. " $". $product_price. " / ";
					}
				}
			}
		}
	}
	//-----------------------PICKUP PAGE FUNCTION ENDS-------------------------//
	
	
	//-------------------------DELIVERY PAGE FUNCTION--------------------------//
	//---------------------DELIVERY PAGE FUNCTION STARTS-----------------------//
	
	//getting the categories
	function d_getProductCat(){
		if(isset($_GET['store_id'])){
			$store_id = $_GET['store_id'];
			global $con;
			$get_pro_cats = "select * from all_categories where StoreID = '$store_id'";
			$run_pro_cats = mysqli_query($con, $get_pro_cats);
			while ($row_cats = mysqli_fetch_array($run_pro_cats)){
				$category_id = $row_cats['c_id'];
				$category_name = $row_cats['c_name'];
				echo "<a href = 'd_details.php?p_cat=$category_id' class = 'list-group-item'>$category_name</a>";
			}
		} elseif(isset($_GET['p_cat'])){
			$product_cat_id = $_GET['p_cat'];
			global $con;
			$get_pro_cats = "select c_id, c_name from all_categories where storeID = (select storeID from all_categories where c_id = '$product_cat_id')";
			$run_pro_cats = mysqli_query($con, $get_pro_cats);
			while ($row_cats = mysqli_fetch_array($run_pro_cats)){
				$category_id = $row_cats['c_id'];
				$category_name = $row_cats['c_name'];
				echo "<a href = 'd_details.php?p_cat=$category_id' class = 'list-group-item'>$category_name</a>";
			}
		} else{
			$product_id = $_GET['pro_id'];
			global $con;
			$get_pro_cats = "select c_id, c_name from all_categories where storeID = (select storeID from all_products where p_id = '$product_id')";
			$run_pro_cats = mysqli_query($con, $get_pro_cats);
			while ($row_cats = mysqli_fetch_array($run_pro_cats)){
				$category_id = $row_cats['c_id'];
				$category_name = $row_cats['c_name'];
				echo "<a href = 'd_details.php?p_cat=$category_id' class = 'list-group-item'>$category_name</a>";
			}
		}
	}
	
	//Getting product menu from the Delivery Page
	function d_productMenu(){
		if(isset($_GET['store_id'])){
			$store_id = $_GET['store_id'];
			global $con;
			$get_products = "select * from all_products where StoreID = '$store_id' AND ServiceID = 3";
			$run_get_products = mysqli_query($con, $get_products);
			$price_info = "";
			
			while($row_product = mysqli_fetch_array($run_get_products)){
				$product_id = $row_product['p_id'];
				$product_name = $row_product['p_name'];
				$product_price = $row_product['p_price'];
				$product_image = $row_product['p_image'];

				if ($product_id % 3 == 0){
					$price_info = $price_info. " $". $product_price;
					echo "
					<a href = 'd_orders.php?pro_id=$product_id'>
						<div class = 'col-sm-4 col-lg-4 col-md-4'>
							<div class = 'thumbnail'>
								<img src = 'admin/store_menu_images/$product_image' />
								<div align = 'center'; class = 'caption'>
									<h4>$product_name</h4>
									<h5>$price_info</h5>
								</div>
							</div>
						</div>
					</a>";
					$price_info = "";
				} else{
					$price_info = $price_info. " $". $product_price. " / ";
				}
			}
		} else{
			$product_cat_id = $_GET['p_cat'];
			global $con;
			
			$get_c_name = "select c_name from all_categories where c_id = '$product_cat_id'";
			$run_c_name = mysqli_query($con, $get_c_name);
			$row_c_name = mysqli_fetch_array($run_c_name);
			
			if($row_c_name['c_name'] == 'All'){
				$get_StoreID = "select * from all_products where StoreID = (select StoreID from all_categories where c_id = '$product_cat_id') AND ServiceID = 3";
				$run_StoreID = mysqli_query($con, $get_StoreID);
				
				$price_info = "";
			
				while($row_pro_cat = mysqli_fetch_array($run_StoreID)){
					$product_id = $row_pro_cat['p_id'];
					$store_id = $row_pro_cat['StoreID'];
					$product_name = $row_pro_cat['p_name'];
					$product_price = $row_pro_cat['p_price'];
					$product_image = $row_pro_cat['p_image'];
					
					if ($product_id % 3 == 0){
						$price_info = $price_info. " $". $product_price;
						echo "
						<a href = 'd_orders.php?pro_id=$product_id'>
							<div class = 'col-sm-4 col-lg-4 col-md-4'>
								<div class = 'thumbnail'>
									<img src = 'admin/store_menu_images/$product_image' />
									<div align = 'center'; class = 'caption'>
										<h4>$product_name</h4>
										<h5>$price_info</h5>
									</div>
								</div>
							</div>
						</a>";
						$price_info = "";	
					} else{
						$price_info = $price_info. " $". $product_price. " / ";
					}
				}
			} else{
				$get_pro_cat = "select * from all_products where p_category = '$product_cat_id' AND ServiceID = 3";
				$run_pro_cat = mysqli_query($con, $get_pro_cat);
				$count_pro_cat = mysqli_num_rows($run_pro_cat);
				
				if($count_pro_cat == 0){
					echo "<h2 align = 'center'>There is no available product in this category!</h2><br><br>";
				}
				
				$price_info = "";
				
				while($row_pro_cat = mysqli_fetch_array($run_pro_cat)){
					$product_id = $row_pro_cat['p_id'];
					$store_id = $row_pro_cat['StoreID'];
					$product_name = $row_pro_cat['p_name'];
					$product_price = $row_pro_cat['p_price'];
					$product_image = $row_pro_cat['p_image'];
					
					if ($product_id % 3 == 0){
						$price_info = $price_info. " $". $product_price;
						echo "
						<a href = 'd_orders.php?pro_id=$product_id'>
							<div class = 'col-sm-4 col-lg-4 col-md-4'>
								<div class = 'thumbnail'>
									<img src = 'admin/store_menu_images/$product_image' />
									<div align = 'center'; class = 'caption'>
										<h4>$product_name</h4>
										<h5>$price_info</h5>
									</div>
								</div>
							</div>
						</a>";
						$price_info = "";	
					} else{
						$price_info = $price_info. " $". $product_price. " / ";
					}
				}
			}
		}
	}
	//-----------------------DELIVERY PAGE FUNCTION ENDS-----------------------//
	
	
	//--------------------------P.ORDERS PAGE FUNCTION-------------------------//
	//-------------------------P.ORDERS FUNCTION STARTS------------------------//
	
	function productName(){
		if(isset($_GET['pro_id'])){
			$product_id = $_GET['pro_id'];
			global $con;
			$get_product_name = "select p_name from all_products where p_id = '$product_id'";
			$run_product_name = mysqli_query($con, $get_product_name);
			$row_product_name = mysqli_fetch_array($run_product_name);
			$product_name = $row_product_name['p_name'];
			echo "$product_name";
		}
	}
	
	function productImage(){
		if(isset($_GET['pro_id'])){
			global $con;
			$product_id = $_GET['pro_id'];
			
			$get_pro_image = "select p_image from all_products where p_id = '$product_id'";
			$run_pro_image = mysqli_query($con, $get_pro_image);
			$row_pro_image = mysqli_fetch_array($run_pro_image);
			$product_image = $row_pro_image['p_image'];
			echo "$product_image";
		}
	}
	
	function productID(){
		if(isset($_GET['pro_id'])){
			$product_id = $_GET['pro_id'];
			echo "$product_id";
		}
	}
	
	//getting the total added items
	function total_items(){
		global $con;
		$ip = getIp();
		$total_qty = 0;
		$get_items = "select * from shopping_cart where ip_add = '$ip'";
		$run_items = mysqli_query($con, $get_items);
		while ($all_qty = mysqli_fetch_array($run_items)){
			$cart_qty = array($all_qty['quantity']);
			$sum_cart_qty = array_sum($cart_qty);
			$total_qty += $sum_cart_qty;
		}
		echo $total_qty;
	}
	
	//getting the total price of the items in the cart
	function total_price(){
		$total_p = 0.00;
		global $con;
		$ip = getIp();
		$sel_cart = "SELECT SUM(sc.quantity*ap.p_price) AS sub_total FROM shopping_cart as sc, all_products as ap WHERE sc.p_id = ap.p_id AND sc.ip_add = '$ip'";
		$run_sel_cart = mysqli_query($con, $sel_cart);
		$cart_sel_value = mysqli_fetch_array($run_sel_cart);
		$total_p = $total_p + $cart_sel_value['sub_total'];
		echo "$" . $total_p;
	}	
	//------------------------P.ORDERS PAGE FUNCTION ENDS----------------------//

	
	//----------------------------CART PAGE FUNCTION---------------------------//
	//------------------------CART PAGE FUNCTION STARTS------------------------//
	
	function allStoreList(){
		global $con;
		$get_store_list = "select * from stores";
		$run_store_list = mysqli_query($con, $get_store_list);
		while ($row_store = mysqli_fetch_array($run_store_list)){
			$store_id = $row_store['StoreID'];
			$store_name = $row_store['StoreName'];
			$store_servicePossible = $row_store['ServicePossible'];
			
			if ($store_servicePossible == 2){
				echo "<a href = 'p_details.php?store_id=$store_id' class = 'list-group-item'>$store_name</a>";
			} elseif ($store_servicePossible == 3){
				echo "<a href = 'd_details.php?store_id=$store_id' class = 'list-group-item'>$store_name</a>";
			} else{
				echo "
					<a href = 'p_details.php?store_id=$store_id' class = 'list-group-item'>$store_name PickUp</a>
					<a href = 'd_details.php?store_id=$store_id' class = 'list-group-item'>$store_name Delivery</a>
				";
			}
		}
	}
	//--------------------------CART PAGE FUNCTION ENDS------------------------//
?>