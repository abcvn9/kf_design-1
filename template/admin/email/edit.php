<div class="card">
	<div class="card-header clear-border bg-primary text-white">
		<?php echo lang('admin_email_edit'); ?>
		<small class="float-sm-right"><a href="<?php echo admin_url('email'); ?>" class="text-white">Back</a> </small>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs" id="EmailTemplateTab" role="tablist">
					<?php
					foreach ($xEmail as $rEmail){
					?>
						<li class="nav-item">
							<a class="nav-link <?php echo($rEmail->language=="english"?"active":''); ?>" id="<?php echo $rEmail->language; ?>-tab" data-toggle="tab" href="#<?php echo $rEmail->language; ?>" role="tab" aria-controls="<?php echo $rEmail->language; ?>" aria-selected="<?php echo($rEmail->language=="english"?"true":'false'); ?>"><?php echo ucfirst($rEmail->language); ?></a>
						</li>
					<?php
					}
					foreach ($newLang as $rLang){
					?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo admin_url("email-add-lang/".$rLang."/".$emailName); ?>" role="tab"><?php echo ucfirst($rLang); ?><sup>+</sup></a>
						</li>
					<?php
					}
					?>

				</ul>
				<div class="tab-content" id="EmailTemplateTabContent">
					<?php
					foreach ($xEmail as $rEmail){
						?>
						<div class="tab-pane fade <?php echo($rEmail->language=="english"?"show active":''); ?>" id="<?php echo $rEmail->language; ?>" role="tabpanel" aria-labelledby="<?php echo $rEmail->language; ?>-tab">

							<?php echo form_open(admin_url("email/update")); ?>
								<input type="hidden" name="language" value="<?php echo $rEmail->language; ?>">
								<div class="form-group">
									<label for="<?php echo $rEmail->language; ?>-name"><?php echo lang("admin_email_name");?></label>
									<input type="text" class="form-control" id="<?php echo $rEmail->language; ?>-name" name="name" value="<?php echo $rEmail->name; ?>" readonly required="required">
								</div>
								<div class="form-group">
									<label for="<?php echo $rEmail->language; ?>-subject"><?php echo lang("admin_email_subject");?></label>
									<input type="text" class="form-control" id="<?php echo $rEmail->language; ?>-subject" name="subject" value="<?php echo $rEmail->subject; ?>" required="required">
								</div>
								<div class="form-group">
									<label for="<?php echo $rEmail->language; ?>-description"><?php echo lang("admin_email_description");?></label>
									<input type="text" class="form-control" id="<?php echo $rEmail->language; ?>-description" value="<?php echo $rEmail->description; ?>" name="description" value="">
								</div>
								<div class="form-group">
									<ul class="nav nav-tabs" id="<?php echo $rEmail->language; ?>-bodyTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="<?php echo $rEmail->language; ?>-body-tab" data-toggle="tab" href="#<?php echo $rEmail->language; ?>-body" role="tab" aria-controls="<?php echo $rEmail->language; ?>-body" aria-selected="true"><?php echo lang("admin_email_body");?></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="<?php echo $rEmail->language; ?>-body_text-tab" data-toggle="tab" href="#<?php echo $rEmail->language; ?>-body_text" role="tab" aria-controls="<?php echo $rEmail->language; ?>-body_text" aria-selected="false"><?php echo lang("admin_email_body_text");?></a>
										</li>
									</ul>
									<div class="tab-content" id="<?php echo $rEmail->language; ?>-bodyTabContent" style="margin-top:5px;">
										<div class="tab-pane fade show active" id="<?php echo $rEmail->language; ?>-body" role="tabpanel" aria-labelledby="<?php echo $rEmail->language; ?>-body-tab">
											<textarea class="form-control" id="<?php echo $rEmail->language; ?>-body" name="body" rows="8" required="required"><?php echo html_entity_decode($rEmail->body); ?></textarea>
										</div>
										<div class="tab-pane fade" id="<?php echo $rEmail->language; ?>-body_text" role="tabpanel" aria-labelledby="<?php echo $rEmail->language; ?>-body_text-tab">
											<textarea class="form-control" id="<?php echo $rEmail->language; ?>-body_text" name="body_text" rows="8" required="required"><?php echo $rEmail->body_text; ?></textarea>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary"><?php echo lang("save"); ?></button>
								<button type="submit" name="del" value="1" class="btn btn-danger"><?php echo lang("del"); ?></button>
							</form>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>

	</div><!--//Card body //-->
</div>
