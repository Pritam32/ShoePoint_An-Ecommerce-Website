<?php
    include_once('conn.php');
    if(isset($_REQUEST['add'])){
        if(isset($_REQUEST['Pname']) && isset($_REQUEST['Pimg']) && isset($_REQUEST['Pprice']) && isset($_REQUEST['Ptype'])){
            $name=$_REQUEST['Pname'];
            $img=$_REQUEST['Pimg'];
            $price=$_REQUEST['Pprice'];
            $type=$_REQUEST['Ptype'];
            $sql="INSERT INTO `products`(`Product_name`,`Product_img`,`Product_price`,`Product_type`) VALUES('$name','$img','$price','$type');";
            $conn->query($sql);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4d3aa588ac.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <title>Admin</title>
</head>
<body>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;position:absolute;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-3">Shoe<span class="text text-danger">Point</span></span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          
          <li>
            <a href="Dashboard.php" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Dashboard
            </a>
        </li>
        <li>
            <a href="Add.php" class="nav-link text-white active">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Add Product
            </a>
          </li>
          <li>
            <a href="orderlist.php" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Orders
            </a>
          </li>
        
          <li>
            <a href="clientlist.php" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              Customers
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Pritam Kumar</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
           
          <li><a class="dropdown-item" href="http://127.0.0.1/Project/shoepoint/users/Home.php">Home</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1/Project/shoepoint/users/Home.php">Log out</a></li>
          </ul>
        </div>
      </div>
      <div class="container-fluid" style="display:flex ;justify-content:center;">
        <div class="row my-5 bg-dark" style="width:60%;">
         <h3 style="color:white;" class="my-4 mx-5">ADD NEW PRODUCT</h3> 
        <form method="post" style="width:80%;" class="mx-5">
          <div class="mb-4">
            
            <input type="text" class="form-control" name="Pname" placeholder="Product Name" required="yes" style="padding:10px;">
          </div>
          <div class="mb-4">
            
          <input type="text" class="form-control" name="Pimg" placeholder="Product Image" required="yes" style="padding:10px;">
          </div>
          <div class="mb-4">
            
          <input type="number" class="form-control" name="Pprice" placeholder="Product Price" required="yes" style="padding:10px;">
          </div>
          <div class="mb-4">
            
          <select class="form-control" name="Ptype" required="yes" style="padding:10px;">
            <option>Men</option>
            <option>Women</option>
            <option>Boys</option>
            <option>Girls</option>
            </select>
          </div>
          <div class="mb-4">
            <input type="submit" name="add" value="Add" class="btn btn-primary" style="width:100px;">
          </div>
        </form>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>