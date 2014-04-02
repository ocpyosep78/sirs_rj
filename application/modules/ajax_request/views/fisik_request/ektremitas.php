<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>CLUBBING</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['EKSTREMITAS_CLUBBING'], 'EKSTREMITAS_CLUBBING')); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>LOKASI CLUBBING</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['EKSTREMITAS_CLUBBING_LOKASI'] ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>TREMOR</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['EKSTREMITAS_TREMOR'],'EKSTREMITAS_TREMOR' )); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>LOKASI TREMOR</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['EKSTREMITAS_TREMOR_LOKASI'] ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>EDEMA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['EXTREMITAS_BWH_IDEMA'],'EXTREMITAS_BWH_IDEMA' )); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>LOKASI EDEMA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['EKSTREMITAS_EDEMA_LOKASI'] ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>VARICES</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['EKSTREMITAS_VARICES'],'EKSTREMITAS_VARICES' )); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>LOKASI VARICES</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['EKSTREMITAS_VARICES_LOKASI'] ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>FRAKTUR</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['EKSTREMITAS_FRAKTUR'],'EKSTREMITAS_FRAKTUR' )); ?>
			<?php echo form_label(get_latin_fisik( $value['EKSTREMITAS_FRAKTUR_KET'],'EKSTREMITAS_FRAKTUR_KET' )); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>LOKASI FRAKTUR</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['EKSTREMITAS_FRAKTUR_LOKASI'] ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span>LAIN-LAIN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['EXTREMITAS_BWH_KET'] ); ?>
		</div>
	</div>

<?php endforeach; ?>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_fisik_ektremitas_', 'primary', 1, 'edit');?>