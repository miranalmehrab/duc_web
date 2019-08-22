<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = " List of the Dean’s Awardees ";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover" align="center">
	<thead align="center">
	<tr>
		<th> ID</th>
		<th> Name</th>
		<th> Department</th>
		<th> Result</th>
		<th> Passing year</th>
		

	</tr>
	<tbody align="center">
		<?php
			$query = "select * from list_of_deans_award";
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
		</tr>

		<?php } ?>

	</tbody>
	</table>
</div>


<div class="container-fluid">
	<form  class="form-inline" action="../server_back/list_of_deans_award/insert_list.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<input type="text" name="department" placeholder="Enter Department"> &nbsp;
		<input type="text" name="result" placeholder="Enter result"> &nbsp;
		<input type="text" name="year" placeholder="Enter year"> &nbsp;
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/list_of_deans_award/update_list.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
                <input type="text" name="name" placeholder="Enter name"> &nbsp;
                <input type="text" name="department" placeholder="Enter Department"> &nbsp;
                <input type="text" name="result" placeholder="Enter result"> &nbsp;
                <input type="text" name="year" placeholder="Enter year"> &nbsp;
               
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/list_of_deans_award/delete_list.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
