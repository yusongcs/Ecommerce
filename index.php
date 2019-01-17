<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<style>


		</style>

		<title>My Online Shop</title>
		
		
		<link rel="stylesheet" href="styles/cssmenu/styles.css"/>
		<link rel="stylesheet" href="styles/csssidemenu/styles.css"/>
		<link rel="stylesheet" href="styles/btn.css"/>
		<link rel="stylesheet" href="styles/style.css"/>
			
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	

		
		<!--Navigation Bar starts-->
		<div id ="cssmenu">
			
			<ul >
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				
				<li><a href="cart.php">Shopping Cart</a></li>
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ > 
					<input type="submit" name="search" value="Search" class="btn" />
				</form>
			
			</ul>

		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->

		<div class="content_wrapper">
		
			<div id="sidemenu">
			
				
				<div>Categories</div>
				<ul id = "cats">
				
				<?php getCats(); ?>
				
				</ul>
				
				<div>Brands</div>
				
				<ul id = "cats">
					
					<?php getBrands(); ?>
				
				</ul>
			
			</div>
			
			<div id="content_area">
			
				<?php cart(); ?>
			
				<div id="shopping_cart"> 
					
					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					<b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to Cart</a>
					
					
					<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php' style='color:orange;'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
					
					
					
					</span>
				</div>
			
				<div id="products_box">
				
				<?php getPro(); ?>
				<?php getCatPro(); ?>
				<?php getBrandPro(); ?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->

	</div> 

</body>
</html>