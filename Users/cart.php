<?php
include_once('conn.php');
if(isset($_GET['id']) && isset($_GET['page'])){
  $did=$_GET['id'];
  $page=$_GET['page'];
  $sql="DELETE FROM `cart` WHERE Product_id=$did AND Product_page='$page';";
  if($conn->query($sql)){
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
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <?php
    include_once('address.php'); 
    include_once('header.php'); 
    ?>
    <div class="container my-5 d-flex flex-column align-items-center justify-content-center">
    <?php
    include_once('conn.php');
    if(isset($_COOKIE['user_id'])){
      $user_id=$_COOKIE['user_id'];
    }
    $sql="SELECT * FROM `cart` WHERE User_id='$user_id'";
    $res=$conn->query($sql);  
    if(mysqli_num_rows($res)!=0){
      echo '<h2>My Cart</h2>
    <div class="container my-3"></div>';
      foreach($res as $row){
        
        echo '<div class="row my-2" style="border:2px solid black;border-radius:30px;display:flex;width:100%;align-items:center;justify-content:center">
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
              <a href="cart.php?page='.$row['Product_page'].'&id='.$row['Product_id'].'"><i class="fa-solid fa-trash" style="font-size:30px;"></i></a>
              </div>
              </div>';
      }
      echo '<div class="row my-3" style="width:100%;display:flex;justify-content:end;">
      <button type="button" class="p-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#address" data-bs-whatever="@mdo">CheckOut</button>
      </div>'; 
    }
    else{
        echo '<h2>No items Added</h2>';
    }
    ?>
    </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>  