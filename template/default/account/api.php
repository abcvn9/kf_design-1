<div class="row flex-xl-nowrap">
  <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
    <?php include __DIR__."/menu.php"; ?>
  </div>
  <div class="col-12 col-md-9 col-xl-10 bd-content">
    <div class="card card-body">
      <h4><i class="fas fa-link fa-icon"></i> Your API</h4>
      
      <table class="table">
      	<thead>
      		
      		<th>Keys</th>
      		<th>Created</th>
      		<th>Deposit</th>
      		<th>Withdraw</th>
      		<th>Trader</th>
      		<th>Status</th>
      		<th></th>
      	</thead>
      	<tbody>
      		<?php foreach ($data as $key => $value) { ?>
      			
      		<tr>
      		
      			<td>Keys : <?php echo $value->api_keys;?> <button type="button" class="float-right btn btn-sm btn-info" onClick="$(this).parent().find('div').show();$(this).remove()">Secret</button>
      				
      				<div style="display: none;">Secret : <?php echo $value->api_secret;?><br> UID :  <?php echo $value->api_uid;?></div>
      			</td>
      			<td><?php echo $value->created;?></td>
      			<td><input <?php echo ($value->api_deposit == 1 ? "checked" : "");?> data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="small" type="checkbox" name="deposit" data-button="<?php echo $value->api_id;?>"></td>
      			<td><input <?php echo ($value->api_withdraw == 1 ? "checked" : "");?> data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="small" type="checkbox" name="withdraw" data-button="<?php echo $value->api_id;?>"></td>
      			<td><input <?php echo ($value->api_trade == 1 ? "checked" : "");?> data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="small" type="checkbox" name="trade" data-button="<?php echo $value->api_id;?>"></td>

      			<td><input <?php echo ($value->status == 1 ? "checked" : "");?> data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="small" type="checkbox" name="status" data-button="<?php echo $value->api_id;?>"></td>
      			<td><a href="<?php echo store_url("account/api_remove/{$value->api_id}");?>" class="btn btn-info btn-sm">Delete</a></td>
      		</tr>
      	<?php } ?>
      	</tbody>
      </table>
      
        
        <?php echo form_open("api.html");?>
        <h5>Create API</h5>
        <hr>
        <div class="form-group">
          <label for="formGroupExampleInput">F2A Validate</label>
          <input type="text" class="form-control" name="verification_code" placeholder="F2A Code" required="">
        </div>


        
        <hr>
        <button class="btn btn-info" name="query" value="create">Created API</button>
       </form>
    </div>
  </div>
</div>

<script type="text/javascript">
	$('[data-button]').change(function(){
		var name = $(this).attr("name");
		var values = $(this).prop("checked");
		var id = $(this).attr("data-button");
		var json = { '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',name : name, value : values, id : id, query : "update"};
		
	    
	    $.ajax({
	        url: "/api.html",
	        type: "post",
	        data: json,
	     
	        success: function (response) {
	           window.location.href = '/api.html';         

	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	           console.log(textStatus, errorThrown);
	        }


	    });

	  

	});
</script>