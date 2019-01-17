<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>Your Shipment tracks:</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>S.N</th>
		<th>Order ID</th>
		<th>Order Date</th>
		<th>Customer Id</th>
		<th>Shipment Detail</th>
		<th>Shipment Charge</th>
		<th>Address</th>
		
		
	</tr>
	<?php 
	include("includes/db.php");
	session_start();
	if (isset($_SESSION['customer_email'])) {
						$user = $_SESSION['customer_email'];
						$get_cus = "select * from customers where customer_email='$user'";
						$run_cus = mysqli_query($con, $get_cus);
						while($row_cus = mysqli_fetch_array($run_cus)){
							$eqcustomer_id = $row_cus['customer_id'];

							//print_r("fdsgfg");
							// echo "<textarea>$customer_id</textarea>";
						}
					}

	$get_order = "select * from Shipment where customer_id = '$eqcustomer_id'";
	
	$run_order = mysqli_query($con, $get_order); 
	
	$i = 0;
	
	while ($row_order=mysqli_fetch_array($run_order)){
		$customer_id = $row_order['customer_id'];
		$order_id = $row_order['OrderID'];
		$order_date = $row_order['order_date'];
		
		$ShipmentDetail = $row_order['ShipmentDetail'];
		$ShipmentCharge = $row_order['ShipmentCharge'];
		$Address = $row_order['Address'];
		$i++;

		
	?>
	<tr align="center">

		<td><?php echo $i;?></td>
		<td><?php echo $order_id;?></td>
		<td><?php echo $order_date;?></td>
		<td><?php echo $customer_id;?></td>
		<td><?php echo $ShipmentDetail;?></td>
		<td><?php echo $ShipmentCharge;?></td>
		<td><?php echo $Address;?></td>
		
		
	</tr>
	<?php } ?>
</table>