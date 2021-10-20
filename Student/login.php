<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');	
}
?>
<html>
<head>
    <title>Login</title>
<link rel="stylesheet" href="csss/login.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php"><b>Homepage</b></a></li>
                <li><a href="admin/aboutus.php"><b>About us</b></a></li>
                <li><a href="admin/contactus.php"><b>Contact Us</b></a></li>
                
            </ul>
        </div>
      </nav>
      <div class="login-content-header">
          <form action="login.php" method="post">
          <br><br> <h1 class="login_heading"><b><font color="white">Login</b></h1></font><br><br>
           <table class="form1">
            <tr>
            <th><h2>Username<h2> </th>
            <td class="table"><input type="text" name="username" placeholder="Username"/></td>  
            </tr> 
            <tr> <td>&nbsp;</td> </tr> 
            
            <tr >
            <th><h2>Password </h2></th>
            <td class="table"><input type="password" name="password" placeholder="*********"/></td>
            </tr>   
            <tr> <td>&nbsp;</td> </tr> 
            <tr> <td>&nbsp;</td> </tr> 
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="submit" class="submit"/></td>
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
    include('dbcon.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.open('login.php','_self');
        </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location:admin/admindash.php');
    }
}
?>