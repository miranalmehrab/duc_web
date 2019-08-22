<html>

    <head>
       	<title>Please log in to continue!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" type ="image/png" href = "https://firebasestorage.googleapis.com/v0/b/signindemo-f56a8.appspot.com/o/DU_images%2Fdulogo.png?alt=media&token=b59ab209-e81b-4b22-9485-c4fb6b525311">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		body
		{
			
		}
	</style>

</head>


    <body>

	 <div class="jumbotron blue-gradient color-block text-center">
            <h1>Dhaka University Calendar Admin Panel</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>

		 <div class="col-md-4">
                    <form class = "text-center p-5"action="../server_back/validate_admin.php" method="post">

			<p class = "h4 mb-4">Sign in to continue</p>
			 <div class="form-group">
                            <input type="name" class="form-control" name="name" placeholder="Enter user name">
  	                </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter user password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" data-toggle="tooltip" title="You are ready to go!">Sign in</button>
                    </form>
                </div>

		 <div class="col-md-4"></div>
            </div>
        </div>

    </body>
</html>
