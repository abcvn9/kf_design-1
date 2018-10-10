<div class="container">
	<div class="row">
		<div class="col-9">
			<?php if(!$data){ ?>
				<div class="card">
					<div class="card-body">
						<h4>List Coin Vote <a class="float-right btn btn-primary" href="<?php echo store_url("addcoind.html");?>">Add Your Coin</a></h4>
						<hr>
						<div class="row">
							<?php foreach ($list as $key => $value) { ?>
								<div class="col-3" style="margin-bottom: 15px;">
									<div class="card">
									  <div style="height: 150px; vertical-align: middle; line-height: 150px; text-align: center; padding: 10px;">
									  	<img class="card-img-top" src="<?php echo $value->icon;?>" alt="Card image cap" style="max-height: 150px; width: auto; max-width: 100%;">
									  </div>
									  <div class="card-body">
									    <h5 class="card-title"><?php echo $value->name;?> / <?php echo $value->symbol;?></h5>
									    <p class="card-text"><i class="fas fa-vote"></i>Vote : <?php echo $value->vote;?> | <i class="fas fa-comment"></i> <?php echo $value->comment;?></p>
									    <a href="<?php echo store_url("vote-".$value->symbol.".html");?>" class="btn btn-primary">Vote</a>
									  </div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php }else{ ?>
			<div class="card">
				<div class="card-body">

					
					<div class="row">
						<div class="col">
							<div class="float-left" style="width: 80px; height: 65px; border-right:1px solid #ddd; padding-right: 15px;"><img src="<?php echo $data->icon;?>" class="w-100"></div>
							<div style="margin-left: 90px;"><h4><?php echo $data->name;?>
								<?php if($this->account_model->get_login_id() == $data->account_id){ ?>
									<a class="float-right btn btn-info" href="<?php echo store_url("addcoind.html?id=".$data->symbol_id);?>">Edit Info</a>
								<?php } ?>
							</h4> <?php echo $data->symbol;?> </div>
						</div>
					</div>
					
					<hr>
					<div class="row">
						<div class="col-lg-6">Website : <a href="<?php echo $data->website;?>" target="_bank"><?php echo $data->website;?></a></div>
						<div class="col-lg-6">Explorer : <a href="<?php echo $data->explorer;?>" target="_bank"><?php echo $data->explorer;?></a></div>
						<div class="col-lg-6">Github : <a href="<?php echo $data->github;?>" target="_bank"><?php echo $data->github;?></a></div>
						<div class="col-lg-6">ANN : <a href="<?php echo $data->ann;?>" target="_bank"><?php echo $data->ann;?></a></div>
						

					</div>

					<?php echo nl2br($data->infomation);?>
					<hr>
					<div class="text-left">
						<?php echo form_open("vote-".$data->symbol.".html");?>
							<button class="btn btn-lg btn-info" name="addvote" value="1">Add Your Vote</button>
						</form>
					</div>
				</div>
			</div>

			<br>
			<div class="card">
				<div class="card-body">
					<?php echo form_open("vote-".$data->symbol.".html");?>
					<textarea name="comment" class="form-control"></textarea><br>
					<button class="btn btn-primary">Comment</button>
					</form>
					<hr>

					<?php foreach ($comment as $key => $value) { ?>
						<div>
							<i class="fas fa-user"></i> <?php 
							$name = explode('@', $value->email);
							echo $name[0];?> | <?php echo $value->cmt_created;?><br>
							<p><?php echo $value->cmt_content;?></p>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="col-3">
			<div class="card">
				<div class="card-header">New coin</div>
				<div class="card-body">
					<?php foreach ($new as $key => $value) { ?>
						
					<div class="clearfix" style="margin-bottom: 10px;">
						<div class="float-left border-right" style="width: 75px; height: 65px; padding-right:10px; "><img src="<?php echo $value->icon;?>" class="w-100"></div>
						<div style="margin-left: 80px; padding-left: 10px;">
							<a href="<?php echo store_url("vote-".$value->symbol.".html");?>"><h5><?php echo $value->name;?> / <?php echo $value->symbol;?></h5></a>
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
							<a href="<?php echo store_url("vote-".$value->symbol.".html");?>"><h5><?php echo $value->name;?> / <?php echo $value->symbol;?></h5></a>
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
							<a href="<?php echo store_url("trade/BTC/".$value->symbol);?>"><h5><?php echo $value->name;?> / <?php echo $value->symbol;?></h5></a>
							Vote : <?php echo $value->vote;?> | <i class="fas fa-comment"></i> <?php echo $value->comment;?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>
</div>