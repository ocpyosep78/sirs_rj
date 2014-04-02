<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span>BENTUK</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['DADA_BTK'], 'dada_btk') ).' ,'; ?>
			<?php echo form_label( get_latin_fisik($value['DADA_BTK_LOKASI'], 'dada_btk_lokasi') ); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>PERGERAKAN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(  get_latin_fisik($value['DADA_GRK'], 'dada_grk') ); ?>
		</div>
	</div>

	<div class="clearfix"></div>
	
	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>MASSA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['DADA_MSP'],'DADA_MSP' )); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LOKASI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['DADA_MASSA_LOKASI'] ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BENTUK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['DADA_MASSA_BENTUK'],'dada_massa_bentuk') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>UKURAN (cm)</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['DADA_MASSA_UKURAN'] ).' cm'; ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KONSITENSI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['DADA_MASSA_KONS'],'dada_massa_kons') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>MOBILE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['DADA_MASSA_MOBILLE'],'DADA_MASSA_MOBILLE' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>NYERI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['DADA_MASSA_NYERI'],'DADA_MASSA_NYERI' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KULIT MERAH</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['DADA_MASSA_KLTMRH'],'DADA_MASSA_KLTMRH' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>BATAS PARU HATI</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['BATAS_PARU_HATI'],'BATAS_PARU_HATI' )).', '; ?>
			<?php echo form_label(get_latin_fisik( $value['BTSPARUHATI_ICS'], 'btsparuhati_ics') ); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>PERANJAKAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['BTSPARUHATI_PERANJAKAN'],'BTSPARUHATI_PERANJAKAN' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="clearfix"></div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span>LAIN-LAIN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['DADA_KET'] ); ?>
		</div>
	</div>

<?php endforeach; ?>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_fisik_thoraks_', 'primary', 1, 'edit');?>