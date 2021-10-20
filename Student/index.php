<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="csss/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          
		
	<br><br>	<h1><b>STUDENT RESULT MANAGEMENT SYSTEM<h1></b>
            <ul class="main-nav" animate slideInDown>
		 
                <li><a href="index.php">Home</a></li>
                <li><a href="admin/aboutus.php">About Us</a></li>
                <li><a href="admin/contactus.php">Contact Us</a></li>
                <li><a href="login.php">Admin Login</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form action="result.php" method="post">
          <table class="table">
         <br>     <h1 class="search"><b><font color="White">Get Your Result !!<b></h1><br></font>
            <tr>
                <th class="name1"><h2>Rollno<h2></th>
                <td class="name2"><input type="text" name="rollno" required/></td>
            </tr>
            <tr>
                <th class="standered1"><h2>Class<h2></th>
                <td class="standered2"><input type="text" name="std" required/></td>
            </tr> 
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="submit" class="submit"/></td>
            </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>
