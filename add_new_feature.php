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
    <title>Add New Feature</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>

<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Feature Id</th>
            <th>Feature </th>
            <th>Feature Manage</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM features";
        $result = mysqli_query($conn,$sql);

        if($result){
            while($raw = mysqli_fetch_assoc($result)){
                $id = $raw['idfeatures'];
                $feature = $raw['feature'];

//                add data for table raws
                echo '
                <tr>
                    <td> '.$id.' </td>
                    <td>'.$feature.'</td>
                    
                    <td><a href="#" class="btn btn-success btn-sm">Update</a>
                        <a href="delete_feature.php?featureID='.$id.'" class="btn btn-danger btn-sm">Delete</a>
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
