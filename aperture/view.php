<?php 
	require_once "connect.php";

	
		$sql="SELECT * FROM prod_tbl";
		$result = $con->query($sql);
		
			
		if ($result->num_rows > 0) {
			while ($row= $result->fetch_assoc()) {

				
					
				echo "<tr>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['proddesc'] . "</td>";
				echo "<td>" . $row['price'] . "</td>";
				echo "<td><a type='button' class='btn btn-warning' data-toggle='modal' data-target='#edit'>Edit</a></td>";
				echo "<td><a class='btn btn-danger'  data-toggle='modal' data-target='#delete' value='DELETE'>Delete</a></td>";
				echo "</tr>";

				} 
			} else mysqli_error($con);

			$con->close();

?>

<?php

