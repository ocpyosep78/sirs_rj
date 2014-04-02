<?php if(count($query['result']) > 0) : ?>
	<?php echo $print; ?>
<?php foreach ($query['result'] as $key => $value): ?>
	
	<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
		<span>DARI</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_sumber_anamnesis($value['SUMBER'])); ?>
		</div>
	</div>

	<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
		<span>KELUHAN UTAMA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['KELUHAN_UTAMA']); ?>
		</div>
	</div>

	<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
		<span>RIWAYAT PENYAKIT UTAMA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['PASIEN_ILLNES']); ?>
		</div>
	</div>

	<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
		<span>RIWAYAT PENGOBATAN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['ANAMNESA']); ?>
		</div>
	</div>

	<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
		<span>RIWAYAT PENYAKIT TERDAHULU</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['RIWAYAT_PENYAKIT']); ?>
		</div>
	</div>

	<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
		<span>RIWAYAT PENYAKIT KELUARGA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['RIWAYAT_PENYAKIT_KELUARGA']); ?>
		</div>
	</div>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_anam_edit', 'primary', 1, 'edit');?>

<?php endforeach; ?>
<?php else: ?>
	
	<div class="empty-row">
		<?php echo preset_message('unavailable_data'); ?>
	</div>
	<hr>
	<?php echo main_button('add_data_btn', 'modal_anam_', 'primary', 1, 'add');?>

<?php endif; ?>