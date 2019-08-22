<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Provost/ Warden of the halls";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Hall/ Hostel</th>
		<th> Provost/ Warden</th>
		

	</tr>
	<tbody>
		<?php
			$query = "select * from provost_of_hall";
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
	<form  class="form-inline" action="../server_back/provost_of_hall/insert_provost.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="hall_name" placeholder="Enter hall name"> &nbsp;
		<input type="text" name="provost_name" placeholder="Enter provost name"> &nbsp;
	
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/provost_of_hall/update_provost.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="hall_name" placeholder="Enter hall name"> &nbsp;
		<input type="text" name="provost_name" placeholder="Enter provost name"> &nbsp;
		
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/provost_of_hall/delete_provost.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="hidden" name="table_name" value="dean">
	
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
