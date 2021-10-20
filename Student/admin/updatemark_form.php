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
<?php
include('../dbcon.php');
$rollno=$_GET['sid'];


$sql="SELECT * FROM `student_data` WHERE `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$class=$row['u_class'];

$sql2="SELECT * FROM `user_mark` WHERE `u_class`='$class'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);

//combine Table///


?>
<html>
<head>
    <title>Update Mark Detail</title>
<link rel="stylesheet" href="../csss/updatemark_form.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
       
            <ul class="main-nav" animate slideInDown>
                <li><a href="admindash.php">Dashboard</a></li>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="update_mark_data.php">
              <table>
             <h4> 
             


                <tr>
                  <th>Student Name: </th>
                  <td><span class="span"><?php echo $row['u_name']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Class: </th>
                  <td><span class="span"><?php echo $row['u_class']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Rollno: </th>
                  <td><span class="span"><?php echo $row['u_rollno']; ?></span></td>
                </tr>
              </h4>
                  </table>
          <table class="table1">
              <span> <h4 class="h_3">First Exam (A)</h4></span>
              <tr>
    <td align='center'><b>Hindi:</b></td>
    <td><input type='text' name='hindi1' value="<?php echo $data['u_hindi1']; ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
              <tr>
    <td align='center'><b>English:</b></td>
    <td><input type='text' name='english1' value="<?php echo $data['u_english1']; ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Mathematics:</b></td>
    <td><input type='text' name='math1' value="<?php echo $data['u_math1']; ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 

            
          
             
             <tr>
    <td align='center'><b>Physics:</b></td>
    <td><input type='text' name='physics1' value="<?php echo $data['u_physics1']; ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Chemestry:</b></td>
    <td><input type='text' name='chemestry1' value="<?php echo $data['u_chemestry1']; ?>"></td>
</tr>

                 </table>
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
         <tr>
    <td align='center'><b>Hindi:</b></td>
    <td><input type='text' name='hindi2' value="<?php echo $data['u_hindi2']; ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
              <tr>
    <td align='center'><b>English:</b></td>
    <td><input type='text' name='english2' value="<?php echo $data['u_english2']; ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><b>Mathematics:</b></td>
    <td><input type='text' name='math2' value="<?php echo $data['u_math2']; ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
<tr>
    <td align='center'><b>Physics:</b></td>
    <td><input type='text' name='physics2' value="<?php echo $data['u_physics2']; ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>

<tr>
    <td align='center'><b>Chemestry:</b></td>
    <td><input type='text' name='chemestry2' value="<?php echo $data['u_chemestry']; ?>"></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 


             <td><input type="hidden" name="rollno" value="<?php echo $row['u_rollno']; ?>"/></td>
            </tr>
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
             
         </table>
         
       
       </form>
      </div>
    </header>
    
</body>
</html>