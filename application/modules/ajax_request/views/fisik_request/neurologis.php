<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>NEUROLOGIS</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>CLUBBING</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['NEUROLOGIS_CLUBBING'],  'NEUROLOGIS_CLUBBING')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LOKASI CLUBBING</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['NEUROLOGIS_CLUBBING_LOKASI'] ); ?>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>TREMOR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['NEUROLOGIS_TREMOR'], 'NEUROLOGIS_TREMOR' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LOKASI TREMOR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['NEUROLOGIS_TREMOR_LOKASI'] ); ?>
			</div>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-6">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['NEUROLOGIS_KET'] ); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>REFLEKS</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KPR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['REFLEKS_KPR'], 'REFLEKS_KPR' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>APR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['REFLEKS_APR'], 'REFLEKS_APR' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BICEPS / TRICEPS</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['REFLEKS_BICEPS'], 'REFLEKS_BICEPS' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>LAIN - LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['REFLEKS_KET'] ); ?>
			</div>
		</div>
	</fieldset>

<?php endforeach; ?>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_fisik_neurologis_', 'primary', 1, 'edit');?>