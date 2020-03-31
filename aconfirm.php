<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}
?>

<?php
$hostname= 'localhost';
$username= 'root';
$password= '';
$dbname= 'library';

$connect = mysqli_connect($hostname,$username,$password,$dbname) or die ("Error Connecting");
?>


<?php 

$confirm_id = $_GET['con'];

$query = "UPDATE  `library`.`issue` SET  `status` =  'YES' WHERE  id='$confirm_id'";
if(mysqli_query($connect,$query))
	header("Location:astatus.php");
  
?>
