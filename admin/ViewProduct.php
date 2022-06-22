<?php 
    include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
</head>
<body>
    <h1>Product Information</h1>
    <table id="mytable" class="table display">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Image</th>
            <th>Action</th>
            
        </tr>
        </thead>
        <tbody>
        <?php 
            $fetch = mysqli_query($con,"select * from producttb");
            while($row = mysqli_fetch_array($fetch))
            {
                echo '   
                <tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    <td>'.$row[4].'</td>
                    <td>'.$row[5].'</td>
                    <td><img src="productimages/'.$row[6].'" width="80" height="80" alt=""></td>
                    
                <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-info">Detail</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    
            </td>
            </tr>
            ';
            }
        ?>
       
       
            

        </tbody>
    </table>
</body>
</html>
