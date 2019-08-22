<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "University Procurator Rules";
</script>
<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID</th>
		<th> Rules</th>
	</tr>
	<tbody align="left">
		<?php
			$query = "select * from procurator_rules";
			$result = mysqli_query($connection,$query);

			while($row = mysqli_fetch_row($result))
			{
		?>

		<tr>
			<td>  <?php echo $row[0]; ?> </td>
			<td>  <?php echo nl2br( $row[1]); ?> </td>
		
		</tr>

		<?php } ?>

	</tbody>
	</table>
</div>


<div class="container-fluid">
	<form  class="form-inline" action="../server_back/procurator_rules/insert_rule.php" method="post">

		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<textarea class="form-control"  wrap="soft" rows="1" cols="20" name="rule" placeholder="Enter rule"></textarea>&nbsp;
		
		<button class="btn btn-primary" type="submit">Insert</button>

	</form>

</div>


<div class="container-fluid">
	<form class="form-inline" action="../server_back/procurator_rules/update_rule.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
                <textarea class="form-control"  wrap="soft" rows="1" cols="20" name="rule" placeholder="Enter rule"></textarea>&nbsp;
	
		<button class="btn btn-warning" type="submit">Update</button>

	</form>

</div>


<div class = "container-fluid">
	<form class="form-inline" action="../server_back/procurator_rules/delete_rule.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID"> &nbsp;
		<button class="btn btn-danger" type="submit">Delete</button>
	</form>
</div>

<?php include 'bottom.php';?>
