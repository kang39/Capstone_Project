<!DOCTYPE html>
<?php
	include("includes/db_connect.php");
?>

<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width= device-width, initial-scale = 1">
        <meta name = "description" content = "Informatics Capstone Project: Template for Team Core">
        <title> BeQuick: Stores Add Page </title>
        <link rel = "stylesheet" href = "../css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/template.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<script>tinymce.init({ selector:'textarea' });</script>
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
                    <a class="navbar-brand" href="index.php"> BQ Service </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="store.html"> Add Stores </a></li>
                        <li><a href = "register.php"><span class = "glyphicon glyphicon-user"></span> &nbspSign-Up </a></li>
                        <li><a href="login.php"><span class = "glyphicon glyphicon-log-in"></span> &nbspLogin </a></li>  
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "container">
			<form action = "insert_stores.php" method = "post" enctype = "multipart/form-data" >
				<table align = "center" width = "700" border = "2">
					<tr align = "center">
						<td colspan = "7"><h2> Insert New Store Here </h2></td>
					</tr>
					<tr>
						<td align = "right"><b>Store Name</b></td>
						<td><input type = "text" name = "store_name" size = "50" required /></td>
					</tr>
					<tr>
						<td align = "right"><b>Service Available</b></td>
						<td>
							<select name = "service_available" required>
								<option>Select Service</option>
								<option value = "2">PickUp Only</option>
								<option value = "3">Delivery Only</option>
								<option	value = "4">PickUp & Delivery</option>
							</select>
						</td>
					</tr>
					<tr>
						<td align = "right"><b>Service Stars</b></td>
						<td>
							<select name = "service_stars" required>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td align = "right"><b>Service Reviews</b></td>
						<td><input type = "number" name = "service_reviews" required /></td>
					</tr>
					<tr>
						<td align = "right"><b>Store Logo</b></td>
						<td><input type = "file" name = "store_logo_image" required /></td>
					</tr>
					<tr align = "center">
						<td colspan = "7"><input type = "submit" name = "insert_post" value = "Insert Now"/></td>
					</tr>
				</table>
			</form>
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
<?php
	if(isset($_POST['insert_post'])){
		//getting the text data from the fields
		$store_name = $_POST['store_name'];
		$store_service = $_POST['service_available'];
		$store_stars = $_POST['service_stars'];
		$store_reviews = $_POST['service_reviews'];
		
		//getting the image from the field
		$store_logo = $_FILES['store_logo_image']['name'];
		$store_logo_tmp = $_FILES['store_logo_image']['tmp_name'];
		
		move_uploaded_file($store_logo_tmp, "store_logo_images/$store_logo");
		
		$insert_store = "insert into stores (StoreName, ServicePossible, ServiceStars, ServiceReviews, StoreLogoImage) values ('$store_name', '$store_service', '$store_stars', '$store_reviews', '$store_logo')";
		
		$run_insert_store = mysqli_query($con, $insert_store);
		
		if($run_insert_store){
			echo "
				<script>alert('Store has been inserted!')</script>
				<script>window.open('insert_stores.php', '_self')</script>
			";
		}
	}

?>