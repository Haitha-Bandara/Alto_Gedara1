<?php
include 'conn.php';

$seller_ID =$_GET['seller'];
echo $seller_ID;

//set seller data for values
$getSQL="SELECT * FROM `seller` WHERE customerID='$seller_ID' LIMIT 1 ";
$getResult = mysqli_query($conn,$getSQL);
if($dataIN=mysqli_fetch_array($getResult)){
        $f_name = $dataIN['first_name'];
        $l_name = $dataIN['last_name'];
        $nicG = $dataIN['nic'];
        $mobile_numG = $dataIN['mobile_num'];
        $addressG = $dataIN['address'];
        $vehicle_numG = $dataIN['vehicle_num'];
        $seller_statusG= $dataIN['sellerStatus'];
    }



//send new updated values
if(isset($_POST['update'])){
    $firstName = $_POST['customerFname1'];
    $lastName = $_POST['customerLname1'];
    $nic = $_POST['customerNIC1'];
    $mobileNum = $_POST['customerTP1'];
    $address = $_POST['customerAddress1'];
    $vehicleNum = $_POST['customerVehicle1'];


    $sql= "UPDATE `seller` SET first_name='$firstName', last_name='$lastName', nic='$nic', mobile_num='$mobileNum',
            address='$address', vehicle_num='$vehicleNum' WHERE customerID = $seller_ID";

    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:seller.php");
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Seller</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .container{
            display:flex;
            align item:center;
            justify-content:center;
            flex-direction: column;
        }

        #header1{
            padding-bottom: 10px !important;
            padding-top: 30px !important;
        }
        hr{
            width: 40%;
        }
        /*#capture{*/
        /*    padding: 20px;*/
        /*    height: 150px;*/
        /*    width: 100%;*/
        /*    border-radius: 10px;*/

        /*}*/
        /*#capture-img{*/
        /*    height: 100px;*/
        /*}*/
        #capture-btn{
            border-style: ;
        }
    </style>

</head>
<body>
<div class="container col-12 align-items-center">
    <h2 id="header1" >Update Seller</h2>
    <hr>
    <form   method="POST" action="custommerReg.php" class="col-8">


        <div class="row">
            <div class="mb-2 col-6 ">
                <label for="cusREg003FN" class="form-label">First Name</label>
                <input type="text" class="form-control" value="<?php echo ($f_name); ?>" name="customerFname1" id="cusREg003FN " required placeholder="">

            </div>
            <div class="mb-3 col-6 ">
                <label for="cusREg00LN" class="form-label">Last Name</label>
                <input type="text" class="form-control" value="<?php echo ($l_name); ?>" name="customerLname1" id="cusREg003LN"  required placeholder="">

            </div>
            <div class="mb-3 col-6">
                <label for="cusREg00NIC" class="form-label">NIC</label>
                <input type="text" class="form-control" value="<?php echo ($nicG); ?>" name="customerNIC1" id="cusREg003NIC" required  placeholder="">

            </div>
            <div class="mb-3 col-6">
                <label for="cusREg00TP" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" value="<?php echo ($mobile_numG); ?>" name="customerTP1" id="cusREg003TP"  required  placeholder="">

            </div>
            <div class="mb-3">
                <label for="cusREg00AD" class="form-label">Address</label>
                <input type="text" class="form-control" value="<?php echo ($addressG); ?>" name="customerAddress1" id="cusREg003AD" required placeholder="">

            </div>
            <div class="mb-3 col-12">
                <label for="cusREg003VNum" class="form-label">Vehicle Identification Number</label>
                <input type="text" class="form-control" value="<?php echo ($vehicle_numG); ?>" name="customerVehicle1" id="cusREg003VNum" required placeholder="">
            </div>

            <!--        image capture-->
<!--            <div class="col-2 row capture" id="capture" onclick="">-->
<!--                <img id="capture-img" src="media/capture.png" alt="">-->
<!---->
<!--            </div>-->

            <br>

            <!--        Submit Button -->
            <div class="d-flex align-tem-center col-12">

                <button type="submit" name="update" class="btn btn-primary col-12">Update</button>
            </div>

        </div>
    </form>
</div>

</body>
</html>
