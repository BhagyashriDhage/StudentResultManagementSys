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
    <title>Add Mark</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
		
            <ul class="main-nav" animate slideInDown>
			<br>
         <h1 align="center"><b>STUDENT RESULT MANAGEMENT SYSTEM</b></h1>
		 <br>
                <li class="logout"><a href="admindash.php"><b>Dashboard</b></a></li>
                <li><a href="../index.php"><b>Home</b></a></li>
                <li><a href="aboutus.php"><b>About Us</b></a></li>
                <li><a href="contactus.php"><b>Contact Us</b></a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2><b> Student Details</b></h2>
        <form method="post" enctype="multipart/form-data" action="secondstep.php">
            <table class="table1">
            <tr>
    <td align='center'><b>Name:</b></td>
    <td><input type='text' name='name'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
 <tr>
    <td align='center'><b>Class:</b></td>
    <td><input type='text' name='class'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
		 <tr>
    <td align='center'><b>Roll No:</b></td>
    <td><input type='text' name='roll'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
             
          
			  <tr>
    <td align='center'><b>Father Name:</b></td>
    <td><input type='text' name='father'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
 <tr>
    <td align='center'><b>Mother Name:</b></td>
    <td><input type='text' name='mother'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
 <tr>
    <td align='center'><b>Mobile No:</b></td>
    <td><input type='text' name='mobile'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
 <tr>
    <td align='center'><b>City Name:</b></td>
    <td><input type='text' name='village'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
            
       
           <tr>
               <th>Select Image -</th>
               <td><input type="file" name="img" required/></td>
           </tr> 
		   <tr> <td>&nbsp;</td> </tr> 
         
        
		 <tr> <td>&nbsp;</td> </tr> 
            <tr>
           <td align="center" colspan="2"><input type="submit" name="submit1" value="Next Step"/></td>  
           </tr>
        </table>
       </form>
      </div>
    </header>
    
</body>
</html> 
