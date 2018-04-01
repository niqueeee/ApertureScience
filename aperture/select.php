<?php      
					 $con= new mysqli('localhost', 'root', '1234', 'aperture');
          if ($con->connect_error){
            die("Connection error: " . $con->connect_error);
          }
					$result = $con->query("SELECT name, proddesc, pic FROM prod_tbl");
					$hehe=mysqli_fetch_array($result);

					if ($result->num_rows > 0) {
						while ($row= $result->fetch_assoc()) {
							ob_start();
							echo "<div class='col-md-2 col-sm-2 box0'>";
							echo "<div class='box1'>";
							echo "<span><img src=" . 'data:image/jpeg;base64,' .base64_encode($hehe["pic"]) . "'></span>";
							echo "<h3>" . $row["name"] ."</h3>";
							echo "</div>";
							echo "<p>" .$row["proddesc"] . "</p>";
							echo "</div>";
					} 
				} 

					

			?>


              
                

