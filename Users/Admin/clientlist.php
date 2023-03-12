<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>
  <body>
   
        
  <nav class="navbar navbar-dark navbar-expand-lg bg-dark" style="background-color:#ebf0ef;">
            <div class="container-fluid d-flex align-items-center mx-3 bg-dark" style="background-color:#ebf0ef;">
              <a class="navbar-brand" style="color:white;">Shoe<span class="text text-danger">Point</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="Dashboard.php">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Add.php">Add Product</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="orderlist.php">Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="clientlist.php">Customers</a>
                  </li>
                 
              </div>
            </div>
          </nav>
        
            
                     
    <div class="container-fluid" style="display:flex ;justify-content:center;">
    <div class="row my-5" style="width:100%;">
        <table style="border-collapse:collapse;">
            <th>
                <tr>
                    <td style="padding:10px;color:white;background-color:#323233">User ID</td>
                    <td style="padding:10px;color:white;background-color:#323233">Username</td>
                    <td style="padding:10px;color:white;background-color:#323233">Email</td>
                    <td style="padding:10px;color:white;background-color:#323233">Password</td>
                    
                    
                </tr>
            </th>
            <?php
              include_once('conn.php');
              $sql="SELECT * FROM `clients`;";
              $res=$conn->query($sql);
              foreach($res as $row){
                echo '<tr>
                <td style="padding:10px;">'.$row['User_id'].'</td>
                <td style="padding:10px;">'.$row['Username'].'</td>
                <td style="padding:10px;">'.$row['Email'].'</td>
                <td style="padding:10px;">'.$row['Password'].'</td>
               
            </tr>';
              }
            ?>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>