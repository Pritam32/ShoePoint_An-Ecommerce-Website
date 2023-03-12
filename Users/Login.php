<?php
    include_once('conn.php');
    if(isset($_REQUEST['login'])){
        if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
            $email=$_REQUEST['email'];
            $password=$_REQUEST['password'];
            $sql="SELECT * FROM `clients` WHERE Email='$email';";
            $res=$conn->query($sql);
            $row=mysqli_fetch_assoc($res);
            $user_id=$row['User_id'];
            if(mysqli_num_rows($res)>0){
                    setcookie('login',$email,time()+(1*365*30*24*60*60));
                    setcookie('user_id',$user_id,time()+(1*365*30*24*60*60));
                    header("Refresh:1");
                    
            }
            
        }
    }
?>
<div class="modal fade" id="Login" tabindex="-1" aria-labelledby="Login" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Login To Continue</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            
            <input type="email" class="form-control" name="email" placeholder="Email" required="yes">
          </div>
          <div class="mb-3">
            
          <input type="password" class="form-control" name="password" placeholder="Password" required="yes">
          </div>
          <div class="mb-3">
            <input type="submit" name="login" value="Login" class="btn btn-primary">
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <input type="button" data-bs-toggle="modal" data-bs-target="#Signup" data-bs-whatever="@mdo" style="background:none;border:none;color:grey;font-size:16px;" value="New Customer ? Create an Acccount">
      </div>
    </div>
  </div>
</div>