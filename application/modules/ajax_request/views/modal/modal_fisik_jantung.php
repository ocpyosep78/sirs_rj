<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling_small'>ICTUS CORDIS</span>
		<?php echo get_option_fisik('JANTUNG_ICTCRDS', $value['JANTUNG_ICTCRDS'],'class="form-control"','JANTUNG_ICTCRDS'); ?>
		<?php echo get_option_fisik('JANTUNG_ICTCRDS_PLUS', $value['JANTUNG_ICTCRDS_PLUS'],'class="form-control"','JANTUNG_ICTCRDS_PLUS'); ?>
	</div>

	<div class="clearfix"></div>
	<hr>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling_small'>BATAS JANTUNG</span>
		<?php echo get_option_fisik('JANTUNG_UKURAN', $value['JANTUNG_UKURAN'],'class="form-control"','JANTUNG_UKURAN'); ?>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>BATAS ATAS</span>
			<?php echo get_option_fisik('JANTUNG_BATAS_ATAS', $value['JANTUNG_BATAS_ATAS'],'class="form-control"','JANTUNG_BATAS_ATAS'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>BATAS KANAN</span>
			<?php echo get_option_fisik('JANTUNG_BATAS_KANAN', $value['JANTUNG_BATAS_KANAN'],'class="form-control"','JANTUNG_BATAS_KANAN'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>BATAS KIRI</span>
			<?php echo get_option_fisik('JANTUNG_BATAS_KIRI', $value['JANTUNG_BATAS_KIRI'],'class="form-control"','JANTUNG_BATAS_KIRI'); ?>
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-12 col-sm-12 col-lg-12">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input class="form-control" name="JANTUNG_BATAS_KET" value='<?php echo $value['JANTUNG_BATAS_KET']; ?>' />
		</div>
	</fieldset>

	<div class="clearfix"></div>
	<hr>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling_small'>BUNYI : MITRAL</span>
		<?php echo get_option_fisik('JANTUNG_MITRAL', $value['JANTUNG_MITRAL'],'class="form-control"','JANTUNG_MITRAL'); ?>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>SISTOLIK</span>
			<?php echo get_option_fisik('JANTUNG_MITRAL_SISTOLIK', $value['JANTUNG_MITRAL_SISTOLIK'],'class="form-control"','JANTUNG_MITRAL_SISTOLIK'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>GRADE</span>
			<?php echo get_option_fisik('JANTUNG_MISIS_GRADE', $value['JANTUNG_MISIS_GRADE'],'class="form-control"','JANTUNG_MISIS_GRADE'); ?>
			<?php echo get_option_fisik('JANTUNG_MISIS_KET', $value['JANTUNG_MISIS_KET'],'class="form-control"','JANTUNG_MISIS_KET'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>MENJALAR</span>
			<?php echo get_option_fisik('JANTUNG_MISIS_MENJALAR', $value['JANTUNG_MISIS_MENJALAR'],'class="form-control"','JANTUNG_MISIS_MENJALAR'); ?>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>DIASTOLIK</span>
			<?php echo get_option_fisik('JANTUNG_MITRAL_DIASTOLIK', $value['JANTUNG_MITRAL_DIASTOLIK'],'class="form-control"','JANTUNG_MITRAL_DIASTOLIK'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>GRADE</span>
			<?php echo get_option_fisik('JANTUNG_MIDIAS_GRADE', $value['JANTUNG_MIDIAS_GRADE'],'class="form-control"','JANTUNG_MIDIAS_GRADE'); ?>
			<?php echo get_option_fisik('JANTUNG_MIDIAS_KET', $value['JANTUNG_MIDIAS_KET'],'class="form-control"','JANTUNG_MIDIAS_KET'); ?>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling_small'>BUNYI : PULMONAL</span>
		<?php echo get_option_fisik('JANTUNG_PULMONAL', $value['JANTUNG_PULMONAL'],'class="form-control"','JANTUNG_PULMONAL'); ?>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>SISTOLIK</span>
			<?php echo get_option_fisik('JANTUNG_PULMONAL_SISTOLIK', $value['JANTUNG_PULMONAL_SISTOLIK'],'class="form-control"','JANTUNG_PULMONAL_SISTOLIK'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>GRADE</span>
			<?php echo get_option_fisik('JANTUNG_PULSIS_GRADE', $value['JANTUNG_PULSIS_GRADE'],'class="form-control"','JANTUNG_PULSIS_GRADE'); ?>
			<?php echo get_option_fisik('JANTUNG_PULSIS_KET', $value['JANTUNG_PULSIS_KET'],'class="form-control"','JANTUNG_PULSIS_KET'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>MENJALAR</span>
			<?php echo get_option_fisik('JANTUNG_PULSIS_MENJALAR', $value['JANTUNG_PULSIS_MENJALAR'],'class="form-control"','JANTUNG_PULSIS_MENJALAR'); ?>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>DIASTOLIK</span>
			<?php echo get_option_fisik('JANTUNG_PULMONAL_DIAS', $value['JANTUNG_PULMONAL_DIAS'],'class="form-control"','JANTUNG_PULMONAL_DIAS'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>GRADE</span>
			<?php echo get_option_fisik('JANTUNG_PULDIAS_GRADE', $value['JANTUNG_PULDIAS_GRADE'],'class="form-control"','JANTUNG_PULDIAS_GRADE'); ?>
			<?php echo get_option_fisik('JANTUNG_PULDIAS_KET', $value['JANTUNG_PULDIAS_KET'],'class="form-control"','JANTUNG_PULDIAS_KET'); ?>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling_small'>BUNYI : TRIKUSPID</span>
		<?php echo get_option_fisik('JANTUNG_TRIKUSPID', $value['JANTUNG_TRIKUSPID'],'class="form-control"','JANTUNG_TRIKUSPID'); ?>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>SISTOLIK</span>
			<?php echo get_option_fisik('JANTUNG_TRIKUSPID_SISTOLIK', $value['JANTUNG_TRIKUSPID_SISTOLIK'],'class="form-control"','JANTUNG_TRIKUSPID_SISTOLIK'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>GRADE</span>
			<?php echo get_option_fisik('JANTUNG_TRISIS_GRADE', $value['JANTUNG_TRISIS_GRADE'],'class="form-control"','JANTUNG_TRISIS_GRADE'); ?>
			<?php echo get_option_fisik('JANTUNG_TRISIS_KET', $value['JANTUNG_TRISIS_KET'],'class="form-control"','JANTUNG_TRISIS_KET'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>MENJALAR</span>
			<?php echo get_option_fisik('JANTUNG_TRISIS_MENJALAR', $value['JANTUNG_TRISIS_MENJALAR'],'class="form-control"','JANTUNG_TRISIS_MENJALAR'); ?>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>DIASTOLIK</span>
			<?php echo get_option_fisik('JANTUNG_TRIKUSPID_DIASTOLIK', $value['JANTUNG_TRIKUSPID_DIASTOLIK'],'class="form-control"','JANTUNG_TRIKUSPID_DIASTOLIK'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>GRADE</span>
			<?php echo get_option_fisik('JANTUNG_TRIDIAS_GRADE', $value['JANTUNG_TRIDIAS_GRADE'],'class="form-control"','JANTUNG_TRIDIAS_GRADE'); ?>
			<?php echo get_option_fisik('JANTUNG_TRIDIAS_KET', $value['JANTUNG_TRIDIAS_KET'],'class="form-control"','JANTUNG_TRIDIAS_KET'); ?>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling_small'>BUNYI : AORTA</span>
		<?php echo get_option_fisik('JANTUNG_AORTA', $value['JANTUNG_AORTA'],'class="form-control"','JANTUNG_AORTA'); ?>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>SISTOLIK</span>
			<?php echo get_option_fisik('JANTUNG_AORTA_SISTOLIK', $value['JANTUNG_AORTA_SISTOLIK'],'class="form-control"','JANTUNG_AORTA_SISTOLIK'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>GRADE</span>
			<?php echo get_option_fisik('JANTUNG_AORSIS_GRADE', $value['JANTUNG_AORSIS_GRADE'],'class="form-control"','JANTUNG_AORSIS_GRADE'); ?>
			<?php echo get_option_fisik('JANTUNG_AORSIS_KET', $value['JANTUNG_AORSIS_KET'],'class="form-control"','JANTUNG_AORSIS_KET'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>MENJALAR</span>
			<?php echo get_option_fisik('JANTUNG_AORSIS_MENJALAR', $value['JANTUNG_AORSIS_MENJALAR'],'class="form-control"','JANTUNG_AORSIS_MENJALAR'); ?>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>DIASTOLIK</span>
			<?php echo get_option_fisik('JANTUNG_AORTA_DIASTOLIK', $value['JANTUNG_AORTA_DIASTOLIK'],'class="form-control"','JANTUNG_AORTA_DIASTOLIK'); ?>
		
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>GRADE</span>
			<?php echo get_option_fisik('JANTUNG_AORDIAS_GRADE', $value['JANTUNG_AORDIAS_GRADE'],'class="form-control"','JANTUNG_AORDIAS_GRADE'); ?>
			<?php echo get_option_fisik('JANTUNG_AORDIAS_KET', $value['JANTUNG_AORDIAS_KET'],'class="form-control"','JANTUNG_AORDIAS_KET'); ?>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling_small'>BUNYI : LOKASI LAIN</span>
		<?php echo get_option_fisik('JANTUNG_LOKASILAIN_BISING', $value['JANTUNG_LOKASILAIN_BISING'],'class="form-control"','JANTUNG_LOKASILAIN_BISING'); ?>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>KETERANGAN</span>
			<?php echo get_option_fisik('JANTUNG_BISING_KET', $value['JANTUNG_BISING_KET'],'class="form-control"','JANTUNG_BISING_KET'); ?>
		</div>
	</fieldset>

	<input type="hidden" value="#content-data-jantung" name="referer_">

<?php endforeach; ?>

	<div class="clearfix"></div>