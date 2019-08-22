<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Admin";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th colspan="2"> Name</th>
		<th colspan="2"> Password</th>
		<th colspan="3"> Action</th>
	</tr>
	<tbody>
		<?php
			$query = "select * from admin";
			$result = mysqli_query($connection,$query);

			while($row = mysqli_fetch_row($result))
			{
		?>

		<tr>
			<td align="center">  <?php echo $row[0]; ?> </td>
			<td colspan="2" align="center">  <?php echo $row[1]; ?> </td>
			<td colspan="2" align="center"  style=" -webkit-text-security: disc;">  <?php echo $row[2]; ?> </td>

			<td align="right" style="white-space:nowrap;">  	<button class="btn btn-success" data-toggle="modal" data-target="#insert_modal">Add</button> &nbsp;

			<td align="center" style="white-space:nowrap;">	<button class="btn btn-warning" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#update_modal">Update</button> </td>

			<td alighn="left" style="white-space:nowrap;">	
				<form class="form-inline" action="../server_back/admin/delete_admin.php" method="post">
        				<input type="hidden" name="id" value= <?php echo $row[0] ?> > &nbsp; 
					<button class="btn btn-danger" type="submit">Remove</button>
				</form>
			</td>

		</tr>

		<?php } ?>

	</tbody>
	</table>
</div> 


<script>
	function scroll_to_end()
	{
		window.scrollTo(0,document.body.scrollHeight);
	}

</script>

<!-- Modal -->
 <div id="insert_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          
	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         
	<div class="modal-body">
               <form action="../server_back/admin/insert_admin.php" method="post" autocomplete="off">
	
        	<!--    <input type="text" name="id" placeholder="Enter ID"> -->
                <input type="text" class="form-control" name="name" placeholder="Enter name" autocomplete="new-password"> </br>
                <input type="password"  class="form-control" name="password" placeholder="Enter password" autocomplete="new-password"> </br>
                <button class="btn btn-primary" type="submit">Insert</button> </br>

        	</form>

         </div>
         
 </div>
</div> </div>



<!-- Modal -->
 <div id="update_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
               <form action="../server_back/admin/update_admin.php" method="post" autocomplete="off">

                <input type="text" class="form-control" name="id" placeholder="Enter id" > </br>
                <input type="text" class="form-control" name="name" placeholder="Enter name" autocomplete="new-password"> </br>
                <input type="password"  class="form-control" name="password" placeholder="Enter password" autocomplete="new-password"> </br>
             	<textarea class="form-control" rows="1" cols="100"></textarea>
		<button class="btn btn-primary" type="submit">Update</button> </br>

                </form>

         </div>

 </div>
</div> </div>










<!--

<div class="container-fluid">
	<form class="form-inline" action="../server_back/admin/insert_admin.php" method="post" autocomplete="off">

		<input type="text" name="id" placeholder="Enter ID">
		&nbsp; <input type="text" name="name" placeholder="Enter name" autocomplete="new-password">
		&nbsp; <input type="password" name="password" placeholder="Enter password" autocomplete="new-password">
		&nbsp; <button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/admin/update_admin.php" method="post" autocomplete="off">
	
	<input type="text" name="id" placeholder="Enter ID">
	&nbsp; <input type= "text" name="name" placeholder="Enter name" autocomplete="new-password">
	&nbsp; <input type="password" name="password" placeholder="Enter password" autocomplete="new-password">

	&nbsp; <button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/admin/delete_admin.php" method="post">
	<input type="text" name="id" placeholder="Enter ID">
	<input type="hidden" name="table_name" value="admin">
	&nbsp; <button class="btn btn-danger" type="submit">Delete</button>

	</form>
</div>

!-->

<?php include 'bottom.php';?>
