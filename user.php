<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>
<?php
$hostname= 'zy4wtsaw3sjejnud.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username= 'jm5yt2mqq91oohli';
$password= 'nijmbv3wx5tx9yto';
$dbname= 'a3vhvpnccog050y7';

$connect = mysqli_connect($hostname,$username,$password,$dbname) or die ("Error Connecting");
?>

<html>

<head>

<meta charset="utf-8">
<title>Studious Me</title>
<link rel="stylesheet" type="text/css" href="cssmain\admin.css">

</head>

<body>
<div id="wrapper">
<div id="header">
<br>
<a href="adminhomepage.php"><img src="images\sitelogo.png" alt="sitelogo"
  style="float:left;width:610px;height:120px;"></a>

 <div id="dropdown">
   <ul id="drop-nav" style="font-family:Arial;">
  
  <li><a href="adminhomepage.php">HOME</a>
  </li>
  <li><a href="#">MY ACTION</a>
    <ul>
   <li><a href="abooks.php">Book Database</a></li>
      <li><a href="addbooks.php">Add Library Books</a></li>
      <li><a href="astatus.php">Issue Book</a></li>	
      <li><a href="areturnfine.php">Return Book</a></li>	  	  
	  <li><a href="user.php">Member Database</a></li>
      <li><a href="auploadtry.php">Add E-books</a></li>
      
    </ul>
  </li>
<!--
  <li><a href="#">ABOUT US</a>
    <ul>
	  <li><a href="agoals.php">Our Goals</a></li>
	  <li><a href="amission.php">Mission, Vision & Core Values</a></li>
	  <li><a href="acontactus.php">Contact Us</a></li>
	</ul>
  </li>-->
  <li><a href="#">MY ACCOUNT</a>
    <ul>
	  <li><a href="alogout.php">Logout</a></li>
	</ul>
  </li>	  
</ul>
   
  </div>
</div>
<hr>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:0px; width: 1295px; height:160px">
	<p ><font size='8px' color='#2266FF'><img src="images\userinfo.png" alt="University"
  style="float:left;width:200px;height:150px;"> <b>MEMBER DATABASE<b></font></p>
</div>

<<div style="background-color:white; color:black; padding:20px; margin-top:0px; width:1275px; height:auto">

<table width='800' align='center' border='5'>
   <tr bgcolor='brown'>
		<th>User ID</th>
		<th>User Name</th>
		<th>Roll no</th>
		<th>User Password</th>
		<th>Gender</th>
   </tr>
   <tr>
 <?php
   $query = "select * from user";
   $run = mysqli_query($connect,$query);
 while(($row=mysqli_fetch_array($run)))
 {
	$user_id = $row[0];
	$user_name = $row[1];
	$roll=$row[2];
	$user_pass = $row[3];
	$gen = $row[4];
 ?>
  <td><?php echo $user_id ;?></td>
  <td><?php echo $user_name; ?></td>
  <td><center><?php echo $roll ;?></center></td>
  <td><center><?php echo $user_pass; ?></center></td>
  <td><center><?php echo $gen; ?></center></td>
 </tr>
 <?php } ?>
 </table>
 </div>
 
</body>
</html>
