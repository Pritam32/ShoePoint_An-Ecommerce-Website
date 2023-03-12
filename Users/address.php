<?php
    session_start();
    if(isset($_REQUEST['daddress'])){
       if(isset($_REQUEST['mobile']) && isset($_REQUEST['address'])){
        $mobile=$_REQUEST['mobile'];
        $address=$_REQUEST['address'];
        $_SESSION['address']=$address;
        $_SESSION['mobile']=$mobile;
        echo "<script>location.href='order.php'</script>";
       }
        
    }
?>
<div class="modal fade" id="address" tabindex="-1" aria-labelledby="Login" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Delivery Address</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  method="post">
          <div class="mb-3">
            
            <input type="text" class="form-control" name="pincode" placeholder="Pincode" required="yes">
          </div>
          <div class="mb-3">
            
          <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="yes">
          </div>
          <div class="mb-3">
          <textarea rows=6 cols=20  class="form-control" name="address" placeholder="Address/Street , City/District" style="resize:none" required="yes"></textarea>
          </div>
          <div class="mb-3">
            <input type="submit" name="daddress" value="Save And Continue" class="btn btn-primary">
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>