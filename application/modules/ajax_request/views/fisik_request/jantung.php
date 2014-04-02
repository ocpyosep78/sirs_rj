<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>ICTUS CORDIS</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['JANTUNG_ICTCRDS'],'JANTUNG_ICTCRDS' )); ?>
			<?php echo form_label( get_latin_fisik($value['JANTUNG_ICTCRDS_PLUS'], 'JANTUNG_ICTCRDS_PLUS') ); ?>
		</div>
	</div>

	<div class="clearfix"></div>
	<hr>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>BATAS JANTUNG</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['JANTUNG_UKURAN'], 'JANTUNG_UKURAN') ); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BATAS ATAS</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_BATAS_ATAS'],'JANTUNG_BATAS_ATAS' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BATAS KANAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_BATAS_KANAN'],'JANTUNG_BATAS_KANAN' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BATAS KIRI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_BATAS_KIRI'],'JANTUNG_BATAS_KIRI' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>LAIN-LAIN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( $value['JANTUNG_BATAS_KET'] ); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>MITRAL</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['JANTUNG_MITRAL'],'JANTUNG_MITRAL' )); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>SISTOLIK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_MITRAL_SISTOLIK'],'JANTUNG_MITRAL_SISTOLIK' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>GRADE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_MISIS_GRADE'],'JANTUNG_MISIS_GRADE' )); ?>
				<?php echo form_label( get_latin_fisik($value['JANTUNG_MISIS_KET'],'JANTUNG_MISIS_KET' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>MENJALAR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_MISIS_MENJALAR'],'JANTUNG_MISIS_MENJALAR' )); ?>
			</div>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>DIASTOLIK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_MITRAL_DIASTOLIK'],'JANTUNG_MITRAL_DIASTOLIK' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>GRADE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_MIDIAS_GRADE'],'JANTUNG_MIDIAS_GRADE' )); ?>
				<?php echo form_label( get_latin_fisik($value['JANTUNG_MIDIAS_KET'],'JANTUNG_MIDIAS_KET' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>PULMONAL</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['JANTUNG_PULMONAL'],'JANTUNG_PULMONAL' )); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>SISTOLIK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_PULMONAL_SISTOLIK'],'JANTUNG_PULMONAL_SISTOLIK' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>GRADE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_PULSIS_GRADE'],'JANTUNG_PULSIS_GRADE' )); ?>
				<?php echo form_label( get_latin_fisik($value['JANTUNG_PULSIS_KET'],'JANTUNG_PULSIS_KET' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>MENJALAR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_PULSIS_MENJALAR'],'JANTUNG_PULSIS_MENJALAR' )); ?>
			</div>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>DIASTOLIK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_PULMONAL_DIAS'],'JANTUNG_PULMONAL_DIAS' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>GRADE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_PULDIAS_GRADE'],'JANTUNG_PULDIAS_GRADE' )); ?>
				<?php echo form_label( get_latin_fisik($value['JANTUNG_PULDIAS_KET'],'JANTUNG_PULDIAS_KET' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>TRIKUSPID</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['JANTUNG_TRIKUSPID'],'JANTUNG_TRIKUSPID' )); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>SISTOLIK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_TRIKUSPID_SISTOLIK'],'JANTUNG_TRIKUSPID_SISTOLIK' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>GRADE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_TRISIS_GRADE'],'JANTUNG_TRISIS_GRADE' )); ?>
				<?php echo form_label( get_latin_fisik($value['JANTUNG_TRISIS_KET'],'JANTUNG_TRISIS_KET' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>MENJALAR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_TRISIS_MENJALAR'],'JANTUNG_TRISIS_MENJALAR' )); ?>
			</div>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>DIASTOLIK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_TRIKUSPID_DIASTOLIK'],'JANTUNG_TRIKUSPID_DIASTOLIK' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>GRADE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_TRIDIAS_GRADE'],'JANTUNG_TRIDIAS_GRADE' )); ?>
				<?php echo form_label( get_latin_fisik($value['JANTUNG_TRIDIAS_KET'],'JANTUNG_TRIDIAS_KET' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>AORTA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['JANTUNG_AORTA'],'JANTUNG_AORTA' )); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>SISTOLIK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_AORTA_SISTOLIK'],'JANTUNG_AORTA_SISTOLIK' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>GRADE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_AORSIS_GRADE'],'JANTUNG_AORSIS_GRADE' )); ?>
				<?php echo form_label( get_latin_fisik($value['JANTUNG_AORSIS_KET'],'JANTUNG_AORSIS_KET' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>MENJALAR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_AORSIS_MENJALAR'],'JANTUNG_AORSIS_MENJALAR' )); ?>
			</div>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>DIASTOLIK</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_AORTA_DIASTOLIK'],'JANTUNG_AORTA_DIASTOLIK' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>GRADE</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_AORDIAS_GRADE'],'JANTUNG_AORDIAS_GRADE' )); ?>
				<?php echo form_label( get_latin_fisik($value['JANTUNG_AORDIAS_KET'],'JANTUNG_AORDIAS_KET' )); ?>
			</div>
		</div>
	</fieldset>

	<div class="col-xs-6 col-sm-4 col-lg-3">
		<span>BUNYI : LOKASI LAIN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['JANTUNG_LOKASILAIN_BISING'],'JANTUNG_LOKASILAIN_BISING')); ?>
		</div>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KETERANGAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['JANTUNG_BISING_KET'],'JANTUNG_BISING_KET')); ?>
			</div>
		</div>
	</fieldset>

<?php endforeach; ?>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_fisik_jantung_', 'primary', 1, 'edit');?>