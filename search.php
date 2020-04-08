
<?php
session_Start();
?>

<?php
$hostname= 'zy4wtsaw3sjejnud.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username= 'jm5yt2mqq91oohli';
$password= 'nijmbv3wx5tx9yto';
$dbname= 'a3vhvpnccog050y7';

$connect = mysqli_connect($hostname,$username,$password,$dbname) or die ("Error Connecting");
$name = $_POST['Name'];
    
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
	
<div style="background-color:white; color:black; padding:20px;margin-left:175px;margin-top:20px; width:900px; height: 300px;border-radius: 20px 20px 20px 20px;">
	<?php

$check_user = "SELECT * 
FROM  `book` 
WHERE  `bname` LIKE  '$name'";
$result =mysqli_query($connect, $check_user);
if ((mysqli_num_rows($result)== 0)){ 
echo "<h4><center>No Books Found</center></h4>";
}
else{

	if(mysqli_num_rows($result) >= 0 ){ 
while($row = mysqli_fetch_array($result))
							{ 	

echo $row['bid'],$row['bname'];
    
							}
						}

else{
echo "<script>alert('Email or password is incorrect!')</script>";
}
}


	?>
</div>
