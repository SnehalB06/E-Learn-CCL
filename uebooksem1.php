<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
<!-- Javascript -->
<link rel="stylesheet" type="text/css" href="cssmain\user.css">
<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
<!-- Javascript -->
</head>

<body>
<div id="wrapper">
<?php
$usernm = $_SESSION['name'];
?>
<div id="header">
<br>
<a href="userhomepage.php"><img src="images\sitelogo.png" alt="sitelogo"
  style="float:left;width:600px;height:120px;"></a>

 <div id="dropdown">
   <ul id="drop-nav" style="font-family:Arial;">
  
  <li><a href="userhomepage.php">HOME</a>
  </li>
  <li><a href="#">MY ACTION</a>
    <ul>
      <li><a href="books.php">View Library Books</a></li>
      <li><a href="issue.php">My Issue Status</a></li>
      <li><a href="dbookstry.php">Download E-Books</a></li>
      
    </ul>
  </li>
	   
  <li><a href="#">STUDY RESOURCES</a>
    <ul>
      <li><a href="usyllabus.php">Syllabus</a></li>
      <li><a href="uebooks.php">E-books</a></li>
	  <li><a href="upapers.php">University Papers</a></li>
	  <li><a href="uonlinetest.php">Free Online Test</a></li>
    </ul>
  </li>
  
  <!--<li><a href="#">ABOUT US</a>
    <ul>
	  <li><a href="ugoals.php">Our Goals</a></li>
	  <li><a href="umission.php">Mission, Vision & Core Values</a></li>
	  <li><a href="ucontactus.php">Contact Us</a></li>
	</ul>
  </li>-->
  <li><a href="#">MY ACCOUNT</a>
    <ul>
	  <li><a href="profile.php">View Profile</a></li>
	  <li><a href="logout.php">Logout</a></li>
	</ul>
  </li>	  
</ul>
   
  </div>
</div>
<hr>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:0px; width: 1295px; height:160px">
	<p ><font size='8px' color='#2266FF'><img src="images\ebook.jpg" alt="University"
  style="float:left;width:400px;height:150px;"> <b>E-BOOKS<b></font></p>
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b>First Year (FE) SEM 1 BOOKS:<b></font></p>
		
		<a href='ebooks/BEE.pdf'><font size='5px' color='green'><b>BASIC ELECTRICAL & ELECTRONICS ENGG<b></font></a><hr>
		<a  href='ebooks/Physics.pdf'><font size='5px' color='green'><b>APPLIED MATHEMATICS 1<b></font></a><hr>
		<a  href='ebooks/EVS.pdf'><font size='5px' color='green'><b>ENVIRONMENTAL STUDIES<b></font></a><hr>
		<a  href='ebooks/CHE.pdf'><font size='5px' color='green'><b>APPLIED PHYSICS 1<b></font></a><hr>
		<a  href='ebooks/Physics.pdf'><font size='5px' color='green'><b>APPLIED CHEMISTRY 1<b></font></a><hr>
		<a  href='ebooks/EM.pdf'><font size='5px' color='green'><b>ENGINEERING MECHANICS<b></font></a><hr>	
		<a  href='ebooks/EVS.pdf'><font size='5px' color='green'><b>ENVIRONMENTAL STUDIES<b></font></a><hr>
</div>	
<div id="footer">
<!--Copyrights(TM) 2014 | Team Ozil 11-->
</div>
</div>
</body>
</html>
