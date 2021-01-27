<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
	<title>Reva University</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->



<?php

session_start();


include('db-connect.php');

//include Md-bootstrap link
include("libs/md-bootstrap-cdn-link.php");

?>


</head>
<body>


<!--Main Navigation-->

<?php
//import navigation bar
include('nav-bar.php');

?>
<!--Main Navigation-->




<div class="container" style="padding-top: 20px;">
  <div class="row">
    <div class="col-sm col-md-2 col-lg">
     
    </div>


    <div class="col-sm-12 col-md-8 col-lg-8">


		<?php

    		if(!isset($_POST['submit']))
    		{
    			include('login-design.php');
    		}
    		else
    		{

    			$username = mysqli_real_escape_string($con, $_POST['username']); 
    			$password = mysqli_real_escape_string($con, $_POST['password']); 	
    			

				// first check the database to make sure 
				// a user does not already exist with the same username and/or email
				$user_check_query = "SELECT UserName AND Password FROM employee WHERE UserName='$username' AND Password='$password' LIMIT 1";
				
				$check = MYSQLI_QUERY($con, $user_check_query);

				if(mysqli_num_rows($check)==1)
				{
					$_SESSION['username'] = $username;
					header("location:_admin/index.php");
				}
				else
				{
					include('login-design.php');
					include('warning/login-error.php');


					mysqli_close($con);


				}


    		}


    	?>



    </div>

    <div class="col-sm col-md-8 col-lg">
      
    </div>

  </div>
</div>







</body>
</html>