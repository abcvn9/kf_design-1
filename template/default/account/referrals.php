
<div class="row flex-xl-nowrap">
  <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
        <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-12 col-md-9 col-xl-10 bd-content">
    <div class="card card-body">
      <h4><i class="fas fa-link fa-icon"></i> Your Referrals</h4>
        <form>
         <div class="form-group">
          <label for="formGroupExampleInput">You URL </label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?php echo store_url("user-".$data->referrals.".html");?>">
        </div>
        
          
         
          <button type="submit" class="btn btn-primary"><i class="fas fa-send"></i> Send Intivite</button>
        </form>
      </div>
      <br>
      <div class="card card-body">
        <h4>Intivite</h4>
        <table class="table">
          <thead>
            <th>STT</th>
            <th>Email</th>
            <th>Create</th>
            <th>Code</th>
            <th>Profit</th>
          </thead>
          <?php foreach ($referrals as $key => $value) { ?>
            
          <tr>
            <td><?php echo ($key + 1);?></td>
            <td><?php echo $value->referrals_email;?></td>
            <td><?php echo $value->referrals_created;?></td>
            <td>Profit</td>
            <td><?php echo $value->code;?></td>
          </tr>
        <?php } ?>
        </table>
      </div>
    </div>
  </div>
