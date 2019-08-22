<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Specific calendar";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Department name</th>
		<th> Academic Year</th>
		<th> Date</th>
		<th> Event </th>
		<th> Description</th> 


	</tr>
	<tbody>
		<?php
			$query = "select * from specific_calendar";
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
	<form  class="form-inline" action="../server_back/specific_calendar/insert_specific_calendar.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<input type="text" name="description" placeholder="Enter Description"> &nbsp;
		<input type="text" name="date" placeholder="Enter start date"> &nbsp;
		<input type="text"  name="end_date" placeholder="Enter end date"> &nbsp;


		 <select calss="form-control form-control-lg" name="dept_name" id="dept_name">
                        <option value="IIT">IIT</option>
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
                        <option value="INFS">INFS</option>
                        <option value="Botany">Botany</option>
                </select> &nbsp;


		<select calss="form-control form-control-lg" name="academic_year" id="ac_year">
		    	<option value="1st year">First year</option>
    			<option value="2nd year">Second year</option>
			<option value="3rd year">Third year</option>
    			<option value="4th year">Final year</option>
			<option value="masters">Master's</option>
  		</select> &nbsp;

		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/specific_calendar/update_specific_calendar.php" method="post">
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<input type="text" name="description" placeholder="Enter Description"> &nbsp;
		<input type="text" name="date" placeholder="Enter start date"> &nbsp;
	 	<input type="text"  name="end_date" placeholder="Enter end date"> &nbsp;
		
		<select calss="form-control form-control-lg" name="dept_name" id="dept_name">         
                       	<option value="IIT">IIT</option>
			<option value="CSE">CSE</option>       
			<option value="EEE">EEE</option> 
			<option value="INFS">INFS</option> 
                        <option value="Botany">Botany</option>                  
               	</select> &nbsp; 


		<select calss="form-control form-control-lg" name="academic_year" id="ac_year">
                        <option value="1st year">First year</option>
                        <option value="2nd year">Second year</option>
                        <option value="3rd year">Third year</option>
                        <option value="4th year">Final year</option>
                        <option value="masters">Master's</option>
                </select> &nbsp;

		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/specific_calendar/delete_specific_calendar.php" method="post">
		<input type="text" name="id" placeholder="Enter start ID"> &nbsp;
		<input type="text"  name="end_id" placeholder="Enter end ID"> &nbsp;
		
		<button class="btn btn-danger" type="submit">Delete</button>

	</form>
</div>

<?php include 'bottom.php';?>
