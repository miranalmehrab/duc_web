<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		echo "<script> location.href = 'log_in.php'</script>";

	}
?>
	<html>

	<head>
   	 	<title>Welcome admin!</title>
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "icon" type ="image/png" href = "https://firebasestorage.googleapis.com/v0/b/signindemo-f56a8.appspot.com/o/DU_images%2Fdulogo.png?alt=media&token=b59ab209-e81b-4b22-9485-c4fb6b525311">
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


		<style>
			footer
			{
				position:fixed;
				left: 0;
				bottom: 0;
				height: 100px;
				width:100%;
				text-align:center;
				padding-top: 40px;
				background-color:  #0099ff;
			}

			
	
			body
			{
				background: linear-gradient(to bottom, #33ccff 0%, #0099ff 100%);
				margin-bottom: 120px;
			/*	height: 100%;
				width: 100%;*/
			}

		
			{	
			background-image: url("https://firebasestorage.googleapis.com/v0/b/signindemo-f56a8.appspot.com/o/DU_images%2Fcomputer-3163436.svg?alt=media&token=563631a8-850f-4669-881e-837b2e96ab3a");
				margin-bottom: 120px;
			}
		
			nav
			{
				background-color : #00ccff;
			}
			
			.table th
			{
				text-align : center;
			}
			
			textarea
			{
				resize: none;
			}
		</style>



	</head>


	<body>

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


	//document.querySelector('img').src = ;


	</script>

    	<nav class="navbar navbar-expand-lg justify-content-center">
      <a class="navbar-brand" href="http://www.du.ac.bd/">
					<img src="https://firebasestorage.googleapis.com/v0/b/signindemo-f56a8.appspot.com/o/DU_images%2Fdulogo.png?alt=media&token=b59ab209-e81b-4b22-9485-c4fb6b525311" alt="Logo">
			</a>

	 	<ul class="nav ">
			<li class="nav-item"> <a class="nav-link text-white" href="home.php">Home</a> </li>
        		<li class="nav-item"> <a class="nav-link text-white" href="history_of_du.php">History</a> </li>
		 	<li class="nav-item"> <a class="nav-link text-white" href="faculty.php">Faculty</a> </li>
			<li class="nav-item dropdown">
                		<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Departments</a>
                		<div class="dropdown-menu">
                			<a class="dropdown-item" href="faculty_of_sciences.php">Faculty of Sciences</a>
                    			<a class="dropdown-item" href="faculty_of_arts.php">Faculty of Arts</a>
                			<a class="dropdown-item" href="faculty_of_law.php">Faculty of Law </a>
					<a class="dropdown-item" href="faculty_of_business_studies.php">Faculty of Business Studies</a>
					<a class="dropdown-item" href="faculty_of_social_sciences.php">Faculty of Social Sciences</a>
					<a class="dropdown-item" href="faculty_of_biological_sciences.php">Faculty of Biological Science</a>
					<a class="dropdown-item" href="faculty_of_pharmacy.php">Faculty of Pharmacy</a>
					<a class="dropdown-item" href="faculty_of_earth_and_environmental_sciences.php">Faculty of Earth and Envirnmental Sciences</a>
					<a class="dropdown-item" href="faculty_of_engineering_and_technology.php">Faculty of Engineering & Technology</a>
					<a class="dropdown-item" href="faculty_of_fine_art.php">Faculty of Fine Art</a>
					<a class="dropdown-item" href="institutes.php">Institutes</a>
					<a class="dropdown-item" href="faculty_of_education.php">Faculty of Education </a>
					<a class="dropdown-item" href="faculty_of_medicine.php">Faculty of Medicine</a>
					<a class="dropdown-item" href="faculty_of_postgraduate_sciences_and_research.php">Faculty of Postgraduate Medical Sciences & Research</a>
			
                		</div>
            		</li>

	            	<li class="nav-item"> <a class="nav-link text-white" href="offices.php">Offices</a> </li>
	            	<li class="nav-item"> <a class="nav-link text-white" href="halls.php">Halls</a> </li>
	            	<li class="nav-item"> <a class="nav-link text-white" href="clubs.php">Clubs</a> </li>
	            	<li class="nav-item"> <a class="nav-link text-white" href="transports.php">Transports</a> </li>
	            	<li class="nav-item"> <a class="nav-link  text-white" href="exciting_place.php">Exciting Places</a> </li>

            		<li class="nav-item dropdown">
	                	<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Calendar</a>
	                	<div class="dropdown-menu">
	                    		<a class="dropdown-item " href="calendar.php">General calendar</a>
	                    		<a class="dropdown-item " href="specific_calendar.php">Specific calendar</a>
					<a class="dropdown-item " href="sports_calendar.php">Sports calendar</a>
                    			<a class="dropdown-item " href="club_calendar.php">Clubs calendar</a> 
				</div>
	            	</li>

	           	<li class="nav-item dropdown">
	                	<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown"> Governing Body </a>
	                	<div class="dropdown-menu">
					<a class="dropdown-item " href="head_of_du.php"> Head of University </a>
	                    		<a class="dropdown-item " href="dean.php"> Deans of Faculties</a>
	                    		<a class="dropdown-item " href="editorial_comm.php">Editorial Committee</a>
	                    		<a class="dropdown-item " href="implementation_comm.php">Implementation Committee</a>
					<a class="dropdown-item " href="head_of_dept.php"> Chairman of departments</a>               	
			 		<a class="dropdown-item " href="director_of_institute.php"> Director of Institutes</a>
					<a class="dropdown-item " href="board_of_proctor.php"> Board of proctor</a>
		 			<a class="dropdown-item " href="provost_of_hall.php"> Provost/ Warden of hall/ hostel</a>		
					<a class="dropdown-item " href="head_of_office.php"> Head of the offices</a>
					<a class="dropdown-item " href="chairman_of_bureaus.php">Director of the bureaus & research center</a>

				</div>
	            	</li>
			<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">New</a>
                                <div class="dropdown-menu">
                                        <a class="dropdown-item" href="grading_system.php">Uniform grading system</a>
					<a class="dropdown-item" href="du_affiliated_institutes.php">Affiliated Institutes</a>
                                       	<a class="dropdown-item" href="procurator_rules.php">University procurator rules</a>
					<a class="dropdown-item" href="medical_center.php">University medical center</a>
                                	<a class="dropdown-item" href="deans_award.php">Deans award</a>
					<a class="dropdown-item" href="list_of_deans_award.php">List of deans award</a>
					<a class="dropdown-item" href="du_library.php">Library of Dhaka University</a>
					<a class="dropdown-item" href="international_achievement.php">Achievements at national and international level</a> 
					<a class="dropdown-item" href="university_scholarship.php">List of University Students / University Scholarships</a>
				</div>
                        </li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown"> More</a>
				<div class="dropdown-menu">
					<a class="nav-link text-dark" href="admins.php">Admins</a> 
	            			<a class="nav-link text-dark" href="../server_back/log_out.php">Log out</a>
				</div>
			</li>
	        </ul>
	</nav>
