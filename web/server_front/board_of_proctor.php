<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Board of Proctor";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Name</th>
		<th> Institute</th>
		<th> Membership</th>

	</tr>
	<tbody>
		<?php
			$query = "select * from board_of_proctor";
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
	<form  class="form-inline" action="../server_back/board_of_proctor/insert_proctor.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<input type="text" name="institute" placeholder="Enter institute"> &nbsp;
		<input type="text" name="membership" placeholder="Enter membership"> &nbsp;
		<input type="hidden" name="table_name" value="implementation_committee">
	
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/board_of_proctor/update_proctor.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<input type="text" name="institute" placeholder="Enter institute"> &nbsp;
		<input type="text" name="membership" placeholder="Enter membership"> &nbsp;
		<input type="hidden" name="table_name" value="implementation_committee">
	
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/board_of_proctor/delete_proctor.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="hidden" name="table_name" value="implementation_committee">
	
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
