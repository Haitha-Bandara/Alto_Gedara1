<?php
include 'conn.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Vehicle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #header1{
            width: 100%;
            height: 80px   ;
            display: flex;
            align-items: center;
            justify-content: center;

            padding-bottom: 20px;
        }
    </style>

</head>
<body>
<div class="container ">

    <form action="">
        <div class="row col-8 justify-content-center">
           <div class=" " id="header1">
               <h3>Add New Vehicle</h3>

           </div>
            <div class="mb-2 col-6 ">
                <label for="cusREg003FN" class="form-label">Vehicle Identification Number</label>
                <input type="text" class="form-control" name="" id="" required placeholder="">

            </div>
            <div class="mb-2 col-6 ">
                <label for="cusREg003FN" class="form-label">Purchase Date</label>
                <input type="date" class="form-control" name="" id="" required placeholder="">

            </div>
            <div class="mb-2 col-6 ">
                <label for="cusREg003FN" class="form-label">Battery Number </label>
                <input type="text" class="form-control" name="" id="" required placeholder="">

            </div>
            <div class="mb-2 col-6 ">
                <label for="cusREg003FN" class="form-label">Meater Count</label>
                <input type="text" class="form-control" name="" id="" required placeholder="">

            </div>
            <div class="row">
                <?php

                ?>
            </div>

        </div>
    </form>
</div>
</body>
</html>