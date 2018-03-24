<?php include ('head.php'); ?>

<body>
	   <!--sidebar start-->
     <h3>hello</h3>
      <!--sidebar end-->
      <form method="POST">
      <button name="READ">View</button>
  	  </form>

  	  <table>
  	  	<tr>
  	  		<th>name</th>
  	  		<th>desc</th>
  	  		<th>price</th>
  	  		<th>stock</th>
  	  		<th>picture</th>
  	  	</tr>

     <?php 

     $con= mysqli_connect('localhost', 'root', '1234') or die(mysqli_error());
          mysqli_select_db($con,'aperture') or die(mysqli_error($con));

    if (isset($_POST['READ'])) {

     $col1= $_GET['name'];
     $col2= $_POST['proddesc'];
     $col3= $_POST['price'];
     $col4= $_POST['stock'];
  
     
     $query= "SELECT * from prod_tbl";
     $result= mysqli_query($con, $query);
     $num= mysqli_num_rows($result);

     $i= 0;
     while ($i < $num) {
     	# code...
     	$f1= mysqli_result($result, $i, "col1");
     	$f2= mysqli_result($result, $i, "col2");
     	$f3= mysqli_result($result, $i, "col3");
     	$f4= mysqli_result($result, $i, "col4");
     

     echo '<br>$f1 $f2 $f3 $f4 $f5';

     $i++;}
     } ?>
 	

 </table>


      			


</body>
</html>