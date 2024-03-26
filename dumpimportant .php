<?php

$host = "localhost";
$dbname = "silvvy_signature_database";
$username = "root";
$password = "";



$con = mysqli_connect( "localhost", "root", "purple_charteau",);


if (!$con){
    die("connection Error");
}

?>

<?php

require_once('config/dump.php');
$query = "SELECT * FROM apartments WHERE carpark ='1'ORDER BY id DESC LIMIT 4";
$result = mysqli_connect($con,$query);


?>