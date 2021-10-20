<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<html>
<head>
    <title>Welcome To Admindash</title>
<link rel="stylesheet" href="../csss/admindash.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
        <br><br>  <h1>STUDENT RESULT MANAGEMENT SYSTEM</h1>
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php"><b>Home</b></a></li>
                <li><a href="aboutus.php"><b>About Us</b></a></li>
                <li><a href="contactus.php"><b>Contact Us</b></a></li>
                <li class="logout"><a href="logout.php"><b>Logout</b></a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
       <h3><a href="addmark.php">1. Add Mark </a></h3><br>
       <h3><a href="updatemark.php">2. Update Mark </a></h3><br>
       <h3><a href="deleteform.php">3. Delete Mark </a></h3><br>
       <h3><a href="allstudentdata.php">4. All Student Data </a></h3><br>
       <h3><a href="usermassage.php">5. User Massage </a></h3><br>
      </div>
    </header>
    
</body>
</html>