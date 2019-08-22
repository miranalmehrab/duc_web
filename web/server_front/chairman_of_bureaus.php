<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Director/Chairman of bureaus";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Name of the research center</th>
		<th> Dean of the constitution</th>
		<th> Managing committee date</th>
		<th> Chairman name and date of Appoinment</th>
		<th> Director name and date of appoinment</th>
		

	</tr>
	<tbody>
		<?php
			$query = "select * from chairman_of_bureaus";
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
	<form  class="form-inline" action="../server_back/chairman_of_bureaus/insert_chairman.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="center_name" placeholder="Enter center name"> &nbsp;
		<input type="text" name="constitution_date" placeholder="Enter date of constitution"> &nbsp;
		<input type="text" name="committee_date" placeholder="Enter committee date"> &nbsp;
		<input type="text" name="chairman_name" placeholder="Enter chairman name"> &nbsp;
		<input type="text" name="director_name" placeholder="Enter Director name"> &nbsp;

		<input type="hidden" name="table_name" value="dean">
	
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/chairman_of_bureaus/update_chairman.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
                <input type="text" name="center_name" placeholder="Enter Center name"> &nbsp;
                <input type="text" name="constitution_date" placeholder="Enter date of constitution"> &nbsp;
                <input type="text" name="committee_date" placeholder="Enter committee date"> &nbsp;
                <input type="text" name="chairman_name" placeholder="Enter chairman name"> &nbsp;
                <input type="text" name="director_name" placeholder="Enter Director name"> &nbsp;
	
		<input type="hidden" name="table_name" value="dean">
	
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/chairman_of_bureaus/delete_chairman.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="hidden" name="table_name" value="dean">
	
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
