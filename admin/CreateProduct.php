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
            <h1> Create New Product</h1>
        </center>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="pname" class="form-control"></td>
                </tr>
                <tr>
                    <td>Product Price</td>
                    <td><input type="text" name="pprice" class="form-control"></td>
                </tr>

                <tr>
                    <td>Product Description</td>
                    <td><textarea name="desc" class="form-control" id="" cols="30" rows="10"></textarea><td>
                </tr>
                <tr>
                    <td>Select Catgegory</td>
                    <td>
                    <select name="cat" class="form-control" id="">
                        <?php 
                            $fetch_cat = mysqli_query($con,"select * from categorytb");
                            while($rowcat = mysqli_fetch_array($fetch_cat))
                            {
                                echo '
                                
                                <option value='.$rowcat[0].'>'.$rowcat[1].'</option>
                                
                                ';
                            }
                        ?>
                       


                    </select></td>
                </tr>
                
                <tr>
                    <td>Select Brand</td>
                    <td><select name="brand" class="form-control" id="">
                    <?php 
                            $fetch_brand = mysqli_query($con,"select * from brandtb");
                            while($rowbrand = mysqli_fetch_array($fetch_brand))
                            {
                                echo '
                                
                                <option value='.$rowbrand[0].'>'.$rowbrand[1].'</option>
                                
                                ';
                            }
                        ?>
                       
                    </select></td>
                </tr>
                <tr>
                    <td>Select Product Image</td>
                    <td><input type="file" name="filename" class="form-control"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save Product" name="btn" class="form-control btn btn-danger"></td>
                </tr>
                
            </table>
        </form>
        <?php 
            if(isset($_POST["btn"]))
            {
                $name = $_POST["pname"];
                $price = $_POST["pprice"];
                $descp = $_POST["desc"];
                $categoey = $_POST["cat"];
                $brands = $_POST["brand"];
                $imagename = $_FILES["filename"]["name"];
                $temporyLocation = $_FILES["filename"]["tmp_name"];

                move_uploaded_file($temporyLocation,"productimages/".$imagename);
                
                $query =mysqli_query($con,"insert into producttb (pname,pprice,pdesc,pCatID ,PBrandID ,p_images) 
                values
                ('$name','$price','$descp','$categoey','$brands','$imagename')");

                if($query>0)
                {
                    echo "<h1>Product Save</h1>";
                }
                else
                {
                    echo "<h1>Product not Save</h1>";
                }
            }
        
        ?>
    </div>
</body>
</html>