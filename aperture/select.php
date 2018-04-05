<?php include 'head.php';
	  include 'connect.php';
?>

<br>
<Br><br><br>
<div class='col-lg-12'>
<div class='content-panel'>
	<table class='table'>
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			
	<?php include "view.php";?>

	   <div id="edit" class="modal fade" tabindex="-1">
            <div class="modal-dialog cascading-modal" role="document">
              <div class="modal-content">
                <div class="modal-header primary-color white-text text-center">
                  <h4 class="modal-title  font-weight-bold">Edit Product</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                
                <?php include 'edit.php'; ?>

              </div>
         	</div>
        </div>

              
           <div id="delete" class="modal fade" tabindex="-1">
            <div class="modal-dialog cascading-modal" role="document">
              <div class="modal-content">
                <div class="modal-header primary-color white-text text-center">
                  <h4 class="modal-title  font-weight-bold">Delete Product</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>

                <?php 
                	
                	if(isset($_GET['id'])) {
    					$id = $_GET['id'];
 
    					$sql = "SELECT * FROM members WHERE id = {$id}";
    					$result = $connect->query($sql);
    					$data = $result->fetch_assoc();
    					$con->close();
    				}
                ?>

                <div class="modal-body">
                	
                	<h1 style="color: #1d1d1d;">Are you sure you want to delete?</h1>
                	<div class="text-center mt-4">
                		<form method="POST" action="delete.php">
                		<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                        <button class="btn btn-danger" type="submit" id="deleteBtn" name="deleteBtn">Yes</button>
                        <button class="btn btn-default" type="submit" name="cancelBtn" value="Cancel">Cancel</button>

                        
                      </form>
                     </div>
                 
                </div></div></div></div>

</tbody>
</table>



              
    