<?php include('head.php');
require "connect.php"; ?>
<body>
<div class="men_banner">
   	  <div class="container">
   	  	<div class="header_top">
   	  	   <div class="header_top_left">
	  	      <div class="box_11"><a href="checkout.html">
		      <h4><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
		      </a></div>
	          <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
	          <div class="clearfix"> </div>
	       </div>
		     <div class="clearfix"> </div>
	    </div>

              <div class="row">
                  <div class="col-lg-9 main-chart">


                  	<?php 
                  			$sql="SELECT * FROM prod_tbl";
		$result = $con->query($sql);
		
			
		if ($result->num_rows > 0) {
			while ($row= $result->fetch_assoc()) {
                  
                  	

                  		echo "<div class='col-md-2 col-sm-2 col-md-offset-1 box0'>";
                  		echo "<div class='box1'>";
                  		
                  		echo "<h3>".$row['name']. "</h3>";
                  		echo "</div>";
                  		echo "<h5> P " .$row['price']. ".00</h5>";
                  		echo "<p>" .$row['proddesc']. "</p>";
                  		echo "</div>";
}

}

                  		              

                  		?>
	    </div>
	  </div>
   
 
   </div>
</body>
</html>		