<?php
include 'conn.php';


//function delete ($db,$id){
//    $sql = "DELETE FROM `$db` WHERE idfeatures = $id";
//    $result = mysqli_query($conn,$sql);
//    return $result;
//}

if(isset($_GET['featureID'])){
    $f_id = $_GET['featureID'];
    $sql = "UPDATE`features` SET status='1' WHERE idfeatures = $f_id";
    $result = mysqli_query($conn,$sql);


    if ($result){
        header("location:add_new_feature.php");
    }else{
        die(mysqli_error($conn));
    }


}
elseif(isset($_GET['user'])){
    $u_id = $_GET['user'];
    $sql1 = "UPDATE `seller` SET sellerStatus ='1' WHERE customerID = $u_id";
    $result = mysqli_query($conn,$sql1);


    if ($result){
        header("location:seller.php");
    }else{
        die(mysqli_error($conn));
    }

}



?>