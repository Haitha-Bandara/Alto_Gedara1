<?php
$hostname = 'localhost';
$username = 'root';
$password = '1234';
$databaseName = 'carsale';

$conn = mysqli_connect($hostname,$username,$password,$databaseName);
if (!$conn){
    die(mysqli_error($conn));
}
?>
