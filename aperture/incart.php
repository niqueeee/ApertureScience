<?php 
	session_start();
	require_once('connect.php');
	include 'head-shop.php';
?>

 <?php
 	$items= $_SESSION['cart'];
 	$cartitems= explode(",", $items);

 ?>

 <body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.php"><img src="assets/new-img/logo.jpg" width='60' alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="current"><a href="shop.php">Shop</a></li>
						    	<li><a href="incart.php">Cart</a></li>
						    	<li><a href="checkout">Checkout</a></li>
						    	<li><a href="contact.php">Contact</a></li>
						    								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            
	      </div>
		 </div>
	    </div>
	  </div>

<div class="container">

 <div class="row">
 	<table class="table">
 		<tr>
 			<th>ID</th>
 			<th>Item Name</th>
 			<th>Price</th>
 		</tr>
 		<?php
 			$total= '0';
 			$i= 1;
 			foreach ($cartitems as $key => $id) {
 				# code...
 				$selectQuery= "SELECT * FROM prod_tbl WHERE id= '$id'";
 				$result= mysqli_query($con, $selectQuery);
 				$row= mysqli_fetch_assoc($result);
 			}
 		?>
 		<tr>
 			<td><?php echo $i; ?></td>
 			<td><?php echo $row['name']; ?></td>
 			
 			<td><?php echo $row['price']; ?></td>
 		</tr>
 		<?php 
 			$total= $total + $row['price'];
 			$i++;
 		?>

 		<tr>
 			<td><strong>TOTAL PRICE: </strong></td>
 			<td><strong><?php echo $total; ?></strong></td>
 			<td><a href='checkout' class="btn btn-default">Proceed to Checkout</a></td>
 		</tr>
 	</table>
 </div>
</div>
</body>