<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Chairman of the Departments";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Department</th>
		<th> Chairman</th>
		

	</tr>
	<tbody>
		<?php
			$query = "select * from chairman_of_dept";
			$result = mysqli_query($connection,$query);

			while($row = mysqli_fetch_row($result))
			{
		?>

		<tr>
			<td>  <?php echo $row[0]; ?> </td>
			<td>  <?php echo $row[1]; ?> </td>
			<td>  <?php echo $row[2]; ?> </td>
		</tr>

		<?php } ?>

	</tbody>
	</table>
</div>


<div class="container-fluid">
	<form  class="form-inline" action="../server_back/chairman_of_dept/insert_chairman.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="dept_name" placeholder="Enter Department"> &nbsp;
		<input type="text" name="chairman_name" placeholder="Enter Chairman name"> &nbsp;
	
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/chairman_of_dept/update_chairman.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="dept_name" placeholder="Enter Department"> &nbsp;
		<input type="text" name="chairman_name" placeholder="Enter Chairman name"> &nbsp;
		
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/chairman_of_dept/delete_chairman.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="hidden" name="table_name" value="dean">
	
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
