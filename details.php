<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>
		<!-- <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
		<script>
		        tinymce.init({selector:'textarea'});
		</script> -->
		<link rel="stylesheet" href="styles/cssmenu/styles.css"/>
		<link rel="stylesheet" href="styles/csssidemenu/styles.css"/>
		<link rel="stylesheet" href="styles/btn.css"/>
		<link rel="stylesheet" href="styles/style.css"/>
		<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/kavendish/pen/aOdopx?q=comment&limit=all&type=type-pens" />
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<style class="cp-pen-styles">html, body {
  background-color: #f0f2fa;
  font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  color: #555f77;
  -webkit-font-smoothing: antialiased;
}

input, textarea {
  outline: none;
  border: none;
  display: block;
  margin: 0;
  padding: 0;
  -webkit-font-smoothing: antialiased;
  font-family: "PT Sans", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  font-size: 1rem;
  color: #555f77;
}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #ced2db;
}
input::-moz-placeholder, textarea::-moz-placeholder {
  color: #ced2db;
}
input:-moz-placeholder, textarea:-moz-placeholder {
  color: #ced2db;
}
input:-ms-input-placeholder, textarea:-ms-input-placeholder {
  color: #ced2db;
}

p {
  line-height: 1.3125rem;
}

.comments {
  margin: 2.5rem auto 0;
  max-width: 60.75rem;
  padding: 0 1.25rem;
}

.comment-wrap {
  margin-bottom: 1.25rem;
  display: table;
  width: 100%;
  min-height: 5.3125rem;
}

.photo {
  padding-top: 0.625rem;
  display: table-cell;
  width: 3.5rem;
}
.photo .avatar {
  height: 2.25rem;
  width: 2.25rem;
  border-radius: 50%;
  background-size: contain;
}

.comment-block {
  padding: 1rem;
  background-color: #fff;
  display: table-cell;
  vertical-align: top;
  border-radius: 0.1875rem;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.08);
}
.comment-block textarea {
  width: 100%;
  resize: none;
}

.comment-text {
  margin-bottom: 1.25rem;
}

.bottom-comment {
  color: #acb4c2;
  font-size: 0.875rem;
}

.comment-date {
  float: left;
}

.comment-actions {
  float: right;
}
.comment-actions li {
  display: inline;
  margin: -2px;
  cursor: pointer;
}
.comment-actions li.complain {
  padding-right: 0.75rem;
  border-right: 1px solid #e1e5eb;
}
.comment-actions li.reply {
  padding-left: 0.75rem;
  padding-right: 0.125rem;
}
.comment-actions li:hover {
  color: #0095ff;
}
</style>
		
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div id ="cssmenu">
			
			<ul >
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
			
			
			</ul>

		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidemenu">
			
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
				
				<?php getCats(); ?>
				
				<ul>
					
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					
					<?php getBrands(); ?>
				
				<ul>
			
			
			</div>
		
			<div id="content_area">
			
				<div id="shopping_cart"> 
						
						<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
						
						Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items: Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>
						
						
						
						</span>
				</div>
				
					<div id="products_box">
						<div id='single_product'>
						<?php 
						if(isset($_GET['pro_id'])){
							$product_id = $_GET['pro_id'];
						
							$get_pro = "select * from products where product_id='$product_id'";

							$run_pro = mysqli_query($con, $get_pro); 
						
							while($row_pro=mysqli_fetch_array($run_pro)){
							
								$pro_id = $row_pro['product_id'];
								$pro_title = $row_pro['product_title'];
								$pro_price = $row_pro['product_price'];
								$pro_image = $row_pro['product_image'];
								$pro_desc = $row_pro['product_desc'];
								
								echo "
										
										
											<h3>$pro_title</h3>
											
											<img src='admin_area/product_images/$pro_image' width='400' height='300' />
											
											<p><b> $ $pro_price </b></p>
											
											<p>$pro_desc </p>
											
											
											<a href='index.php' style='float:left;'><button style='float:left'>Go Back</button></a>
											
											<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
								";
							
							}
						}
						?>
						<div class="comments">
							<div class="comment-wrap">
									<div class="photo">
											<div class="avatar" style="background-image: url('https://www.1plusx.com/app/mu-plugins/all-in-one-seo-pack-pro/images/default-user-image.png')"></div>
									</div>
									<div class="comment-block">
											<form method="post">
													<textarea name="product_review" cols="30" rows="3" placeholder="Add comment..."></textarea>
													<tr>
														<td>
															<select name="rating" required>
																<option>Select a Rating</option>
																<option value="1">1 star</option>
																<option value="2">2 stars</option>
																<option value="3">3 stars</option>
																<option value="4">4 stars</option>
																<option value="5">5 stars</option>
															</select>
														</td>
														<td>
															<button name="leave_comment" method="post">submit</button>
														</td>
													</tr>
											</form>
									</div>
							</div>
							<?php

								if(isset($_GET['pro_id'])) {
									$product_id = $_GET['pro_id'];
									
									$get_pro = "select * from products where product_id='$product_id'";

									$run_pro = mysqli_query($con, $get_pro); 
									
									while($row_pro = mysqli_fetch_array($run_pro)) {
										$seller_id = $row_pro['seller_id'];
									}
									if (isset($_SESSION['customer_email'])) {
										$user = $_SESSION['customer_email'];
										$get_cus = "select * from customers where customer_email='$user'";
										$run_cus = mysqli_query($con, $get_cus);
										while($row_cus = mysqli_fetch_array($run_cus)){
											$customer_id = $row_cus['customer_id'];
											$customer_image = $row_cus['customer_image'];
											// print_r($customer_id);
											// echo "<textarea>$customer_id</textarea>";
										}
									}
									if (isset($_POST['leave_comment'])) {
										$rating = $_POST['rating'];
										$product_review = $_POST['product_review'];
										$insert_review = "insert into review (seller_id, customer_id, product_id, review_text, rating) values ('$seller_id', '$customer_id', '$product_id', '$product_review', '$rating')";
						 
										 $insert_re = mysqli_query($con, $insert_review);
										 
										 if($insert_re){
											 echo "<script>alert('Successful!')</script>";
											 echo "<script>window.open('details.php?pro_id=$product_id','_self')</script>";
										 
										 }
									}
								}
								if(isset($_GET['pro_id'])) {
									//load reviews
									$product_id = $_GET['pro_id'];
									//get seller_id
									// print_r($product_id);
									$get_pro = "select * from products where product_id='$product_id'";

									$run_pro = mysqli_query($con, $get_pro); 
											
									while($row_pro = mysqli_fetch_array($run_pro)) {
										$seller_id = $row_pro['seller_id'];
									}
									// print_r($seller_id);
									$get_review = "select * from review where seller_id = '$seller_id' AND product_id = '$product_id' ";
									
									$run_review = mysqli_query($con, $get_review);
									
									while ($row_review=mysqli_fetch_array($run_review)){ 
										$review_text = $row_review['review_text']; 
										$user = $row_review['customer_id'];
										$ratingss = $row_review['rating'];
										$get_cus = "select * from customers where customer_id='$user'";
										$run_cus = mysqli_query($con, $get_cus);
										while($row_cus = mysqli_fetch_array($run_cus)){

											$customer_name = $row_cus['customer_name'];

											$customer_image = $row_cus['customer_image'];
											// print_r($customer_id);
											// echo "<textarea>$customer_id</textarea>";
										}
										if (!isset($customer_name)) {
												$customer_name = "an anonymous user";
											}



										?>
										<div class="comment-wrap">
												<div class="photo">
														<div class="avatar" style="background-image: url('https://www.1plusx.com/app/mu-plugins/all-in-one-seo-pack-pro/images/default-user-image.png')"></div>
												</div>
												<div class="comment-block">
														<p class="comment-text"><?php echo $review_text?></p>
														<div class="bottom-comment">
																<div class="comment-date">By <?php echo $customer_name?> who rated <?php echo $ratingss?>-star</div>
																
														</div>
												</div>
										</div>
												
							<?php		}
								}
							?>
							
						</div>

					</div>
						
						</div>
						
					</div>
					

				</div>

			</div>
					<!--Content wrapper ends-->
	</div> 
<!--Main Container ends here-->


</body>
</html>