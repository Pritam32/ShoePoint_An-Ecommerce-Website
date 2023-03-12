<?php
    include_once('conn.php');
    if(isset($_REQUEST['register'])){
        if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['password'])){
            $userid=uniqid("USER");
            $name=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $password=$_REQUEST['password'];
            $res="SELECT * FROM `clients` WHERE Email='$email';";
            $row=$conn->query($res);
            if(mysqli_num_rows($row)==0){
                $sql="INSERT INTO `clients`(`User_id`,`Username`,`Email`,`Password`) VALUES('$userid','$name','$email','$password');";
                if($conn->query($sql)){
                    setcookie('login',$email,time()+(1*365*30*24*60*60));
                    setcookie('user_id',$userid,time()+(1*365*30*24*60*60));

                    header("Refresh:1");
                }
            }
            
        }
    }
?>
<div class="modal fade" id="Signup" tabindex="-1" aria-labelledby="Login" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Signup To Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="Home.php" method="post">
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Username" required="yes">
          </div>  
          <div class="mb-3">
            
            <input type="email" class="form-control" name="email" placeholder="Email" required="yes">
          </div>
          <div class="mb-3">
            
          <input type="password" class="form-control" name="password" placeholder="Password" required="yes">
          </div>
          <div class="mb-3">
            <input type="submit" name="register" value="Register" class="btn btn-primary">
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <input type="button" data-bs-toggle="modal" data-bs-target="#Login" data-bs-whatever="@mdo" style="background:none;border:none;color:grey;font-size:16px;" value="Already have an account ? Login">
      </div>
    </div>
  </div>
</div>