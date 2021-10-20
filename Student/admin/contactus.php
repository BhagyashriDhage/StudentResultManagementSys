<html>
<head>
    <title>Contact Us</title>
<link rel="stylesheet" href="../csss/contactus.css" type="text/css">
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
                <li><a href="../login.php">Admin Login</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method='post'>
         <table class="table1">
            <h1 align="center"><br> Contact Us</h1>
			 <tr>
    <td align='center'><br><h2><b>Name:</b></h2></td>
    <td><input type='text' name='name'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
             <tr>
    <td align='center'><b><h2>Email:</h2></b></td>
    <td><input type='text' name='email'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> <tr>
    <td align='center'><br><b><h2>Phone No:</h2></b></td>
    <td><input type='text' name='phoneno'></td>
</tr>
<tr> <td>&nbsp;</td> </tr> 
            <tr>
                <th class='tblheading'><h2>Type Message:</h2></th>
              
                <td ><textarea class='tbldata1' name="massage" placeholder='Type here...' align="center"></textarea></td>
              </tr>
             
             
              
<tr> <td>&nbsp;</td> </tr> 
		<tr>	
                 <td colspan='2' align='center'><input type="submit" value="Send" name="submit" class="submit"/></td>
            </tr>
            </table>
			
              
       </form>
      </div>
    </header>
    
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $username=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['cont'];
    $massage=$_POST['massage'];
    $sql="INSERT INTO `user_massage`(`u_name`, `u_email`, `u_contact`, `u_massage`) VALUES ('$username','$email','$contact','$massage')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
      <script>
      alert('Your Massage send to Admin');

     </script>
   <?php
    }
}

?>