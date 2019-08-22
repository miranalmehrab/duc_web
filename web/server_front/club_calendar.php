<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Student guidance and counseling  calendar";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Club name</th>
		<th> Activity</th>
		<th> Date</th>


	</tr>
	<tbody align="center">
		<?php
			$query = "select * from counseling_calendar";
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
	<form  class="form-inline" action="../server_back/counseling_calendar/insert_counseling_calendar.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<select calss="form-control form-control-lg" name="club_name" id="club_name">
                        <option value="BNCC"> BNCC </option>
                        <option value="Dhaka University Ranger Unit">Dhaka University Ranger Unit</option>
                        <option value="Badhan">Badhan</option>
                        <option value="Dhaka University Moot Court Society">Dhaka University Moot Court Society</option>
                </select> &nbsp;
		<input type="text" name="activity" placeholder="Enter activity"> &nbsp;
		<input type="text" name="date" placeholder="Enter start date"> &nbsp;
		<input type="text"  name="end_date" placeholder="Enter end date"> &nbsp;

		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/counseling_calendar/update_counseling_calendar.php" method="post">
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<select calss="form-control form-control-lg" name="club_name" id="club_name">
                        <option value="BNCC"> BNCC </option>
                        <option value="Dhaka University Ranger Unit">Dhaka University Ranger Unit</option>
                        <option value="Badhan">Badhan</option>
                        <option value="Dhaka University Moot Court Society">Dhaka University Moot Court Society</option>
                </select> &nbsp;
		<input type="text" name="activity" placeholder="Enter activity"> &nbsp;
		<input type="text" name="date" placeholder="Enter start date"> &nbsp;
		<input type="text"  name="end_date" placeholder="Enter end date"> &nbsp;

		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/counseling_calendar/delete_counseling_calendar.php" method="post">
	<input type="text" name="id" placeholder="Enter ID"> &nbsp;
	 <input type="text"  name="end_id" placeholder="Enter end ID"> &nbsp;

	<input type="hidden" name="table_name" value="calendar">
	<button class="btn btn-danger" type="submit">Delete</button>

	</form>
</div>

<?php include 'bottom.php';?>
