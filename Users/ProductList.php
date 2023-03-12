<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4d3aa588ac.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Products</title>
</head>
<body>
<?php 
  
  include_once('header.php');
  ?>
    <?php
        include_once('conn.php'); 
        if(isset($_GET['type'])){
            $type=$_GET['type'];
            echo '<div class="container my-5">
            <h2>Best Collections For '.$type.'</h2>
            </div>';
        }
        $sql="SELECT * FROM `products` WHERE Product_type='$type';";
        $res=$conn->query($sql);?>
        <div class="container">
        <div class="row">
       <?php foreach($res as $row){
          echo '<div class="card shadow my-3 mx-2" style="width: 18rem;height:fit-content">
          <a href="Product.php?page=products&id='.$row['Product_id'].'" style="cursor:pointer;text-decoration:none;color:black;">
          <img src="'.$row['Product_img'].'" class="card-img-top" alt="img" style="height:200px;">
          <div class="card-body">
            <p class="card-text">'.substr($row['Product_name'],0,50).'... </p>
            <p class="card-text"> ₹ '.number_format($row['Product_price']).'</p>
          </div>
          </a>
        </div>';
        } ?>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    
</body>
</html>