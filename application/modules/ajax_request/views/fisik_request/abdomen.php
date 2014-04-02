<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>ABDOMEN</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BENTUK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABDOMEN'],'ABDOMEN' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KETEGANGAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_KONSISTENSI'],'ABD_KONSISTENSI' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_LAINLAIN'],'ABD_LAINLAIN' )); ?>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>NYERI TEKAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_NYERI_TEKAN'],'ABD_NYERI_TEKAN' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LOKASI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['ABD_NYERITEKAN_LOKASI'] ); ?>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>NYERI LEPAS</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_NYERILEPAS'],'ABD_NYERILEPAS' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LOKASI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['ABD_NYERILEPAS_LOKASI'] ); ?>
			</div>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>REFFERED PAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_REFFEREDPAIN'],'ABD_REFFEREDPAIN' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LOKASI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['ABD_REFFEREDPAIN_LOKASI'] ); ?>
			</div>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>MASSA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_MASSA'],'ABD_MASSA' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>LOKASI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['ABD_MASSA_LOKASI'] ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BENTUK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_MASSA_BENTUK'],'ABD_MASSA_BENTUK' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>UKURAN (cm)</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['ABD_MASSA_UKURAN'] ).' cm'; ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KONSITENSI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_MASSA_KONS'],'ABD_MASSA_KONS' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>MOBILE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_MASSA_MOBILLE'],'ABD_MASSA_MOBILLE' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>NYERI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_MASSA_NYERI'],'ABD_MASSA_NYERI' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KULIT KEMERAHAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_MASSA_KLTMRH'],'ABD_MASSA_KLTMRH' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>HEPAR</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>PEMBESARAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_HEPAR'],'ABD_HEPAR' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>UKURAN : BAC (cm)</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['ABD_HEPAR_BAC'] ).' cm'; ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>UKURAN : BPX (cm)</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['ABD_HEPAR_BPX'] ).' cm'; ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>TEPI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_HEPAR_TEPI'],'ABD_HEPAR_TEPI' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KONSITENSI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_HEPAR_KONSISTENSI'],'ABD_HEPAR_KONSISTENSI' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>PERMUKAAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_HEPAR_PERMUKAAN'],'ABD_HEPAR_PERMUKAAN' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>NYERI TEKAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD__HEPAR_NYERITEKAN'],'ABD__HEPAR_NYERITEKAN' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BRUIT</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_HEPAR_MUKA_BRUI'],'ABD_HEPAR_MUKA_BRUI' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>LIEN</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>PEMBESARAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_LIEN'],'ABD_LIEN' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>UKURAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_LIEN_TERABA'],'ABD_LIEN_TERABA' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KONSITENSI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_LIEN_KONS'],'ABD_LIEN_KONS' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>GINJAL</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BALLOTEMENT</span>
			<div class="bs-callout bs-callout-info">
				<?php //echo form_label(get_latin_fisik( $value['ADB_GINJAL_BALLOTEMENT'],'ADB_GINJAL_BALLOTEMENT' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>NYERI KETOK CVA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_GINJAL_NYERIKETOK'],'ABD_GINJAL_NYERIKETOK' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-4 col-sm-3 col-lg-2">
		<span class='form_labeling'>VESIKA URINARIA</span>
	</div>
	
	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>TERABA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin_fisik( $value['ABD_VESIKAURINARIA_TERABA'],'ABD_VESIKAURINARIA_TERABA' )); ?>
			</div>
		</div>
	</fieldset>

<?php endforeach; ?>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_fisik_abdomen_', 'primary', 1, 'edit');?>