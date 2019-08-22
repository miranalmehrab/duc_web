<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Uniform grading system";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Numerical Marks</th>
		<th> Letter grade</th>
		<th> Grade points</th>
		

	</tr>
	<tbody align="center">
		<?php
			$query = "select * from grading_system";
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
	<form  class="form-inline" action="../server_back/grade/insert_grade.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="marks" placeholder="Enter Marks"> &nbsp;
		<input type="text" name="letter_grade" placeholder="Enter letter grade"> &nbsp;
		<input type="text" name="grade_point" placeholder="Enter grade point"> &nbsp;
	
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/grade/update_grade.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
                <input type="text" name="marks" placeholder="Enter Marks"> &nbsp;
                <input type="text" name="letter_grade" placeholder="Enter letter grade"> &nbsp;
                <input type="text" name="grade_point" placeholder="Enter grade point"> &nbsp;
	
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/grade/delete_grade.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
