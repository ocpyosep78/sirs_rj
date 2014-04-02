<div class='container'>
	<div class='panel panel-shadow'>
      <div class='panel-body'>
        <div>
        	<form name='form_profile' class='form_profile' id='form_profile' action='<?php echo base_url() ?>login/edit_profile' method='POST'>
				
				<div class="col-xs-6 col-sm-4 col-lg-4">
					<span class="form_labeling form_labeling_important">PASSWORD LAMA</span>
					<div class="input-group" id="dp3">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input name='PASSWORD' class="form-control" type="password" value="<?php echo set_value('PASSWORD'); ?>" autofocus/>
					</div>
					<span class="help-block">Masukan Min.5 digit Password</span>
				</div>

				<div class="col-xs-6 col-sm-4 col-lg-4">
					<span class="form_labeling form_labeling_important">PASSWORD BARU</span>
					<div class="input-group" id="dp3">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input name='PASSWORD_BARU' class="form-control" type="password" value="<?php echo set_value('PASSWORD_BARU'); ?>" />
					</div>
					<span class="help-block">Masukan Min.5 digit Password</span>
				</div>

				<div class="col-xs-6 col-sm-4 col-lg-4">
					<span class="form_labeling form_labeling_important">CONFIRM PASSWORD BARU</span>
					<div class="input-group" id="dp3">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					  <input name='CONFIRM_PASSWORD_BARU' class="form-control" type="password" value="<?php echo set_value('CONFIRM_PASSWORD_BARU'); ?>" />
					</div>
					<span class="help-block">Masukan Min.5 digit Password</span>
				</div>

				<div class="clearfix"></div>
				<br>

				<div class="col-xs-12 col-sm-6 col-lg-6">
					<span>Warna <span class="form_labeling form_labeling_important">MERAH</span> : Penting untuk diisi</span>
				</div>

				<div class="clearfix"></div>
				<hr>

				<div class="modal-footer">
					<button type="button" class="btn btn-default"><?php echo preset_message('cancel_btn'); ?></button>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> <?php echo preset_message('save_data_btn'); ?></button>
				</div>
        	</form>
        </div>
      </div>
    </div>
  </div>