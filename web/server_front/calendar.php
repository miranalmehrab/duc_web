<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "General calendar";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Event name</th>
		<th> Description</th>
		<th> Date</th>


	</tr>
	<tbody>
		<?php
			$query = "select * from calendar";
			$result = mysqli_query($connection,$query);

			while($row = mysqli_fetch_row($result))
			{
		?>

		<tr>
			<td>  <?php echo $row[0]; ?> </td>
			<td>  <?php echo $row[1]; ?> </td>
			<td>  <?php echo $row[2]; ?> </td>
			<td>  <?php echo $row[3]; ?> </td>
		</tr>

		<?php } ?>

	</tbody>
	</table>
</div>


<div class="container-fluid">
	<form  class="form-inline" action="../server_back/calendar/insert_calendar.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<input type="text" name="description" placeholder="Enter Description"> &nbsp;
		<input type="text" name="date" placeholder="Enter start date"> &nbsp;
		<input type="text" name="end_date" placeholder="Enter end date"> &nbsp;
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/calendar/update_calendar.php" method="post">
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<input type="text" name="description" placeholder="Enter Description"> &nbsp;
		<input type="text" name="date" placeholder="Enter start date"> &nbsp;
		<input type="text" name="end_date" placeholder="Enter end date"> &nbsp;
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/calendar/delete_calendar.php" method="post">
	<input type="text" name="id" placeholder="Enter start ID"> &nbsp;
	<input type="text" name="end_id" placeholder="Enter end ID"> &nbsp;
	<input type="hidden" name="table_name" value="calendar">
	<button class="btn btn-danger" type="submit">Delete</button>

	</form>
</div>

<?php include 'bottom.php';?>
