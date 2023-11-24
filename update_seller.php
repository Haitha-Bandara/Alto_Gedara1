<?php
include 'conn.php';

?>

<?php
include 'conn.php';




if(isset($_POST['save'])){
    $firstName = $_POST['customerFname'];
    $lastName = $_POST['customerLname'];
    $nic = $_POST['customerNIC'];
    $mobileNum = $_POST['customerTP'];
    $address = $_POST['customerAddress'];
    $vehicleNum = $_POST['customerVehicle'];


    $sql= " INSERT INTO `seller` (customerID,first_name,last_name,nic,mobile_num,address,vehicle_num) 
 VALUES (customerID,'$firstName','$lastName','$nic','$mobileNum','$address','$vehicleNum')";

    $result = mysqli_query($conn,$sql);
    if($result){
        echo 'SAVED....';
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <h2 id="header1" >New Customer Registration</h2>
    <hr>
    <form   method="POST" action="custommerReg.php" class="col-8">


        <div class="row">
            <div class="mb-2 col-6 ">
                <label for="cusREg003FN" class="form-label">First Name</label>
                <input type="text" class="form-control" name="customerFname" id="cusREg003FN " required placeholder="">

            </div>
            <div class="mb-3 col-6 ">
                <label for="cusREg00LN" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="customerLname" id="cusREg003LN"  required placeholder="">

            </div>
            <div class="mb-3 col-6">
                <label for="cusREg00NIC" class="form-label">NIC</label>
                <input type="text" class="form-control" name="customerNIC" id="cusREg003NIC" required  placeholder="">

            </div>
            <div class="mb-3 col-6">
                <label for="cusREg00TP" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" name="customerTP" id="cusREg003TP"  required  placeholder="">

            </div>
            <div class="mb-3">
                <label for="cusREg00AD" class="form-label">Address</label>
                <input type="text" class="form-control" name="customerAddress" id="cusREg003AD" required placeholder="">

            </div>
            <div class="mb-3 col-12">
                <label for="cusREg003VNum" class="form-label">Vehicle Identification Number</label>
                <input type="text" class="form-control" name="customerVehicle" id="cusREg003VNum" required placeholder="">
            </div>

            <!--        image capture-->
            <div class="col-2 row capture" id="capture" onclick="">
                <img id="capture-img" src="media/capture.png" alt="">

            </div>

            <br>

            <!--        Submit Button -->
            <div class="d-flex align-tem-center col-12">

                <button type="submit" name="save" class="btn btn-primary col-12">Submit</button>
            </div>

        </div>
    </form>
</div>

</body>
</html>
