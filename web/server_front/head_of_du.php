<?php include '../server_back/connection.php' ;?>
<?php include 'top.php';?>

<script>
	document.title = "Head of Dhaka University";
</script>

<div class="container-fluid">

	<table class = "table table-bordered table-light table-striped table-hover">
	<thead>
	<tr>
		<th> ID </th>
		<th> Rank </th>
		<th> Name </th>
		<th> Eduactional qualification</th>	
		<th> Image</th>
	</tr>

	<tbody align="center">
		<?php
			$query = "select * from head_of_du";
			$result = mysqli_query($connection,$query);
 
			while($row = mysqli_fetch_row($result))
			{
		?>

		<tr>
			<td>  <?php echo $row[0]; ?> </td>
			<td>  <?php echo $row[1]; ?> </td>
			<td>  <?php echo $row[2]; ?> </td>
			<td>  <?php echo $row[3]; ?> </td>
			<td> <img src="<?php echo $row[4]; ?>" height="120" width="170"> </td>
		</tr>

		<?php
			}
		?>

	</tbody>
	</table>


</div>
<div class="container-fluid">

	<form  class="form-inline" action="../server_back/head_of_du/insert_head.php" method="post">

	<input type="text" name="id" placeholder="Enter ID"> &nbsp;
	<input type="text" name="rank" placeholder="Enter Rank"> &nbsp;
	<input type="text" name="name" placeholder="Enter Name"> &nbsp;
	<input type="text" name="educational_qualification" placeholder="Enter Educational Qualification"> &nbsp;
	<input type="file" value="Select image" id="fileButton2"/> &nbsp;
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


	<button class="btn btn-primary" type="submit">Insert</button>
	
		
	</form>

</div>



<div class="container-fluid">

	<form class="form-inline" action="../server_back/head_of_du/update_head.php" method="post">
	
	<input type="text" name="id" placeholder="Enter ID"> &nbsp;
	<input type="text" name="rank" placeholder="Enter Rank"> &nbsp;
	<input type="text" name="name" placeholder="Enter Name"> &nbsp;
	<input type="text" name="educational_qualification" placeholder="Enter Educational Qualification"> &nbsp;
	<input type="file" value="Select image" id="fileButton"/> &nbsp;
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

	<button class="btn btn-warning" type="submit">Update</button>
		
	</form>

	</div>
	

	<div class="container-fluid">

	<form class="form-inline" action="../server_back/head_of_du/delete_head.php" method="post">
	
	<input type="text" name="id" placeholder="Enter ID"> &nbsp;
	<button class="btn btn-danger" type="submit">Delete</button>
		
	</form>

</div>




<?php include 'bottom.php';?>
