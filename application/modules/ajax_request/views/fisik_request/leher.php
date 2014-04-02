<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span>JVP</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['LHR_JVP'], 'lhr_jvp')).', '; ?>
			<?php echo ' 5+ '.form_label( get_latin_fisik($value['LHR_JVP_UKURAN'], 'lhr_jvp_ukuran')); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span>TRACHEA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['LHR_TRACHEA'], 'lhr_trachea')).', '; ?>
			<?php echo form_label( get_latin_fisik($value['LHR_TRACHEA_DEV'], 'lhr_trachea_dev')); ?>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span>KGB</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['LHR_KGB'], 'lhr_kgb')); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<span>LOKASI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LHR_KGB_LOKASI'], 'lhr_kgb_lokasi')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<span>BENTUK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LHR_KGB_BANYAK'], 'lhr_kgb_banyak')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<span>UKURAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LHR_KGB_UKURAN'], 'lhr_kgb_ukuran')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<span>KONSISTENSI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LHR_KGB_KONS'], 'lhr_kgb_kons')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<span>MOBILE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LHR_KGB_MOBILLE'],'LHR_KGB_MOBILLE')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<span>NYERI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LHR_KGB_NYERITEKAN'],'LHR_KGB_NYERITEKAN')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<span>KULIT MERAH</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LHR_KGB_KLTMRH'],'LHR_KGB_KLTMRH')); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span>KEL.TIROID</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['LHR_KEL_TIROID'], 'lhr_kel_tiroid')).', ' ?>
			<?php echo form_label( get_latin_fisik($value['LHR_TIROID'], 'lhr_tiroid')); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-6 col-lg-3">
			<span>KONSISTENSI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LHR_TIROID_KONS'], 'lhr_tiroid_kons')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-3">
			<span>BRUIT</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LHR_TIROID_BRUI'],'LHR_TIROID_BRUI')); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span>LAIN-LAIN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['LEHER_KET']); ?>
		</div>
	</div>

<?php endforeach; ?>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_fisik_leher_', 'primary', 1, 'edit');?>