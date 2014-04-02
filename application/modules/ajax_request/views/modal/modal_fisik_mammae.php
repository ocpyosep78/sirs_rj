<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-6 col-sm-4 col-lg-">
		<span class='form_labeling'>KULIT</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>KEMERAHAN</span>
			<?php echo get_option_fisik('MAMMAE_KLT_MERAH', $value['MAMMAE_KLT_MERAH'],'class="form-control"','MAMMAE_KLT_MERAH'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>PEAU D'ORANGE</span>
			<?php echo get_option_fisik('MAMMAE_KLT_ORANGE', $value['MAMMAE_KLT_ORANGE'],'class="form-control"','MAMMAE_KLT_ORANGE'); ?>
		</div>
	</fieldset>

	<div class="clearfix"></div>
	<hr>

	<div class="col-xs-6 col-sm-4 col-lg-">
		<span class='form_labeling'>MASSA</span>
		<?php echo get_option_fisik('MAMMAE_MASSA', $value['MAMMAE_MASSA'],'class="form-control"','MAMMAE_MASSA'); ?>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>BENTUK</span>
			<?php echo get_option_fisik('MAMMAE_MASSA_BENTUK', $value['MAMMAE_MASSA_BENTUK'],'class="form-control"','MAMMAE_MASSA_BENTUK'); ?>
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>LOKASI KANAN</span>
			<?php echo get_option_fisik('MAMMAE_MASSA_LOKASI_KNN', $value['MAMMAE_MASSA_LOKASI_KNN'],'class="form-control"','MAMMAE_MASSA_LOKASI_KNN'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>UKURAN KANAN (cm)</span>
			<input name='MAMMAE_MASSA_UK_KNN' class='form-control' value='<?php echo $value['MAMMAE_MASSA_UK_KNN'] ?>' />
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>LOKASI KIRI</span>
			<?php echo get_option_fisik('MAMMAE_MASSA_LOKASI_KIRI', $value['MAMMAE_MASSA_LOKASI_KIRI'],'class="form-control"','MAMMAE_MASSA_LOKASI_KIRI'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>UKURAN KIRI (cm)</span>
			<input name='MAMMAE_MASSA_UK_KIRI' class='form-control' value='<?php echo $value['MAMMAE_MASSA_UK_KIRI'] ?>' />
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>MOBILE</span>
			<?php echo get_option_fisik('MAMMAE_MASSA_MOBILE', $value['MAMMAE_MASSA_MOBILE'],'class="form-control"','MAMMAE_MASSA_MOBILE'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>KONSISTENSI</span>
			<?php echo get_option_fisik('MAMMAE_MASSA_KONS', $value['MAMMAE_MASSA_KONS'],'class="form-control"','MAMMAE_MASSA_KONS'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>NYERI</span>
			<?php echo get_option_fisik('MAMMAE_MASSA_NYERI', $value['MAMMAE_MASSA_NYERI'],'class="form-control"','MAMMAE_MASSA_NYERI'); ?>
		</div>
	</fieldset>

	<div class="clearfix"></div>
	<hr>

	<div class="col-xs-6 col-sm-4 col-lg-">
		<span class='form_labeling'>PAPILIA MAMMAE</span>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>RETRAKSI</span>
			<?php echo get_option_fisik('MAMMAE_PAPILLA_RETRAKSI', $value['MAMMAE_PAPILLA_RETRAKSI'],'class="form-control"','MAMMAE_PAPILLA_RETRAKSI'); ?>
		</div>
	</fieldset>

	<div class="clearfix"></div>

	<div class="col-xs-8 col-sm-8 col-lg-8">
		<span class='form_labeling'>LAIN-LAIN</span>
		<input class="form-control" name="MAMMAE_KET" value='<?php echo $value['MAMMAE_KET']; ?>' />
	</div>

	<input type="hidden" value="#content-data-mammae" name="referer_">

<?php endforeach; ?>

	<div class="clearfix"></div>