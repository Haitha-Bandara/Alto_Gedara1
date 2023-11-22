<?php
$hostname = 'localhost';
$username = 'root';
$password = '1234';
$databaseName = 'alto_gedara';

$conn = mysqli_connect($hostname,$username,$password,$databaseName);
if (!$conn){
    die(mysqli_error($conn));
}
?>
