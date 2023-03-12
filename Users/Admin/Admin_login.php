
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4d3aa588ac.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin login</title>
</head>
<body>
    <div class="container my-5" style="display:flex ;align-items:center;justify-content:center;height:90vh;">
        <div class="row shadow-lg">
            <h3 class="my-3">Admin Login</h3>
            <form method="post">
            <div class="my-3">
                <input type="email" name="email" placeholder="Email" style="width:100%;padding:8px;outline: none;">
            </div>
            <div class="my-3">
                <input type="password" name="pass" placeholder="Password" style="width:100%;padding:8px;outline: none;">
            </div>
            <div class="my-3">
                <input type="submit" value="Login" name="log" style="width:100%;padding:8px;background-color: #333;color:#fff;">
            </div>
            <?php
            if(isset($_REQUEST['log'])){
                if(isset($_REQUEST['email']) && isset($_REQUEST['pass'])){
                    $email=$_REQUEST['email'];
                    $pass=$_REQUEST['pass'];
                    if($email=='pritamjad@gmail.com' && $pass='pritamiter21'){
                        echo "<script>location.href='Dashboard.php'</script>";
                    }
                    else{
                        echo '<div class="alert alert-danger">
                        <h6>Invalid email or password !</h6>
                        </div>';
                    }
                }
            }
?>
          </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>