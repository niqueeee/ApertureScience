<?php include('head-shop.php');
require "connect.php"; ?>
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
						    	<li class="current"><a href="shop.html">Shop</a></li>
						    	<li><a href="cart.php">Cart</a></li>
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


<!-- SHOP -->
<div class="main">
<div class="shop_top">
<div class="container">
<div class="row shop_box-top">


	<?php 
		$sql="SELECT * FROM prod_tbl";
		$result= $con->query($sql);

		if ($result->num_rows > 0) {
			while ($row= $result-> fetch_assoc()){
				echo "<div class='col-md-3 shop_box'>";
				echo "<a href=''><img src='data:image/jpeg;base64,".base64_encode($row['pic'])."' class='img-responsive' /></a>";
				echo "<div class='shop_desc'>";
				echo "<h3><a href=''>" .$row['name']. "</a></h3>";
				echo "<p>" . $row['proddesc'] ."</p>";
				echo "<span class='actual'>₱ ".$row['price']." .00</span><br>";
				echo "<ul class='buttons'>";
				echo "<li class='cart'><a href=''>Add To Cart</a></li>";
				echo "<div class='clear'></div>";
				echo "</ul></div>";
				echo "</div>";
			}
		}
	?>

</div></div></div></div>
	

</body>
</html>		