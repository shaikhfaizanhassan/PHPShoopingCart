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
    <div class="container">
        <center>
            <h1> Create New Brand</h1>
        </center>
        <form action="" method="POST">
            <table class="table">
                <tr>
                    <td>Brand Name</td>
                    <td><input type="text" name="txtbrand" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save Brand" name="btn" class="form-control btn btn-danger"></td>
                </tr>
                
            </table>
        </form>

        <?php 
            if(isset($_POST["btn"]))
            {
                $bname = $_POST["txtbrand"];
                $query =mysqli_query($con,"insert into brandtb (bname) values
                ('$bname')");

                if($query>0)
                {
                    echo "<h1>Brand Save</h1>";
                }
                else
                {
                    echo "<h1>Brand not Save</h1>";
                }
            }
        
        ?>
    </div>
</body>
</html>