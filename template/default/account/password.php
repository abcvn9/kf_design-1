
<div class="row flex-xl-nowrap">
  <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
    <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-12 col-md-9 col-xl-10 bd-content">
    <div class="card card-body">
        <h4><i class="fas fa-lock fa-icon"></i> Change password</h4>
        <hr>
        <?php echo form_open("password.html");?>
         <div class="form-group">
          <label for="formGroupExampleInput">Old Password </label>
          <input type="text" class="form-control" name="oldpassword" placeholder="Old Password" required="">
        </div>


        <div class="form-group">
          <label for="formGroupExampleInput">New Password </label>
          <input type="text" class="form-control" name="newpassword" placeholder="New Password" required="">
        </div>
        
        <div class="form-group">
          <label for="formGroupExampleInput">Retype Password </label>
          <input type="text" class="form-control" name="rnewpassword" placeholder="Retype Password" required="">
        </div>

        <?php if($openf2a){ ?>
        <div class="form-group">
          <label for="formGroupExampleInput">F2A Code </label>
          <input type="text" class="form-control" name="verification_code" placeholder="F2A Code" required="">
        </div>
        <?php } ?>
         
          <button type="submit" class="btn btn-primary">Change Password</button>
        </form>
      </div>
    </div>
  </div>
