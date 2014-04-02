<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling'>BENTUK</span>
		<?php echo get_option_fisik('DADA_BTK', $value['DADA_BTK'],'class="form-control"','dada_btk'); ?>
		<?php echo get_option_fisik('DADA_BTK_LOKASI', $value['DADA_BTK_LOKASI'],'class="form-control"','dada_btk_lokasi'); ?>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling'>PERGERAKAN</span>
		<?php echo get_option_fisik('DADA_GRK', $value['DADA_GRK'],'class="form-control"','dada_grk'); ?>
	</div>

	<div class="clearfix"></div>
	<hr>
	
	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling'>MASSA</span>
		<?php echo get_option_fisik('DADA_MSP', $value['DADA_MSP'],'class="form-control"','DADA_MSP'); ?>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>LOKASI</span>
			<input class='form-control' name='DADA_MASSA_LOKASI' value='<?php echo $value['DADA_MASSA_LOKASI']; ?>' />
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>BENTUK</span>
			<?php echo get_option_fisik('DADA_MASSA_BENTUK', $value['DADA_MASSA_BENTUK'],'class="form-control"','dada_massa_bentuk'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>UKURAN (cm)</span>
			<input class='form-control' name='DADA_MASSA_UKURAN' value='<?php echo $value['DADA_MASSA_UKURAN']; ?>' />
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>KONSITENSI</span>
			<?php echo get_option_fisik('DADA_MASSA_KONS', $value['DADA_MASSA_KONS'],'class="form-control"','dada_massa_kons'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>MOBILE</span>
			<?php echo get_option_fisik('DADA_MASSA_MOBILLE', $value['DADA_MASSA_MOBILLE'],'class="form-control"','DADA_MASSA_MOBILLE'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>NYERI</span>
			<?php echo get_option_fisik('DADA_MASSA_NYERI', $value['DADA_MASSA_NYERI'],'class="form-control"','DADA_MASSA_NYERI'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>KULIT KEMERAHAN</span>
			<?php echo get_option_fisik('DADA_MASSA_KLTMRH', $value['DADA_MASSA_KLTMRH'],'class="form-control"','DADA_MASSA_KLTMRH'); ?>
		</div>
	</fieldset>

	<div class="clearfix"></div>
	<hr>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling'>BATAS PARU HATI</span>
		<?php echo get_option_fisik('BATAS_PARU_HATI', $value['BATAS_PARU_HATI'],'class="form-control"','BATAS_PARU_HATI'); ?>
		<?php echo get_option_fisik('BTSPARUHATI_ICS', $value['BTSPARUHATI_ICS'],'class="form-control"','btsparuhati_ics'); ?>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>PERANJAKAN</span>
			<?php echo get_option_fisik('BTSPARUHATI_PERANJAKAN', $value['BTSPARUHATI_PERANJAKAN'],'class="form-control"','BTSPARUHATI_PERANJAKAN'); ?>
		</div>
	</fieldset>

	<div class="clearfix"></div>

	<div class="col-xs-12 col-sm-12 col-lg-12">
		<span class='form_labeling'>LAIN-LAIN</span>
		<input class="form-control" name="DADA_KET" value='<?php echo $value['DADA_KET']; ?>' />
	</div>

	<input type="hidden" value="#content-data-thoraks" name="referer_">

<?php endforeach; ?>

	<div class="clearfix"></div>