<?php 

session_start();


 	if (isset($_POST["addCreate"]) && isset($_SESSION["page1"])) {

        $con= mysqli_connect('localhost', 'root', '1234', 'aperture') or die(mysqli_error());
                              
        $name=$_POST['name'];
        $desc=$_POST['desc'];
        $price=$_POST['price'];
        $stock=$_POST['stock'];
        $pic=addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
        $error= mysqli_error($con);

        if (empty($error)){

            $insert="INSERT INTO prod_tbl(name, proddesc, price, stock, pic) VALUES ('$name', '$desc', '$price', '$stock', '$pic')";
                $q= mysqli_query($con, $insert) or die(mysqli_error($con));
                              
            $result= mysqli_query($con, $q);

            $_SESSION["page2"] = 2;
            header("Location: select.php");

 //           if ($result) {
   //       		echo "Succesfully Added!";
          		
                mysqli_close();

                }
     //   } else echo "Failed :c " .mysqli_error($con);

    }

?>