<?php
session_start();
if(!isset($_SESSION['user2'])){
 header("location:adminlogin.php?problem = not logged in");
 exit();
}?>

<?php
$hostname= 'zy4wtsaw3sjejnud.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username= 'jm5yt2mqq91oohli';
$password= 'nijmbv3wx5tx9yto';
$dbname= 'a3vhvpnccog050y7';

$connect = mysqli_connect($hostname,$username,$password,$dbname) or die ("Error Connecting");
?>

<?php
$delete_id = $_GET['del'];

$query = "delete from user where id='$delete_id'";
if(mysqli_query($connect,$query)){
echo "<script>alert('user has been deleted!')</script>";
header("location:user.php");
}
?>
