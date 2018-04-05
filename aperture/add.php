 <?php
    require_once "connect.php";
    
                          
      if (isset(($_POST["addCreate"]))) {
				include ('connect.php');
        $name=$_POST['name'];
        $desc=$_POST['desc'];
        $price=$_POST['price'];
        $pic=addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
        $error= mysqli_error($con);

        if (empty($error)){
            $_POST = array();
                                //TODO remove placeholder
             $insert="INSERT INTO prod_tbl(name, proddesc, price, pic) VALUES ('$name', '$desc', '$price' , '$pic')";
             $q= mysqli_query($con, $insert) or die(mysqli_error($con));
              $result= mysqli_query($con, $q);

                if ($result) {
                  echo "Succesfully Added!";                                 
                  }
          } else echo "Failed :c " .mysqli_error($con);
    } 
    
  
  $con->close();
?>