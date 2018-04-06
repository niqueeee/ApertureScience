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
        <th>ID</th>
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

              

</tbody>
</table>



              
    