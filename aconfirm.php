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


<?php 

$confirm_id = $_GET['con'];

$query = "UPDATE  `issue` SET  `status` =  'YES' WHERE  id='$confirm_id'";
if(mysqli_query($connect,$query))
	header("Location:astatus.php");
  
?>
