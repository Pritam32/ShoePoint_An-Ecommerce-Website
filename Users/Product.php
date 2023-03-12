<?php
 include_once('conn.php');
 if(isset($_COOKIE['user_id'])){
  $user_id=$_COOKIE['user_id'];
 }
 if(isset($_REQUEST['addcart'])){
  if(isset($_GET['page']) && isset($_GET['id'])){
      $page=$_GET['page'];
      $id=$_GET['id'];
      $sql="SELECT * FROM `$page` WHERE Product_id='$id';";
      $res1=$conn->query($sql);
      $row1=mysqli_fetch_assoc($res1);
      $name=str_replace("'s","",$row1['Product_name']);
      $img=$row1['Product_img'];
      $price=$row1['Product_price'];

      $q="SELECT * FROM `cart` WHERE Product_name='$name';";
      $r=$conn->query($q);
      if(mysqli_num_rows($r)==0){
        $sql1="INSERT INTO `cart`(`User_id`,`Product_id`,`Product_name`,`Product_price`,`Product_img`,`Product_page`) VALUES('$user_id','$id','$name','$price','$img','$page');";
        if($conn->query($sql1)){
          echo "<script>location.href='Product.php?page=$page&id=$id'</script>";
        }
      }
      
     
    }
 }
 if(isset($_REQUEST['buyproduct'])){
  if(isset($_GET['page']) && isset($_GET['id'])){
      $page=$_GET['page'];
      $id=$_GET['id'];
      $sql="SELECT * FROM `$page` WHERE Product_id='$id';";
      $res1=$conn->query($sql);
      $row1=mysqli_fetch_assoc($res1);
      $name=$row1['Product_name'];
      $img=$row1['Product_img'];
      $price=$row1['Product_price'];
      $qry="SELECT * FROM `cart` WHERE Product_name='$name';";
      $r=$conn->query($qry);
      if(mysqli_num_rows($r)==0){
        $sql1="INSERT INTO `cart`(`User_id`,`Product_id`,`Product_name`,`Product_price`,`Product_img`,`Product_page`) VALUES('$user_id','$id','$name','$price','$img','$page');";
        $conn->query($sql1);
      }
      echo "<script>location.href='cart.php'</script>";
     
    }
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
    <link href="style.css" rel="stylesheet">
 </head>
  <body>
  <?php 
  include_once('Signup.php');
  include_once('Login.php');
  include_once('header.php');
  ?>
    <div class="container-fluid">
    <?php
        include_once('conn.php');
         if(isset($_GET['page']) && isset($_GET['id'])){
            $page=$_GET['page'];
            $id=$_GET['id'];
            $sql="SELECT * FROM `$page` WHERE Product_id='$id';";
            $res=$conn->query($sql);

         }
           foreach($res as $row){
            echo '<div class="row my-5 mx-3">
        <div class="col-lg-6">
            <div class="row" style="width:100%;height:500px;">
            <img src="'.$row['Product_img'].'" alt="img" style="width:100%;height:500px">
            </div>
            <div class="row my-3" style="width:100%;">';

             ?>
            <?php
              if(isset($_COOKIE['login'])){
               echo '<form method="post" style="display:flex;align-items:center;justify-content:center;">
               <div class="col-lg-6 my-2">
                <input type="submit" name="addcart" value="Add To Cart" style="font-size:20px;background-color:orange;width:100%;padding:15px;border:1px solid black;">
                </div>
                <div class="col-lg-6 my-2" style="margin-left:30px;">
                <input type="submit" name="buyproduct" value="Buy Now" style="font-size:20px;background-color:orange;width:100%;padding: 15px;border:1px solid black;">
                </div>
                </form>';
              }
              else{
                echo '<div class="col-lg-6 my-2">
                <input type="button" value="Add To Cart" style="font-size:20px;background-color:orange;width:100%;padding:15px;border:1px solid black;" data-bs-toggle="modal" data-bs-target="#Login" data-bs-whatever="@mdo">
                </div>
                <div class="col-lg-6 my-2">
                <input type="button" value="Buy Now" style="font-size:20px;background-color:orange;width:100%;padding: 15px;border:1px solid black;" data-bs-toggle="modal" data-bs-target="#Login" data-bs-whatever="@mdo">
                </div>';
              }
              ?>
            
        <?php   echo '</div>    
        </div>
        <div class="col-lg-6 my-3">
        
        <h3>'.$row['Product_name'].'</h3>
        <div class="row mt-4">
            <h4>₹ '.number_format($row['Product_price']).'</h4>
        </div>';
    
}
           
        ?>
            <div class="row mt-4">
                <h4 class="d-flex align-items-center justify-content-center" style="background-color: green;width:90px;padding:5px;color:white;border-radius: 30px;"><i class="fa-solid fa-star" style="color:white;font-size:18px"></i>&nbsp;4.4</h4>
            </div>
            <div class="row mt-4">
                <h4>Available Offers</h4>
                <div class="row mt-2 brn">
                       <ul style="list-style-type:none;">
                        <li><i class="fa-solid fa-square" style="color:green;"></i>&nbsp;&nbsp;<strong>Bank Offer</strong>&nbsp; 5% Cashback on Flipkart Axis Bank Card</li>
                        <li><i class="fa-solid fa-square" style="color:green;"></i>&nbsp;&nbsp;<strong>Partner Offer</strong>&nbsp; Sign up for Flipkart Pay Later and get Flipkart Gift Card worth upto ₹1000</li>
                        <li><i class="fa-solid fa-square" style="color:green;"></i>&nbsp;&nbsp;<strong>Combo Offer</strong>&nbsp; Buy 2 items save 5%; Buy 3 or more save 10%</li>
                        <li><i class="fa-solid fa-square" style="color:green;"></i>&nbsp;&nbsp;<strong>Special Price</strong>&nbsp; Get extra 5% off (price inclusive of cashback/coupon)</li>
                        <li><i class="fa-solid fa-square" style="color:green;"></i>&nbsp;&nbsp;No Cost EMI on Bajaj Finserv EMI Card on cart value above ₹2,999</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>