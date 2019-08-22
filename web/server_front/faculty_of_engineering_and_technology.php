<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Faculty of Engineering & Technology";
</script>



<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID </th>
		<th> Name </th>	
		<th> Description </th>
		<th> Latitude </th>
		<th> Longitude </th>
		<th> Image</th>
	</tr>

	<tbody>
		<?php
			$query = "select * from faculty_of_engineering_and_technology";
			$result = mysqli_query($connection,$query);
 
			while($row = mysqli_fetch_row($result))
			{
		?>

		<tr>
			<td>  <?php echo $row[0]; ?> </td>
			<td>  <?php echo $row[1]; ?> </td>
			<td>  <?php echo nl2br($row[2]); ?> </td>
			<td>  <?php echo $row[4]; ?> </td>
			<td>  <?php echo $row[5]; ?> </td>
			<td> <img src="<?php echo $row[3]; ?>" height="120" width="200"> </td>
		</tr>

		<?php
			}
		?>

	</tbody>
	</table>
</div>





<div class="container-fluid">
	<form  class="form-inline" action="../server_back/department/insert_department.php" method="post">

	<input type="text" name="id" placeholder="Enter ID"> &nbsp;
	<input type="text" name="name" placeholder="Enter Name"> &nbsp;
<!--	<input type="text" name="description" placeholder="Enter Description"> &nbsp; -->
	<textarea class="form-control"  wrap="soft" rows="1" cols="20" name="description" placeholder="Enter Description"></textarea>&nbsp;


	<input type="text" name="latitude" placeholder="Enter Latitude"> &nbsp;
	<input type="text" name="longitude" placeholder="Enter Longitude"> &nbsp;

	<input type="hidden" name="faculty_name" value="commerce">
	<input type="hidden" name="table_name" value="faculty_of_engineering_and_technology"> 
  
	<input type="file" value="Select image" id="fileButton2"/>
       <!-- 	<progress value="0" max="100" id="uploader2">%0</progress> -->
        <input type="hidden" name="img_url" id="img_url" >
        


	<script>

   	var fileButton = document.getElementById('fileButton2');
    	var uploader = document.getElementById('uploader2');
       	fileButton.addEventListener('change', function(e) {
        
	//get file
        var file = e.target.files[0];

        //create storage ref
        var storageRef = firebase.storage().ref('DU_images/'+ file.name);

        //upload files
        var task = storageRef.put(file);

        //update progress bar
        task.on('state_changed',
          function progress(snapshot)
          {
            //var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            //uploader.value = percentage;
          },

          function error(err)
          {

          },

          function complete()
          {
            //var resultURL = storageRef.fullPath;
            
            storageRef.getDownloadURL().then(function(url) {
            var test = url;
            alert(test);

            //document.querySelector('img').src = test;
            document.getElementById('img_url').value = url;

         }).catch(function(error) {

         });

	});
	});

	</script>

	&nbsp;	
	<button class="btn btn-primary" type="submit">Insert</button>
	
		
	</form>

</div>








<div class="container-fluid">
	<form class="form-inline" action="../server_back/department/update_department.php" method="post">
	
	<input type="text" name="id" placeholder="Enter ID"> &nbsp;
	<input type="text" name="name" placeholder="Enter Name"> &nbsp;
<!--	<input type="text" name="description" placeholder="Enter Description"> &nbsp; -->
	<textarea class="form-control"  wrap="soft" rows="1" cols="20" name="description" placeholder="Enter Description"></textarea>&nbsp;


	<input type="text" name="latitude" placeholder="Enter Latitude"> &nbsp;
	<input type="text" name="longitude" placeholder="Enter Longitude"> &nbsp;

	<input type="hidden" name="faculty_name" value="commerce">
	<input type="hidden" name="table_name" value="faculty_of_engineering_and_technology">
  
	<input type="file" value="Select image" id="fileButton2"/>
       <!-- 	<progress value="0" max="100" id="uploader2">%0</progress> -->
        <input type="hidden" name="img_url" id="img_url" >
        


	<script>

   	var fileButton = document.getElementById('fileButton2');
    	var uploader = document.getElementById('uploader2');
       	fileButton.addEventListener('change', function(e) {
        
	//get file
        var file = e.target.files[0];

        //create storage ref
        var storageRef = firebase.storage().ref('DU_images/'+ file.name);

        //upload files
        var task = storageRef.put(file);

        //update progress bar
        task.on('state_changed',
          function progress(snapshot)
          {
            //var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            //uploader.value = percentage;
          },

          function error(err)
          {

          },

          function complete()
          {
            //var resultURL = storageRef.fullPath;
            
            storageRef.getDownloadURL().then(function(url) {
            var test = url;
            alert(test);

            //document.querySelector('img').src = test;
            document.getElementById('img_url').value = url;

         }).catch(function(error) {

         });

	});
	});

	</script>
	&nbsp;
	<button class="btn btn-warning" type="submit">Update</button>
		
	</form>

</div>










<div class = "container-fluid">
	<form class="form-inline" action="../server_back/department/delete_department.php" method="post">
	
	<input type="text" name="id" placeholder="Enter ID"> &nbsp;
	<input type="hidden" name="table_name" value="faculty_of_engineering_and_technology">
	<button class="btn btn-danger" type="submit">Delete</button>
		
	</form>
</div>

<?php include 'bottom.php';?>
