<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>KEPALA</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KEPALA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['KEPALA'], 'kepala') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['KEPALA_KET']); ?>
			</div>
		</div>
	</fieldset>

	<div class="clearfix"></div>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>MATA</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>SKLERA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['MATA_SKLERA'], 'mata_sklera') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KONJUNGTIVA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['MATA_KONJUNGTIVA'], 'mata_konjungtiva') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['MATA_KET']); ?>
			</div>
		</div>
	</fieldset>

	<div class="clearfix"></div>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>TELINGA</span>
	</div>

	<fieldset>	
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>PENDENGARAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['TELINGA_PENDENGARAN'], 'telinga_pendengaran') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>CAE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['TELINGA_CAE'], 'telinga_cae') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>SEKRET</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['TELINGA_SEKRET'],'TELINGA_SEKRET' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>MEMBRAN TYMPANI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['MEMBRANTYMPANI_INTAK'],'MEMBRANTYMPANI_INTAK' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['TELINGA_KET']); ?>
			</div>
		</div>
	</fieldset>

	<div class="clearfix"></div>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>HIDUNG</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>HIDUNG PECAH</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['HIDUNG_PCH'],'HIDUNG_PCH' )); ?>
			</div>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>SEKRET</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['HIDUNG_SEKRET'],'HIDUNG_SEKRET' )); ?>
			</div>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>CONCHA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['HIDUNG_CONCHA'],'HIDUNG_CONCHA' )); ?>
			</div>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>SEPTUM DEVIASI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['HIDUNG_SEPTUMDEVIASI'],'HIDUNG_SEPTUMDEVIASI' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['HIDUNG_KET'] ); ?>
			</div>
		</div>
	</fieldset>

	<div class="clearfix"></div>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>TENGGOROKAN</span>
	</div>

	<fieldset>		
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>TONSIL</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['TENGGOROKAN_TONSIL'],'TENGGOROKAN_TONSIL' )).', '; ?>
				<?php echo form_label( get_latin_fisik($value['TONSIL_MEMBESAR'],'TONSIL_MEMBESAR' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>FARING</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['TENGGOROKAN_FARING'],'TENGGOROKAN_FARING' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['TENGGOROKAN_KET'] ); ?>
			</div>
		</div>
	</fieldset>

	<div class="clearfix"></div>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>LIDAH</span>
	</div>

	<fieldset>	
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LIDAH</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['LIDAH'],'LIDAH' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['LIDAH_KET'] ); ?>
			</div>
		</div>
	</fieldset>

	<div class="clearfix"></div>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>BIBIR</span>
	</div>

	<fieldset>	
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BIBIR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['BIBIR'],'BIBIR' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['BIBIR_KET'] ); ?>
			</div>
		</div>
	</fieldset>
	
<?php endforeach; ?>

	<div class="clearfix"></div>
	<?php echo main_button('edit_data_btn', 'modal_fisik_kepala_', 'primary', 1, 'edit');?>
