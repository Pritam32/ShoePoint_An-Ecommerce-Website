  <?php
    if(isset($_REQUEST['out'])){
      setcookie('login',false);
      header("Refresh:1");
    }
  ?>
        
        <nav class="navbar navbar-expand-lg" style="background-color:#ebf0ef;">
            <div class="container-fluid d-flex align-items-center mx-3" style="background-color:#ebf0ef;">
              <a class="navbar-brand" href="Home.php">Shoe<span class="text text-danger">Point</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Home.php#popular">Popular</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="ProductList.php?type=Men">Men</a></li>
                      <li><a class="dropdown-item" href="ProductList.php?type=Women">Women</a></li>
                      <li><a class="dropdown-item" href="ProductList.php?type=Boys">Boys</a></li>
                      <li><a class="dropdown-item" href="ProductList.php?type=Girls">Girls</a></li>
                      
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Home.php#customers">Customers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Home.php#contact">Contact Us</a>
                  </li>
                  <?php 
                    if(isset($_COOKIE['login'])){
                      echo '
                      <li class="nav-item">
                      <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping" style="font-size:25px;"></i></a>
                      </li>
                      
                      <li class="nav-item">
                    <a class="nav-link" href="MyOrders.php">My Orders</a>
                  </li>
                  <li class="nav-item">
                  <div class="dropdown bg-secondary rounded-circle">
                  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <div  class="row" style="padding-left:20px;width:fit-content;"> 
                  <h3>'.strtoupper(substr($_COOKIE['login'],0,1)).'</h3>
                  </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-white text-small shadow">
                   
                    
                    <li>
                    <form method="post">
                    <input type="submit" name="out" class="dropdown-item" value="Logout">
                    </form>
                    </li>
                  </ul>
                </div>
                      </li>';
                    }
                    else{
                      echo '<li class="nav-item">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Login" data-bs-whatever="@mdo">Login</button>
                      </li>';
                    }
                  ?>
              </div>
            </div>
          </nav>
        
          
                     