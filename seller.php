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
    <title>Sellers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>NIC</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Vehicle Number</th>
            <th>Option</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `seller`";
        $result = mysqli_query($conn,$sql);

        if($result){
            while ($tr = mysqli_fetch_assoc($result)){
                $f_name = $tr['first_name'];
                $l_name = $tr['last_name'];
                $nic = $tr['nic'];
                $mobile_num = $tr['mobile_num'];
                $address = $tr['address'];
                $vehicle_num = $tr['vehicle_num'];

                echo '
                 <tr>
                    <td>'.$f_name.'  '.$l_name.'</td>
                    <td>'.$nic.'</td>
                    <td>'.$mobile_num.'</td>
                    <td>'.$address.'</td>
                    <td>'.$vehicle_num.'</td>
                    <td>
                    <a href="#" class="btn btn-success btn-sm">Update</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    
                </tr>
                ';

            }
        }
        ?>


        </tbody>
    </table>
</div>
</body>
</html>