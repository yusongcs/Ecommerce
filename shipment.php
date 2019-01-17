<?php
session_start();
include("functions/functions.php");
include("includes/db.php"); 
?>

<form action = "shipment.php" method = "post" enctype = "multipart/form-data">
	<table align ="center" width = "750">
	<tr align="center">
		<td colspan="6"><h2>Shipment Method</h2></td>
	</tr>	
	
	<tr>
		<td align = "right">Shipment Detail:</td>
		<td>
			  <select name="shipmentDetail">
				<option value="USPS">USPS</option>
				<option value="FedEx">FedEx</option>
				<option value="UPS">UPS</option>
			  </select>
		</td>
	</tr>
	
	<tr>
		<td align = "right">Type of Shipment:</td>
		<td>
			<select name="shipmentType">
				<option value="twoday">Two Day Express ($9.99)</option>
				<option value="ordinary">Four Day Regular (Free)</option>
			 </select>
		</td>
	</tr>
	
	<tr>
		<td align = "right">Shipment Address:</td>
		<td><textarea cols = "20" rows = "10" name = "s_address" required></textarea></td>
	</tr>
	
	
	<tr align="center">
		<td colspan="6"><input type="submit" name="shipment" value="Locking Shipment" /></td>
	</tr>
	</table>
</form>

<?php
	if(isset($_POST['shipment'])){
		//$ip = getIp();
		//$_SESSION['customer_email']
		
		if (isset($_SESSION['customer_email'])) {
						$user = $_SESSION['customer_email'];
						$get_cus = "select * from customers where customer_email='$user'";
						$run_cus = mysqli_query($con, $get_cus);
						while($row_cus = mysqli_fetch_array($run_cus)){
							$customer_id = $row_cus['customer_id'];
							//print_r($customer_id);
							// echo "<textarea>$customer_id</textarea>";
						}
					}
		
		
		$s_detail = $_POST['shipmentDetail'];
		$s_type = $_POST['shipmentType'];
		$s_addr = $_POST['s_address'];
		//print_r($s_detail);
		//print_r($s_type);
		//print_r($s_addr);
		if(strcmp($s_type,"twoday")){
				$s_charge = 0.00;
				//print_r("four day is being select");
		}else{
			$s_charge = 9.99;
			//print_r("two day is being select");
		}
		
		$select_id = "select customer_id from customers where customer_ip = '$ip'";
		$run_se = mysqli_query($con,$select_id);
		
		//print_r("sad");
		$insert_s = "insert into Shipment(order_date,customer_id,ShipmentDetail,ShipmentCharge,Address) values (NOW(),'$customer_id','$s_detail','$s_charge','$s_addr')";
		$run_s = mysqli_query($con, $insert_s);
		if($run_s){
			echo "<script>alert('Shipment have been lock in')</script>";
			//echo "<script>window.open('','_self')</script>";
			echo "<script>window.open('checkout.php','_self')</script>";
		}//else{
			//echo "<script>alert('Shipment error')</script>";
		//}
		
		
		//<td><button><a href="checkout.php" style="text-decoration:none; color:black;">Checkout</a></button></td>
	}
?>

