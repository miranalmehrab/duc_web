<html>
    <head>
        <title>Connect to firebase</title>



    </head>
    <body>

        <input type="file" value="Select image" id="fileButton"/>
        <progress value="0" max="100" id="uploader">%0</progress>
        <p id="show"></p>
        <img height="200px" width="200px"/>


        <script src="https://www.gstatic.com/firebasejs/5.10.0/firebase.js"></script>
        <script>
        // Initialize Firebase
            var config = {
        apiKey: "AIzaSyBWU26tBSECLWyxSdPTHwiGfNFfUwpGowQ",
        authDomain: "signindemo-f56a8.firebaseapp.com",
        databaseURL: "https://signindemo-f56a8.firebaseio.com",
        projectId: "signindemo-f56a8",
        storageBucket: "signindemo-f56a8.appspot.com",
        messagingSenderId: "136499857355"
    };
    firebase.initializeApp(config);
	</script>
	<script>

    var fileButton = document.getElementById('fileButton');
    var uploader = document.getElementById('uploader');
    var textP = document.getElementById('show');

    fileButton.addEventListener('change', function(e)
      {
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
            var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            uploader.value = percentage;
          },

          function error(err)
          {

          },

          function complete()
          {
            //var resultURL = storageRef.fullPath;
            //textP.innerHTML = resultURL;



            storageRef.getDownloadURL().then(function(url) {
             var test = url;
             alert(url);

             document.querySelector('img').src = test;
             textP.innerHTML = url;

         }).catch(function(error) {

         });



          }

        );


      }


    );



    </script>


  <!--
    <script src="connect.js"></script>
  -->

    </body>



</html>
