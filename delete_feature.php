<?php
include 'conn.php';

if(isset($_GET['featureID'])){
    $id = $_GET['featureID'];
    $sql = "DELETE FROM `features` WHERE featureID = $id";
    $result = mysqli_query($conn,$sql);

    if ($result){
        header("location:add_new_feature.php");
    }else{
        die(mysqli_error($conn));
    }
}



?>