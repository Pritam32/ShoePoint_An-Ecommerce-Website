<?php
     include_once('conn.php');
     session_start();
     if(isset($_SESSION['mobile']) && isset($_SESSION['address'])){
      $mobile=$_SESSION['mobile'];
      $address=$_SESSION['address'];
      }
     if(isset($_COOKIE['user_id'])){
      $user_id=$_COOKIE['user_id'];
    }
   
      $sql="SELECT * FROM `cart` WHERE User_id='$user_id'";
      $res=$conn->query($sql);
      $order_id=uniqid("SHOE");
      if(isset($_REQUEST['pay'])){
      
      foreach($res as $row){
        $id=$row['Product_id'];
      $name=$row['Product_name'];
      $img=$row['Product_img'];
      $price=$row['Product_price'];
      $page=$row['Product_page'];
      
        $sql1="INSERT INTO `orders`(`User_id`,`Mobile`,`Order_id`,`Product_id`,`Product_name`,`Product_price`,`Product_img`,`Product_page`,`Address`) VALUES('$user_id','$mobile','$order_id','$id','$name','$price','$img','$page','$address');";
        $conn->query($sql1);
          
          
        
      }
      $sql2="DELETE FROM `cart` WHERE User_id='$user_id';";
      $conn->query($sql2);
      echo "<script>alert('Your Order has been placed successfully')</script>";
      echo "<script>location.href='Home.php'</script>";
      
      }
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://kit.fontawesome.com/4d3aa588ac.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <?php
    
    include_once('conn.php');
    if(isset($_COOKIE['user_id'])){
      $user_id=$_COOKIE['user_id'];
    }
    $sql="SELECT * FROM `cart` WHERE User_id='$user_id'";
    $res=$conn->query($sql);
    if(mysqli_num_rows($res)!=0){
      echo '<div class="container my-5 d-flex flex-column align-items-center justify-content-center">
      <div class="row" style="width:100%;background-color: rgb(203, 197, 197);padding:10px;">
        <h3>Total Products: '.mysqli_num_rows($res).' </h3>
      </div>
      <div class="row my-3" style="width:100%;background-color: rgb(203, 197, 197);padding:10px;">
        <h3>Products:</h3>';
        foreach($res as $row){
          echo '<div class="row my-2 mx-2" style="border:2px solid black;border-radius:30px;display:flex;width:100%;align-items:center;justify-content:center">
                <div class="col-3" style="display:flex;align-items:center;justify-content:center;">
                <img src="'.$row['Product_img'].'" alt="img" style="width:100px;height:77px;border-radius:20px;">
                </div>
                <div class="col-3" style="display:flex;align-items:center;justify-content:center;">
                <h6 style="width:100%">'.substr($row['Product_name'],0,30).'...</h6>
                </div>
                <div class="col-3" style=" display:flex;align-items:center;justify-content:center;">
                <h5>₹ '.number_format($row['Product_price']).'</h5>
                </div>
                <div class="col-3" style="display:flex;align-items:center;justify-content:center;">
                <h5>₹ '.number_format($row['Product_price']).'</h5>
                </div>
                </div>';
        }
      echo '</div>
      <div class="row" style="width:100%;background-color: rgb(203, 197, 197);padding:10px;">';
      ?>
      <?php
        $total=0;
        foreach($res as $row){
          $total+=$row['Product_price'];
        }
        echo'<h3>Total Price: ₹ '.number_format($total).'</h3>
      </div>
      <div class="row my-3"style="width:100%;">
        <form>
          <input type="submit" value="Pay Now" name="pay" class=" p-2 btn btn-primary">
        </form>
      </div>
    </div>';
    
    }
    else{
      echo "<h2>No items</h2>";
    }
    ?>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>