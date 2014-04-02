<?php $form_control = "class='form-control'"; ?>
<?php foreach($query as $key=>$value): ?>

	<!-- <div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>PENDIDIKAN TERAKHIR</span>
		<?php echo get_option('PENDIDIKAN', '', $form_control,'PENDIDIKAN'); ?>
	</div> -->

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>TINGGAL BERSAMA</span>
		<?php echo get_option('STATUS_TINGGAL', $value['STATUS_TINGGAL'], $form_control,'STATUS_TINGGAL'); ?>
	</div>

	<div class='clearfix'></div>
	<hr>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>KEBIASAAN</span>
		<p>
			<?php echo get_checkbox('KEBIASAAN1', $value['KEBIASAAN1'], $form_control, 'KEBIASAAN'); ?><br/>
			<?php echo get_checkbox('KEBIASAAN2', $value['KEBIASAAN2'], $form_control, 'KEBIASAAN'); ?><br/>
			<span>KEBIASAAN LAINNYA <sup>selain diatas</sup></span>
			<input name='KEBIASAAN3' class='form-control' value="<?php echo $value['KEBIASAAN3']; ?>"/>
		</p>
	</div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>KEMAMPUAN BAHASA</span>
		<p>
			<?php echo get_checkbox('BAHASA1', $value['BAHASA1'], $form_control, 'BAHASA'); ?><br/>
			<?php echo get_checkbox('BAHASA2', $value['BAHASA2'], $form_control, 'BAHASA'); ?><br/>
			<?php echo get_checkbox('BAHASA3', $value['BAHASA3'], $form_control, 'BAHASA'); ?><br/>
		</p>
	</div>

	<div class='clearfix'></div>
	<hr>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>BICARA</span>
		<?php echo get_option('BICARA', $value['BICARA'], $form_control,'BICARA'); ?>
	</div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>KAPAN</span>
		<input name='BICARA_GANGGUAN' class='form-control' value="<?php echo $value['BICARA_GANGGUAN']; ?>"/>
	</div>

	<div class='clearfix'></div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>BAHASA SEHARI-HARI</span>
		<input name='BAHASA_HARIAN' class='form-control' value="<?php echo $value['BAHASA_HARIAN']; ?>"/>
	</div>

	<div class='clearfix'></div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>PERLU PENERJEMAH ?</span>
		<?php echo get_option('PENTERJEMAH', $value['PENTERJEMAH'], $form_control,'PENTERJEMAH'); ?>
	</div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>BAHASA ISYARAT</span>
		<?php echo get_option('BAHASA_ISYARAT', $value['BAHASA_ISYARAT'], $form_control,'BAHASA_ISYARAT'); ?>
	</div>

	<div class='clearfix'></div>
	<hr>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>HAMBATAN BELAJAR ?</span>
		<?php echo get_option('HAMBATAN_BLJR', $value['HAMBATAN_BLJR'], $form_control,'HAMBATAN_BLJR'); ?>
	</div>

	<div class='clearfix'></div>
	<hr>

	<div class="col-xs-12 col-sm-12 col-lg-12">
		<span class='form_labeling_small'>FAKTOR PENGHAMBAT BELAJAR</span>
		<p>
			<?php echo get_checkbox('HAMBATAN_BLJR1', $value['HAMBATAN_BLJR1'], $form_control, 'ext_hambaran_bljr'); ?><br/>
			<?php echo get_checkbox('HAMBATAN_BLJR2', $value['HAMBATAN_BLJR2'], $form_control, 'ext_hambaran_bljr'); ?><br/>
			<?php echo get_checkbox('HAMBATAN_BLJR3', $value['HAMBATAN_BLJR3'], $form_control, 'ext_hambaran_bljr'); ?><br/>
			<?php echo get_checkbox('HAMBATAN_BLJR4', $value['HAMBATAN_BLJR4'], $form_control, 'ext_hambaran_bljr'); ?><br/>
			<?php echo get_checkbox('HAMBATAN_BLJR5', $value['HAMBATAN_BLJR5'], $form_control, 'ext_hambaran_bljr'); ?><br/>
			<?php echo get_checkbox('HAMBATAN_BLJR6', $value['HAMBATAN_BLJR6'], $form_control, 'ext_hambaran_bljr'); ?><br/>
			<?php echo get_checkbox('HAMBATAN_BLJR7', $value['HAMBATAN_BLJR7'], $form_control, 'ext_hambaran_bljr'); ?><br/>
			<?php echo get_checkbox('HAMBATAN_BLJR8', $value['HAMBATAN_BLJR8'], $form_control, 'ext_hambaran_bljr'); ?><br/>
		</p>
	</div>

	<div class='clearfix'></div>
	<hr>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>CARA BELAJAR YANG DISUKAI</span>
		<p>
			<?php echo get_checkbox('CARA_BLJR1', $value['CARA_BLJR1'], $form_control, 'ext_cara_bljr'); ?><br/>
			<?php echo get_checkbox('CARA_BLJR2', $value['CARA_BLJR2'], $form_control, 'ext_cara_bljr'); ?><br/>
			<?php echo get_checkbox('CARA_BLJR3', $value['CARA_BLJR3'], $form_control, 'ext_cara_bljr'); ?><br/>
			<?php echo get_checkbox('CARA_BLJR4', $value['CARA_BLJR4'], $form_control, 'ext_cara_bljr'); ?><br/>
			<?php echo get_checkbox('CARA_BLJR5', $value['CARA_BLJR5'], $form_control, 'ext_cara_bljr'); ?><br/>
		</p>
	</div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>KEBUTUHAN PEMBELAJARAN</span>
		<p>
			<?php echo get_checkbox('KEB_PEMBELAJARAN1', $value['KEB_PEMBELAJARAN1'], $form_control, 'ext_keb_pembelajaran'); ?><br/>
			<?php echo get_checkbox('KEB_PEMBELAJARAN2', $value['KEB_PEMBELAJARAN2'], $form_control, 'ext_keb_pembelajaran'); ?><br/>
			<?php echo get_checkbox('KEB_PEMBELAJARAN3', $value['KEB_PEMBELAJARAN3'], $form_control, 'ext_keb_pembelajaran'); ?><br/>
			<?php echo get_checkbox('KEB_PEMBELAJARAN4', $value['KEB_PEMBELAJARAN4'], $form_control, 'ext_keb_pembelajaran'); ?>
			<span>, JELASKAN</span>
			<br>
			<input name='KEB_PEMBELAJARAN5' class='form-control' value="<?php echo $value['KEB_PEMBELAJARAN5']; ?>"/>
		</p>
	</div>
	<div class='clearfix'></div>

<?php endforeach; ?>

<input type="hidden" value="#content-data-asuhan-keperawatan" name="referer_">