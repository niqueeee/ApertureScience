<?php
	require_once "connect.php";

    if (isset($_POST["id"])) {
        $id = ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) ? intval( $_GET['id'] ) : '2';
          	$deleteSQL= "DELETE from prod_tbl WHERE prod_tbl.id='".$id."'";
          		

           	if ($result){
                echo "Success" .$id. "hehehe";
                     			
               	} else echo mysqli_error($con);
         } else echo mysqli_error($con);
    
     
?>