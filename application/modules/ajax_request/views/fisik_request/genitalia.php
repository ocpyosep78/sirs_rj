<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>ULCER</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['GENITALIA_ULCER'],'GENITALIA_ULCER' )); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>LOKASI ULCER</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['GENITALIA_ULCER_LOKASI'] ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>HIDROCEL</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['GENITALIA_HIDROCEL'],'GENITALIA_HIDROCEL' )); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>LOKASI HIDROCEL</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['GENITALIA_HIDROCEL_LOKASI'] ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>HERNIA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['GENITALIA_HERNIA'],'GENITALIA_HERNIA' )); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>LOKASI HERNIA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['GENITALIA_HERNIA_LOKASI'] ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>HEMORROID</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['GENITALIA_HEMORROID'],'GENITALIA_HEMORROID' )); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>LOKASI HEMORROID</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['GENITALIA_HEMORROID_LOKASI'] ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span>LAIN-LAIN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['GENITALIA_KET'] ); ?>
		</div>
	</div>

<?php endforeach; ?>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_fisik_genitalia_', 'primary', 1, 'edit');?>