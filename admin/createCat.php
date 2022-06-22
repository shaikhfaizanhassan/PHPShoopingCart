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
            <h1> Create New Category</h1>
        </center>
        <form action="" method="POST">
            <table class="table">
                <tr>
                    <td>Category Name</td>
                    <td><input type="text" name="txtcat" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save Category" name="btn" class="form-control btn btn-danger"></td>
                </tr>
                
            </table>
        </form>

        <?php 
            if(isset($_POST["btn"]))
            {
                $catname = $_POST["txtcat"];
                $query =mysqli_query($con,"insert into categorytb (cname) values
                ('$catname')");

                if($query>0)
                {
                    echo "<h1>Catgeory Save</h1>";
                }
                else
                {
                    echo "<h1>Catgeory not Save</h1>";
                }
            }
        
        ?>
    </div>
</body>
</html>