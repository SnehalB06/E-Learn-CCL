
<?php
$hostname= 'zy4wtsaw3sjejnud.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username= 'jm5yt2mqq91oohli';
$password= 'nijmbv3wx5tx9yto';
$dbname= 'a3vhvpnccog050y7';

$connect = mysqli_connect($hostname,$username,$password,$dbname) or die ("Error Connecting");

    $name = $_POST['name'];
echo $name;

    



?>
