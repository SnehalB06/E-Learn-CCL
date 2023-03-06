<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
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
$id=$_GET["book"];
$usernm = $_SESSION['user'];
$query2 = mysqli_query($connect,"SELECT * FROM  `issue` WHERE  `rollno` LIKE  '$usernm'");
$nbook=mysqli_num_rows($query2);
error_reporting(0);
$date=date('Y-m-d');
$row=mysqli_fetch_array($date);
if($nbook>=2){
header("Location:sorry.php");
}
else{
$query=mysqli_query($connect,"INSERT INTO `issue` (`rollno`, `bid`, `date`, `fine`) VALUES ('$usernm', '$id', '$date', '0')");
if($query)
{
header("Location:receipt.php");
echo "<script>alert('Issued')</script>";
}
}

?>

