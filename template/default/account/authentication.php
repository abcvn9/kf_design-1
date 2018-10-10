
<div class="row flex-xl-nowrap">
  <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
    <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-12 col-md-9 col-xl-10 bd-content">
      <div class="card">
          
          <div class="card-body">
              <h4 class="card-title">Google Authenticator</h4>

              <div class="row">
                <div class="col">
                  <h6>Download Apps</h6>
                  <a href="https://chrome.google.com/webstore/detail/authy-chrome-extension/fhgenkpocbhhddlgkjnfghpjanffonno?hl=vi" target="_bank"><img src="https://lh3.googleusercontent.com/nXcWc03Xi193J6lVu6tLmwFl4NU6-WxKSSy1YNG3_OC-0ZVUYKI3t_VZApG7Z6Tjw6lOrSBnGQ=w128-h128-e365" title="Authy" style="width: 45px;"></a><br>
                  IOS
                </div>
                <div class="col">
                  <h6>Enable F2A</h6>
                </div>
                <div class="col">
                  <h6>Validate Code</h6>
                </div>
              </div>
              <hr>
                <?php echo form_open(store_url("authentication.html"));?>
                  <?php
                  if (!isset($security->sec_id))
                  {
                      ?>

                      <div class="row">
                        
                        <div class="col">
                          <div class="form-group">
                              <label class="col-form-label">Secret Code</label>
                              <input class="form-control" name="secret" readonly=""  type="text" value="<?php echo @$secret ?>" required=""/>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Verification Code</label>
                              <input name="verification_code" class="form-control" placeholder="Verification code" type="text" required="">
                             
                          </div>
                        </div>

                        <div class="col-lg-5 text-left">
                          
                          <img src="<?php echo $qrCodeUrl; ?>" />
                          

                        </div><!--// End col //-->
                      </div>

                      <button type="submit" name="security" value="1" class="btn btn-primary">Enable F2A</button>
                      
                  <?php }else{ ?>
                    <h4>Disable F2A</h4>
                    <div class="form-group">
                        <label class="col-form-label">Verification Code</label>
                        <input name="verification_code" class="form-control" placeholder="Verification code" type="text" required="">
                       
                    </div>
                    <button type="submit" name="security" value="1" class="btn btn-primary">Disable F2A</button>
                  <?php } ?>
                  
                  
        </form>
      </div>
      </div>`
    </div>
  </div>
