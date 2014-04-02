<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-6 col-sm-3 col-lg-2">
		<span class='form_labeling'>KULIT</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KEMERAHAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['MAMMAE_KLT_MERAH'],'MAMMAE_KLT_MERAH' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>PEAU D'ORANGE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['MAMMAE_KLT_ORANGE'],'MAMMAE_KLT_ORANGE' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-3 col-lg-2">
		<span>MASSA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_fisik( $value['MAMMAE_MASSA'],'MAMMAE_MASSA' )); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BENTUK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['MAMMAE_MASSA_BENTUK'], 'mammae_massa_bentuk')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LOKASI KANAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['MAMMAE_MASSA_LOKASI_KNN'], 'mammae_massa_lokasi_knn')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>UKURAN KANAN (cm)</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['MAMMAE_MASSA_UK_KNN'] ).' cm'; ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LOKASI KIRI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['MAMMAE_MASSA_LOKASI_KIRI'], 'mammae_massa_lokasi_kiri')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>UKURAN KIRI (cm)</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['MAMMAE_MASSA_UK_KIRI'] ).' cm'; ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>MOBILE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['MAMMAE_MASSA_MOBILE'],'MAMMAE_MASSA_MOBILE' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KONSISTENSI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['MAMMAE_MASSA_KONS'], 'mammae_massa_kons')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>NYERI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['MAMMAE_MASSA_NYERI'],'MAMMAE_MASSA_NYERI' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-3 col-lg-2">
		<span class='form_labeling'>PAPALIA MAMMAE</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>RETRAKSI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['MAMMAE_PAPILLA_RETRAKSI'],'MAMMAE_PAPILLA_RETRAKSI' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span>LAIN-LAIN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['MAMMAE_KET'] ); ?>
		</div>
	</div>

<?php endforeach; ?>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_fisik_mammae_', 'primary', 1, 'edit');?>