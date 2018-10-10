<div class="container">
	<div class="row">
		<div class="col-9">
			<div class="card">
				<div class="card-body">
					<h4>Add Your Coin <a class="float-right btn btn-primary" href="<?php echo store_url("vote.html");?>">Vote List</a></h4>
					<hr>
					<?php echo form_open("addcoind.html".(@$info->symbol_id ? "?id=".$info->symbol_id : ""));?>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Name</label>
					    <input type="text" name="name" value="<?php echo @$info->name;?>" class="form-control" >
					    
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Symbol</label>
					    <input type="text" name="symbol" value="<?php echo @$info->symbol;?>" class="form-control">
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleInputPassword1">Icon</label>
					    <input type="text" name="icon" value="<?php echo @$info->icon;?>" class="form-control">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Website</label>
					    <input type="text" name="website" value="<?php echo @$info->website;?>" class="form-control" >
					    
					  </div>


					  <div class="form-group">
					    <label for="exampleInputEmail1">Explorer</label>
					    <input type="text" name="explorer" value="<?php echo @$info->explorer;?>" class="form-control" >
					    
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Github</label>
					    <input type="text" name="github" value="<?php echo @$info->github;?>" class="form-control" >
					    
					  </div>


					  <div class="form-group">
					    <label for="exampleInputEmail1">ANN</label>
					    <input type="text" name="ann" value="<?php echo @$info->ann;?>" class="form-control" >
					    
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Aglo</label>
					    <input type="text" name="aglo" value="<?php echo @$info->aglo;?>" class="form-control" >
					    
					  </div>
					  Infomation
					  <textarea class="form-control" name="infomation" rows="8"><?php echo @$info->infomation;?></textarea>
					  <br>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-3">
			<div class="card">
				<div class="card-header">New coin</div>
				<div class="card-body">
					<?php foreach ($new as $key => $value) { ?>
						
					<div class="clearfix" style="margin-bottom: 10px;">
						<div class="float-left border-right" style="width: 75px; height: 65px; padding-right:10px; "><img src="<?php echo $value->icon;?>" class="w-100"></div>
						<div style="margin-left: 80px; padding-left: 10px;">
							<h5><?php echo $value->name;?> / <?php echo $value->symbol;?></h5>
							Vote : <?php echo $value->vote;?> | <i class="fas fa-comment"></i> <?php echo $value->comment;?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<br>

			<div class="card">
				<div class="card-header">Top Vote coin</div>
				<div class="card-body">
					<?php foreach ($top as $key => $value) { ?>
						
					<div class="clearfix" style="margin-bottom: 10px;">
						<div class="float-left border-right" style="width: 75px; height: 65px; padding-right:10px; "><img src="<?php echo $value->icon;?>" class="w-100"></div>
						<div style="margin-left: 80px; padding-left: 10px;">
							<h5><?php echo $value->name;?> / <?php echo $value->symbol;?></h5>
							Vote : <?php echo $value->vote;?> | <i class="fas fa-comment"></i> <?php echo $value->comment;?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<br>
			<div class="card">
				<div class="card-header">Last Reward</div>
				<div class="card-body">
					<?php foreach ($reward as $key => $value) { ?>
						
					<div class="clearfix" style="margin-bottom: 10px;">
						<div class="float-left border-right" style="width: 75px; height: 65px; padding-right:10px; "><img src="<?php echo $value->icon;?>" class="w-100"></div>
						<div style="margin-left: 80px; padding-left: 10px;">
							<h5><?php echo $value->name;?> / <?php echo $value->symbol;?></h5>
							Vote : <?php echo $value->vote;?> | <i class="fas fa-comment"></i> <?php echo $value->comment;?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>