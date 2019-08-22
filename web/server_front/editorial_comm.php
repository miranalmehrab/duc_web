<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Editorial committee";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Name</th>
		<th> Rank</th>
		<th> Membership</th>

	</tr>
	<tbody>
		<?php
			$query = "select * from editorial_committee";
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
	<form  class="form-inline" action="../server_back/committee/insert_committee.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<input type="text" name="rank" placeholder="Enter Rank"> &nbsp;
		<input type="text" name="membership" placeholder="Enter membership"> &nbsp;
		<input type="hidden" name="table_name" value="editorial_committee">
	
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/committee/update_committee.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<input type="text" name="rank" placeholder="Enter Rank"> &nbsp;
		<input type="text" name="membership" placeholder="Enter membership"> &nbsp;
		<input type="hidden" name="table_name" value="editorial_committee">
	
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/committee/delete_committee.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="hidden" name="table_name" value="editorial_committee">
	
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
