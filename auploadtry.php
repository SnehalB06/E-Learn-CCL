<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>
<?php
$hostname= 'yjo6uubt3u5c16az.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username= 'xz89a2tmtgd0ekjo';
$password= 'a0lgq3ti44bboju6';
$dbname= 'dvqr93c2ny1887yw';

$connect = mysqli_connect($hostname,$username,$password,$dbname) or die ("Error Connecting");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
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
<div style="background-color:white; color:black; padding:20px;margin-left:175px;margin-top:20px; width:900px; height: 515px;border-radius: 20px 20px 20px 20px;">

<p style="color:black;text-align:center;font-size: 40px"><b>ADD BOOKS HERE</b></p>
<form style="text-align:center" action="auploadtry.php" method="post" enctype="multipart/form-data">
 <input type="file" name="file" />
 <button type="submit" name="btn-upload">upload</button>
 </form>
 </div>
 <?php
if(isset($_POST['btn-upload']))
{    
     
 $file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
  mysqli_query($connect,$sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='auploadtry.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='auploadtry.php?fail';
        </script>
  <?php
 }
}
?>
