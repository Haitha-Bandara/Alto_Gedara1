<?php
include 'conn.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $new_feature =$_POST['New_feature'];

    echo $new_feature;
}

?>