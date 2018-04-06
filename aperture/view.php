<?php 
	require_once "connect.php";

	
		$sql="SELECT * FROM prod_tbl";
		$result = $con->query($sql);
		
			
		if ($result->num_rows > 0) {
			while ($row= $result->fetch_assoc()) {

				
					
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['proddesc'] . "</td>";
				echo "<td>" . $row['price'] . "</td>";
				echo "<td><a type='button' class='btn btn-warning'  href='javascript:edit_id(". $row['id'].")'>EDIT</a></td>";
				echo "<td><a class='btn btn-danger' type='button' href='javascript:delete_id(". $row['id'].")'>DELETE</a></td>";
				echo "</tr>";

				} 
			} else mysqli_error($con);

		if (isset($_GET['delete_id'])) {
    		$selectQuery= "DELETE from prod_tbl WHERE id=". $_GET['delete_id'];
    		mysqli_query($con, $selectQuery);
      } else echo mysqli_error($con);

		

?>
              

<script type="text/javascript">
	function delete_id(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='admin-dashboard.php?delete_id='+id;
     }
}

function edit_id(id) {
	if(confirm('Sure To Edit This Record ?'))
     {
        window.location.href='edit.php?edit_id='+id;
     }

}

</script>

