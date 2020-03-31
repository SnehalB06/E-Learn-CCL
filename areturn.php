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

$delete_id = $_GET['del'];

$query = "delete from issue where id='$delete_id'";
if(mysqli_query($connect,$query)){
echo "<script>alert('book has been returned!')</script>";
header("location:areturnfine.php");
}
?>