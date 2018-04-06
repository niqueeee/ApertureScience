<?php require_once "connect.php";

?>

  <form method="POST">
  <fieldset>
    <?php echo $_GET['edit_id']; ?>
    <div class="md-form">
      <label data-error="wrong" data-success="right" for="newName" >Edit Name:</label>
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

    <?php 

    if (isset($_POST['editValue'])) {
        $name= $_POST['newName'];
        $desc= $_POST['newDesc'];
        $price= $_POST['newPrice'];

        $selectQuery= "UPDATE prod_tbl SET name='".$name. "', proddesc='".$desc. "', price=" .$price. " WHERE id=". $_GET['edit_id'];
        mysqli_query($con, $selectQuery); 
        header ("Location: admin-dashboard.php");

      } else echo mysqli_error($con);



    ?>


</fieldset>
</form>

<script type="text/javascript">
  
</script>
                     