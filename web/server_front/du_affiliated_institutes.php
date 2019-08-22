<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Dhaka University Components and affiliated colleges and institutes";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Name</th>
		<th> Institute</th>
		<th> Governance</th>


	</tr>
	<tbody align="center">
		<?php
			$query = "select * from du_affiliated_institutes";
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
	<form  class="form-inline" action="../server_back/du_affiliated_institutes/insert_affiliated_institutes.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<input type="text" name="name" placeholder="Enter name"> &nbsp;
		<select calss="form-control form-control-lg" name="institute_name" id="dept_name">
                        <option value="Medical college"> Medical college</option>
                        <option value="Dental College">Dental College</option>
                        <option value="Homeopathic, Greek and Ayurvedic"> Homeopathic, Greek and Ayurvedic</option>
                        <option value="Medical Institute">Medical Institute</option>
                        <option value="Domestic Economics College">Domestic Economics College</option>
			<option value="Affiliated 7 Government General Degree College">Affiliated 7 Government General Degree College</option>
                </select> &nbsp;


		<select calss="form-control form-control-lg" name="governance" id="ac_year">
		    	<option value="Public">Public</option>
    			<option value="Private">Private</option>
  		</select> &nbsp;

		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/du_affiliated_institutes/update_affiliated_institutes.php" method="post">
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
                <input type="text" name="name" placeholder="Enter name"> &nbsp;
                <select calss="form-control form-control-lg" name="institute_name" id="dept_name">
                        <option value="Medical college"> Medical college</option>
                        <option value="Dental College">Dental College</option>
                        <option value="Homeopathic, Greek and Ayurvedic"> Homeopathic, Greek and Ayurvedic</option>
                        <option value="Medical Institute">Medical Institute</option>
                        <option value="Domestic Economics College">Domestic Economics College</option>
                        <option value="Affiliated 7 Government General Degree College">Affiliated 7 Government General Degree College</option>
                </select> &nbsp;


                <select calss="form-control form-control-lg" name="governance" id="ac_year">
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                </select> &nbsp;

		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/du_affiliated_institutes/delete_affiliated_institutes.php" method="post">
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<button class="btn btn-danger" type="submit">Delete</button>

	</form>
</div>

<?php include 'bottom.php';?>
