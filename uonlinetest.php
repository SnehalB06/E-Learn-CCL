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
<link rel="stylesheet" type="text/css" href="cssmain\onlinetest.css">
<link rel="stylesheet" href="cssmain\table.css" type="text/css"/>	
</head>

<body>
<div id="wrapper">
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
      <li><a href="books.php">View Books</a></li>
      <li><a href="issue.php">My Issue Status</a></li>
      
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
	<p ><font size='8px' color='#2266FF'><img src="images\onlinetest.jpg" alt="Online Test"
  style="float:left;width:400px;height:150px;"> <b>FREE ONLINE TEST<b></font></p>
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:20px; width: 625px; height:180px">
	<p ><font size='6px' color='#2266FF'><b>APTITUDE TEST<b></font></p>
	<li><a href="http://www.indiabix.com/online-test/aptitude-test/" style="color: black; text-decoration: none">Indiabix.com</a></li>
		<li><a href="http://www.practiceaptitudetests.com/" style="color: black; text-decoration: none">PracticeAptitudeTests.com</a></li>
			<li><a href="http://www.aptitude-test.com/" style="color: black; text-decoration: none">Aptitude-Test.com</a></li>
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:-200px; margin-left:670px; width: 625px; height:180px">
	<p ><font size='6px' color='#2266FF'><b>GATE<b></font></p>
	<li><a href="https://www.wiziq.com/tests/gate" style="color: black; text-decoration: none">Wiziq.com</a></li>
		<li><a href="http://learnhub.com/practice-tests/gate" style="color: black; text-decoration: none">Learnhub.com</a></li>
		    <li><a href="http://www.gate.onlinetestseries.in/free-downloads-previous-year-papers" style="color: black; text-decoration: none">Gate-onlinetestseries.in</a></li>
			    <li><a href="http://www.ipractice.in/engineering-entrance-exam/gate" style="color: black; text-decoration: none">Ipractice.in</a></li>
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:20px; width: 625px; height:180px">
	<p ><font size='6px' color='#2266FF'><b>CAT<b></font></p>
	<li><a href="http://learnhub.com/practice-tests/cat" style="color: black; text-decoration: none">Learnhub.com</a></li>
		<li><a href="http://cat.patshala.com/" style="color: black; text-decoration: none">Patshala.com</a></li>
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:-200px; margin-left:670px; width: 625px; height:180px">
	<p ><font size='6px' color='#2266FF'><b>GRE/TOEFL<b></font></p>
	<li><a href="http://www.4tests.com/gre" style="color: black; text-decoration: none">4Tests.com</a></li>
		<li><a href="http://www.greguide.com/free-gre-full-length-tests/free-full-tests-home.html" style="color: black; text-decoration: none">GREGuide.com</a></li>
			<li><a href="http://www.testden.com/challenge/free-toefl.asp" style="color: black; text-decoration: none">TestDen.com</a></li>
				<li><a href="https://www.ets.org/toefl/ibt/prepare/sample_questions" style="color: black; text-decoration: none">ETS.org</a></li>
</div>

<div id="footer">
<!--Copyrights(TM) 2014 | Team Ozil 11-->
</div>
</div>
</body>
</html>