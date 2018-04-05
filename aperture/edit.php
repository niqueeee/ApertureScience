<?php require_once "connect.php";
?>
<div class="modal-body">

  <form action="admin-dashboard.php" method="POST" ">
  <fieldset>
    <div class="md-form">
      <label data-error="wrong" data-success="right" for="newName" value="<?php echo $name; ?>">Edit Name:</label>
      <input type="text" name="newName" class="form-control validate">
    </div>

    <div class="md-form">
      <label data-error="wrong" data-success="right" for="desc" value="<?php echo $proddesc;?>">Edit Product Description:</label>
      <input type="text" name="newDesc" class="form-control validate">
    </div>

    <div class="md-form">
      <label data-error="wrong" data-success="right" for="price" value="<?php echo $price;?>">Edit Price:</label>
      <input type="number" name="newPrice" class="form-control validate">
    </div>

    <div class="text-center mt-4">
      <input class="btn btn-primary" type="submit" id="editValue" name="editValue" value="EDIT">
    </div>
    <?php /*
      if (isset($_POST['editValue'])) {
          $name= $_POST['newName'];
          $desc= $_POST['newDesc'];
          $price= $_POST['newPrice'];

          if ($name == '' || $desc == ''){
            $error = 'ERROR: Please fill in all required fields!';
            renderForm($name, $desc, $price, $pic);
          } else {
            mysql_query("UPDATE players SET name='$name', proddesc='$desc', price='$price' WHERE id='$id'");
            or die(mysql_error());
          }

          if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0){
            $id = $_GET['id'];
            $result = mysql_query("SELECT * FROM players WHERE id=$id") or die(mysql_error());
            $row = mysql_fetch_array($result);

            if($row) {
              $firstname = $row['firstname'];
              $lastname = $row['lastname'];
              renderForm($id, $firstname, $lastname, '');

              } else {echo "No results!";}

            } else {echo 'Error!'; }
          }
*/
  ?>

</fieldset>
</form>
</div>
<script type="text/javascript">
  
</script>
                     