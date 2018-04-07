<?php session_start();
include('head-shop.php');
require "connect.php"; 
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
				echo "<li class='cart'><a class='btn btn-default' href='cart.php?id=". $row['id']."'>Add To Cart</a></li>";
				echo "<div class='clear'></div>";
				echo "</ul></div>";
				echo "</div>";
				
			}
		}
	?>

	<div class="modal fade" tabindex="-1" id="modalYea" >
        <div class="modal-dialog cascading-modal" role="document">
            <div class="modal-content">
            <div class="modal-header primary-color white-text text-center">
                <h4 class="modal-title  font-weight-bold">Add to Cart</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!--content -->
            <div class="modal-body">
            	<div class='col-md-3 shop_box'>
            		<form method="POST">
            			<input type="hidden" name="foo" value="<?php echo $name;?>" />

            			<h3>Quantity:</h3>
            			<input type="number" name="qty">
            			
            		</form>
            	</div>
			</div>
			</div>
		</div>
	</div>



</div></div></div></div>
<script type="text/javascript">
	function addToCart(id){
		$('#modalYea').modal('show');


	}
</script>
	

</body>
</html>		