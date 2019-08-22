<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Deans award";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Faculty</th>
		<th> Dean</th>
		

	</tr>
	<tbody align="center">
		<?php
			$query = "select * from deans_award";
			$result = mysqli_query($connection,$query);

			while($row = mysqli_fetch_row($result))
			{
		?>

		<tr>
			<td>  <?php echo $row[0]; ?> </td>
			<td>  <?php echo $row[1]; ?> </td>
			<td>  <?php echo nl2br($row[2]); ?> </td>
		</tr>

		<?php } ?>

	</tbody>
	</table>
</div>


<div class="container-fluid">
	<form  class="form-inline" action="../server_back/deans_award/insert_deans_award.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<textarea class="form-control"  wrap="soft" rows="1" cols="20" name="name" placeholder="Enter faculty name"></textarea>&nbsp;
		<textarea class="form-control"  wrap="soft" rows="1" cols="20" name="description" placeholder="Enter Description"></textarea>&nbsp;
	
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/deans_award/update_deans_award.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<textarea class="form-control"  wrap="soft" rows="1" cols="20" name="name" placeholder="Enter faculty name"></textarea>&nbsp;
                <textarea class="form-control"  wrap="soft" rows="1" cols="20" name="description" placeholder="Enter Description"></textarea>&nbsp;
	
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/deans_award/delete_deans_award.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
