<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
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
$id=$_GET["book"];
$usernm = $_SESSION['user'];
$query2 = mysqli_query($connect,"SELECT * 
FROM  `issue` 
WHERE  `rollno` =  '$usernm'
AND  `bid` =  '$id'");
$row=mysqli_fetch_array($query2);
$status=$row[5];
$del=$row[0];
if($status=='YES'){
  header("Location:postalready.php");
  echo "You have taken book from library";
}else{
$que=mysqli_query($connect,"DELETE FROM `library`.`issue` WHERE `issue`.`id` = $del");
if($que){
echo "Cancelled";
header("Location:postcancel.php");
} }
?>