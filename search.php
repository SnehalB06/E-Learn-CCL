
<?php
session_Start();
?>

<?php
$hostname= 'yjo6uubt3u5c16az.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username= 'xz89a2tmtgd0ekjo';
$password= 'a0lgq3ti44bboju6';
$dbname= 'dvqr93c2ny1887yw';

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
	
<div style="background-color:white; color:black; padding:20px;margin-left:175px;margin-top:20px; width:900px; height: 500px;border-radius: 20px 20px 20px 20px;">
<?php

$check_book = "SELECT * 
FROM  `book` 
WHERE  `bname` LIKE '$name%' limit 2";
$result =mysqli_query($connect, $check_book);

if ((mysqli_num_rows($result)== 0)){

?>
<center>


<?php
echo "<h4><center>No Books Found</center></h4>";
}
else{
echo "<center><h4>Book Found at Library </h4></center>";

	if(mysqli_num_rows($result) >= 0 ){ 
while($row = mysqli_fetch_array($result)){ 

?>
<hr>
<center>
<div class="book" style="columns: 400px 1">
	<label for="Bname">Book Name:<?php echo $row['bname']; ?></label>
	<br>
	<label for="Bname">Publication: <?php echo $row['pub']; ?></label><br>
	<label for="Bname">Author: <?php echo $row['author']; ?></label>
	<br>
	<label for="Bname">Branch: <?php echo $row['bran']; ?></label>
	
</div>
<?php
}

}

else{
echo "<script>alert('Books Not Found!')</script>";
}
}

	?>
	<hr>
<?php

$check_uploads = "SELECT  *
FROM  `tbl_uploads` 
WHERE  `file` LIKE  '$name%'";
$result_upload =mysqli_query($connect, $check_uploads);


if ((mysqli_num_rows($result_upload)== 0)){ 
echo "<h4><center>No Books Found</center></h4>";
}
else{
echo "<center><h4>E-Book Found </h4></center>";

	if(mysqli_num_rows($result_upload) >= 0 ){ 
while($row1 = mysqli_fetch_array($result_upload))
							{ 	

?>
<hr>
<center>
<div class="book" style="columns: 400px 1">
	<label for="Bname">Book Name:<?php echo $row1['file']; ?></label>
	<br>
	
</div>

<?php
							}
						}

else{
echo "<script>alert('Books Not Found!')</script>";
}
}


	?>
	</center>

</div>
