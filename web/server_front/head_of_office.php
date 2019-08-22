<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "List of office heads";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Office name</th>
		<th> Office head</th>
		

	</tr>
	<tbody>
		<?php
			$query = "select * from head_of_office";
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
	<form  class="form-inline" action="../server_back/head_of_office/insert_head.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="office_name" placeholder="Enter office name"> &nbsp;
		<input type="text" name="head_name" placeholder="Enter office head "> &nbsp;
	
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/head_of_office/update_head.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="office_name" placeholder="Enter office name"> &nbsp;
		<input type="text" name="head_name" placeholder="Enter office head"> &nbsp;
		
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/head_of_office/delete_head.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="hidden" name="table_name" value="dean">
	
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
