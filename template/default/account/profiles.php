<div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
  
          <?php include __DIR__."/menu.php"; ?>
      </div>

  <div class="col-12 col-md-9 col-xl-10 bd-content">

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h4>Security</h4>
            F2A | Roller Unlock
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card">
          <div class="card-body">
            <h4>Validate</h4>
            Email | Profile
          </div>
        </div>
      </div>



      <div class="col">
        <div class="card">
          <div class="card-body">
            <h4>Auto Fee Trader</h4>
            BTC | ROLX
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card">
          <div class="card-body">
            <h4>Member Level</h4>
	          <?php
	            foreach ($xGroup as $rGroup){
	            	if($rGroup->status){
			            echo $rGroup->g_name;
		            }else{
			            echo "  -  <a href=\"#upto{$rGroup->g_id}\">Up to " . $rGroup->g_name . "</a>";
		            }
	            }
	          ?>
          </div>
        </div>
      </div>


    </div>
    <br>
    <div class="text-center shadown-box border mt-10" style="line-height: 60px;">Your Limit Withdraw 1 BTC / Days</div>
    <br>
    <?php echo form_open("profile.html");?>
    <div class="card">
      <div class="card-body">
      <h4><i class="fas fa-user fa-icon"></i> Update Profiles</h4>
      <hr>
        
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4">First Name</label>
              <input type="text" name="firstname" value="<?php echo @$profile->firstname;?>" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Min Name</label>
              <input type="text" name="minname" value="<?php echo @$profile->minname;?>" class="form-control" placeholder="Min Name">
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Last Name</label>
              <input type="text" name="lastname" value="<?php echo @$profile->lastname;?>" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress"><?php echo lang("account_address"); ?></label>
            <input type="text" name="address" value="<?php echo @$profile->address;?>" class="form-control" placeholder="1234 Main St">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" name="address2" value="<?php echo @$profile->address2;?>" class="form-control" placeholder="Apartment, studio, or floor">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input name="city" value="<?php echo @$profile->city;?>" type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select name="state" id="inputState" class="form-control">
                <option value="" selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" value="<?php echo @$profile->zipcode;?>" name="zipcode" class="form-control" id="inputZip">
            </div>
          </div>
          
          
       
      </div>
       <div class="card-footer">
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Profiles</button>
        </div>
      </div>
    </div>
      </form>
    </div>
  </div>
