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
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/secondstep.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="thirdstep.php">
		  <br>
              <h2> <u>Add Exam mark </u></h2>
       <table class="table1">
          <h4>  First  Exam(A)</h4>
            <tr> <td>&nbsp;</td> </tr> 
			
            <tr>
    <td align='center'><b>Hindi:</b></td>
    <td><input type='text' name='hindi1'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
            
			 
            <tr>
    <td align='center'><b>English:</b></td>
    <td><input type='text' name='english'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
  <tr>
    <td align='center'><b>Mathematics:</b></td>
    <td><input type='text' name='math1'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
                
               <tr>
    <td align='center'><b>Physics:</b></td>
    <td><input type='text' name='physics1'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
  <tr>
    <td align='center'><b>Chemestry:</b></td>
    <td><input type='text' name='chemestry1'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
            
             
         </table>
           <h4>Second Exam(B)</h4> 
         <table class="table4">
		   <tr> <td>&nbsp;</td> </tr> 
			
            <tr>
    <td align='center'><b>Hindi:</b></td>
    <td><input type='text' name='hindi1'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
            
			 
            <tr>
    <td align='center'><b>English:</b></td>
    <td><input type='text' name='english'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
  <tr>
    <td align='center'><b>Mathematics:</b></td>
    <td><input type='text' name='math1'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
                
               <tr>
    <td align='center'><b>Physics:</b></td>
    <td><input type='text' name='physics1'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
  <tr>
    <td align='center'><b>Chemestry:</b></td>
    <td><input type='text' name='chemestry1'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
         </table>
         
       
       </form>
      </div>
    </header>
    
</body>
</html>
<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $village=$_POST['village'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_class`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_village`, `u_image`) VALUES ('$username','$class','$rollno','$father','$mother','$mobile','$village','$imagename')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>
