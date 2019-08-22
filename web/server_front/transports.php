<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Transport";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Bus name</th>
		<th> Route</th>
		<th> Bus type</th>
		<th> Run type</th>
		<th> Time</th>

	</tr>
	<tbody>
		<?php
			$query = "select * from transport";
			$result = mysqli_query($connection,$query);

			while($row = mysqli_fetch_row($result))
			{
		?>

		<tr>
			<td>  <?php echo $row[0]; ?> </td>
			<td>  <?php echo $row[1]; ?> </td>
			<td>  <?php echo $row[2]; ?> </td>
			<td>  <?php echo $row[3]; ?> </td>
			<td>  <?php echo $row[4]; ?> </td>
			<td>  <?php echo $row[5]; ?> </td>

		</tr>

		<?php } ?>

	</tbody>
	</table>
</div>


<div class="container-fluid">
	<form  class="form-inline" action="../server_back/transport/insert_transport.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="busName" placeholder="Enter name"> &nbsp;
		<input type="text" name="routeName" placeholder="Enter route"> &nbsp;
		<input type="text" name="busType" placeholder="Enter bus type"> &nbsp;
		<input type="text" name="runType" placeholder="Enter run type"> &nbsp;
		<input type="text" name="time" placeholder="Enter schedule"> &nbsp;

		<button class="btn btn-primary" type="submit">Insert</button> &nbsp;

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/transport/update_transport.php" method="post">
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="busName" placeholder="Enter name"> &nbsp;
		<input type="text" name="routeName" placeholder="Enter route"> &nbsp;
		<input type="text" name="busType" placeholder="Enter bus type"> &nbsp;
		<input type="text" name="runType" placeholder="Enter run type"> &nbsp;
		<input type="text" name="time" placeholder="Enter schedule"> &nbsp;


		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/transport/delete_transport.php" method="post">
	<input type="text" name="id" placeholder="Enter ID"> &nbsp;
	<input type="hidden" name="table_name" value="transport">
	<button class="btn btn-danger" type="submit">Delete</button>

	</form>
</div>

<?php include 'bottom.php';?>
