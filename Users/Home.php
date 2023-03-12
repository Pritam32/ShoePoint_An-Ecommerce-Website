<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShoePoint</title>
    <script src="https://kit.fontawesome.com/4d3aa588ac.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
  <?php
  include_once('conn.php'); 
  include_once('Signup.php');
  include_once('Login.php');
  include_once('header.php');

  if(isset($_REQUEST['send'])){
    if(isset($_REQUEST['name']) && isset($_REQUEST['sub']) && isset($_REQUEST['email']) && isset($_REQUEST['complain'])){
      $name=$_REQUEST['name'];
      $sub=$_REQUEST['sub'];
      $email=$_REQUEST['email'];
      $complain=$_REQUEST['complain'];

      $sql="INSERT INTO `helpdesk`(`Name`, `Subject`, `Email`, `Query`) VALUES ('$name','$sub','$email','$complain')";
      if($conn->query($sql)){
        echo "<script>alert('We have got your complain and will reach u soon regarding your problem.')</script>";
      }

    }
  }
  ?>
 
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.kindpng.com/picc/m/1-18288_nike-shoes-hd-png-transparent-png.png" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
                <div class="container">
                    <div class="row justify-content-start text-left">
                        <div class="col-lg-8 mx-auto">
                            <p style="color:black ;">WINTER BEST COLLECTIONS 2022</p>
                            <h2  style="color:black ;">Get up to 30% Off</h2>
                            <h2  style="color:black ;">New Arrivals</h2>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3BvcnQlMjBzaG9lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption  d-md-block">
                <div class="container">
                    <div class="row justify-content-start text-left">
                        <div class="col-lg-8 mx-auto">
                            <p>WINTER / SUMMER BEST COLLECTIONS 2022</p>
                            <h2>Get up to 30% Off</h2>
                            <h2>New Arrivals</h2>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="carousel-item">
            <img src="https://media.cntraveler.com/photos/62e7cbd82224089714efc117/master/w_2100,h_1500,c_limit/Best%20Running%20Shoes-2022_Lululemon%20Blissfeel%20Sneakers_00-EcommBackground-Embed.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block">
                <div class="container">
                    <div class="row justify-content-start text-left">
                        <div class="col-lg-8 mx-auto">
                            <p style="color:black;">WINTER / SUMMER BEST COLLECTIONS 2022</p>
                            <h2  style="color:black ;">Get up to 30% Off</h2>
                            <h2  style="color:black ;">New Arrivals</h2>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
      
          
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
     </div>
      
      <section class="container my-5" id="popular">
        
            <h2>Our Popular Products</h2>
            <div class="row my-5 mx-4">
              <?php
                include_once('conn.php');
                $sql="SELECT * FROM `popular`;";
                $res=$conn->query($sql);
                foreach($res as $row){
                  echo '<div class="card shadow my-3 mx-2" style="width: 18rem;height:fit-content">
                  <a href="Product.php?page=popular&id='.$row['Product_id'].'" style="cursor:pointer;text-decoration:none;color:black;">
                  <img src="'.$row['Product_img'].'" class="card-img-top" alt="img" style="height:200px;">
                  <div class="card-body">
                    <p class="card-text">'.substr($row['Product_name'],0,50).'... </p>
                    <p class="card-text"> ₹ '.number_format($row['Product_price']).'</p>
                  </div>
                  </a>
                </div>';
                }
              ?>
                
                  
            </div>
    </section>
    <section class="container my-5" id="customers">
        <h2>Our Customers</h2>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-4  my-3 d-flex flex-column align-items-center justify-content-center">
                    <img src="https://media.istockphoto.com/photos/shot-of-a-handsome-young-man-standing-against-a-grey-background-picture-id1335941248?b=1&k=20&m=1335941248&s=170667a&w=0&h=sn_An6VRQBtK3BuHnG1w9UmhTzwTqM3xLnKcqLW-mzw=" class="bd-placeholder-img rounded-circle" width="140" height="140"> 
          
                    <h2 class="fw-normal mt-3">Arvind</h2>
                  <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                  
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4  my-3 d-flex flex-column align-items-center justify-content-center">
                    
                    <img src="https://media.istockphoto.com/photos/portrait-of-a-businessman-on-gray-background-picture-id1372641621?b=1&k=20&m=1372641621&s=170667a&w=0&h=MXJ9XG_yfFSmOYOUlmr6S99GBiFQh_srdbGSkRlyiE8=" class="bd-placeholder-img rounded-circle" width="140" height="140"> 
          
                    <h2 class="fw-normal mt-3">Rahul</h2>
                  <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                  
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 my-3 d-flex flex-column align-items-center justify-content-center ">
                  
                <img src="https://media.istockphoto.com/photos/studio-portrait-of-a-cheerful-woman-picture-id1368424494?b=1&k=20&m=1368424494&s=170667a&w=0&h=9TCirXa0n8vqrFDP8e8kSHlbMid36F9po15VL7_wOkw=" class="bd-placeholder-img rounded-circle" width="140" height="140"> 
          
                  <h2 class="fw-normal mt-3">Heading</h2>
                  <p>And lastly this, the third column of representative placeholder content.</p>
                  
                </div><!-- /.col-lg-4 -->
              </div>
        </div>
    </section>
    
    <section class="container" id="contact">
        <h2>Contact Us</h2>
        <div class="row my-5">
            <div class="col-lg-9">
                <form  method="post">
                    <input type="text" name="name" placeholder="Name" required="yes"><br></br>
                    <input type="text" name="sub" placeholder="Subject" required="yes"><br></br>
                    <input type="email" name="email" placeholder="Email" required><br></br>
                    <textarea rows=6 cols=20  class="mb-5" placeholder="How can we help you ?" style="resize:none" name="complain" required></textarea>
                    <input type="submit" name="send" class="btn btn-primary" value="Send" style="width:100px">
                  </form>
              
            </div>
            <div class="col-lg-3">
                <div class="row my-2">
                    <h5>Headquarter:</h5>
                    <h6>ShoePoint pvt Ltd,</h6>
                    <h6>Ashok Nagar, Ranchi</h6>
                    <h6>Jharkhand - 434567</h6>
                    <h6>Phone: +917903371032</h6>
                    <h6>www.shoepoint.com</h6>
                </div>
                <div class="row my-5">
                    <h5>Branch:</h5>
                    <h6>ShoePoint pvt Ltd,</h6>
                    <h6>New Ashok Nagar, Delhi</h6>
                    <h6>Delhi - 564567</h6>
                    <h6>Phone: +917903371032</h6>
                    <h6>www.shoepoint.com</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-dark">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="Admin/Admin_login.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <span class="mb-3 mb-md-0 text-muted" style="color:white;">shoepoint © 2022 Company, Inc</span>
      </a>
      
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

