<?php echo form_open(admin_url("email/do_create")); ?>
<div class="card">
	<div class="card-header clear-border bg-primary text-white">
		<?php echo lang('admin_email_create'); ?>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="name"><?php echo lang("admin_email_name");?></label>
					<input type="text" class="form-control" id="name" name="name" value="" required="required">
				</div>
				<div class="form-group">
					<label for="subject"><?php echo lang("admin_email_subject");?></label>
					<input type="text" class="form-control" id="subject" name="subject" required="required">
				</div>
				<div class="form-group">
					<label for="description"><?php echo lang("admin_email_description");?></label>
					<input type="text" class="form-control" id="description" name="description" value="">
				</div>
				<div class="form-group">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php echo lang("admin_email_body");?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php echo lang("admin_email_body_text");?></a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent" style="margin-top:5px;">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<textarea class="form-control" id="body" name="body" rows="8"></textarea>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<textarea class="form-control" id="body" name="body_text" rows="8"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--//Card body //-->
	<div class="card-footer">
		<button type="submit" class="btn btn-primary"><?php echo lang("submit"); ?></button>
	</div>
</div>
</form>
