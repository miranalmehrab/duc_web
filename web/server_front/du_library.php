<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Facilities of Dhaka University Library";
</script>



<div class = "container-fluid">
	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID </th>
		<th> Description </th>
		<th> Image</th>
	</tr>

	<tbody align="center">
		<?php
			$query = "select * from du_library";
			$result = mysqli_query($connection,$query);
 
			while($row = mysqli_fetch_row($result))
			{
		?>

		<tr>
			<td>  <?php echo $row[0]; ?> </td>
			<td>  <?php echo nl2br($row[1]); ?> </td>
			<td> <img src="<?php echo $row[2]; ?>" height="120" width="200"> </td>
		</tr>

		<?php
			}
		?>

	</tbody>
	</table>
</div>





<div class="container-fluid">
	<form  class="form-inline" action="../server_back/du_library/insert_library.php" method="post">

	<input type="text" name="id" placeholder="Enter ID">&nbsp;
	<!--	<input type="text" name="description" placeholder="Enter Description"> &nbsp; -->
	<textarea class="form-control"  wrap="soft" rows="1" cols="20" name="description" placeholder="Enter Description"></textarea>&nbsp;


	
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
	<form class="form-inline" action="../server_back/du_library/update_library.php" method="post">
	
	<input type="text" name="id" placeholder="Enter ID">&nbsp;
	<!--	<input type="text" name="name" placeholder="Enter Name">&nbsp;-->
	<textarea class="form-control"  wrap="soft" rows="1" cols="20" name="description" placeholder="Enter Description"></textarea>&nbsp;


	
	<input type="file" value="Select image" id="fileButton"/>
       <!-- 	<progress value="0" max="100" id="uploader">%0</progress> -->

        <input type="hidden" name="img_url" id="img_url" >
        


	<script>

   	var fileButton = document.getElementById('fileButton');
    	var uploader = document.getElementById('uploader');
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
	<form class="form-inline" action="../server_back/du_library/delete_library.php" method="post">
	
		<input type="text" name="id" placeholder="Enter ID">&nbsp;
		<button class="btn btn-danger" type="submit">Delete</button>
		
	</form>
</div>

<?php include 'bottom.php';?>
