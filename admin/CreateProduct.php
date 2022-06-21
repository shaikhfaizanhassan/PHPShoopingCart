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
        <form action="" method="POST">
            <table class="table">
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="username" class="form-control"></td>
                </tr>
                <tr>
                    <td>Product Price</td>
                    <td><input type="text" name="username" class="form-control"></td>
                </tr>

                <tr>
                    <td>Product Description</td>
                    <td><textarea name="desc" class="form-control" id="" cols="30" rows="10"></textarea><td>
                </tr>
                <tr>
                    <td>Select Catgegory</td>
                    <td><select name="" class="form-control" id="">
                        <option value="">Pant</option>
                        <option value="">Jeans</option>

                    </select></td>
                </tr>
                
                <tr>
                    <td>Select Brand</td>
                    <td><select name="" class="form-control" id="">
                        <option value="">Livies</option>
                        <option value="">Addidas</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Select Product Image</td>
                    <td><input type="file" name="username" class="form-control"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save Product" name="btn" class="form-control btn btn-danger"></td>
                </tr>
                
            </table>
        </form>
    </div>
</body>
</html>