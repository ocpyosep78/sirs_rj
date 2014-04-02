<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling'>JVP</span>
		<?php echo get_option_fisik('LHR_JVP', $value['LHR_JVP'],'class="form-control"','lhr_jvp'); ?>
		<?php echo get_option_fisik('LHR_JVP_UKURAN', $value['LHR_JVP_UKURAN'],'class="form-control"','lhr_jvp_ukuran'); ?>
	</div>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling'>TRACHEA</span>
		<?php echo get_option_fisik('LHR_TRACHEA', $value['LHR_TRACHEA'],'class="form-control"','lhr_trachea'); ?>
		<?php echo get_option_fisik('LHR_TRACHEA_DEV', $value['LHR_TRACHEA_DEV'],'class="form-control"','lhr_trachea_dev'); ?>
	</div>

	<div class="clearfix"></div>
	<hr>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling'>KGB</span>
		<?php echo get_option_fisik('LHR_KGB', $value['LHR_KGB'],'class="form-control"','lhr_kgb'); ?>
	</div>


	<fieldset>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>LOKASI</span>
			<?php echo get_option_fisik('LHR_KGB_LOKASI', $value['LHR_KGB_LOKASI'],'class="form-control"','lhr_kgb_lokasi'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>BENTUK</span>
			<?php echo get_option_fisik('LHR_KGB_BANYAK', $value['LHR_KGB_BANYAK'],'class="form-control"','lhr_kgb_banyak'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>UKURAN</span>
			<?php echo get_option_fisik('LHR_KGB_UKURAN', $value['LHR_KGB_UKURAN'],'class="form-control"','lhr_kgb_ukuran'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>KONSISTENSI</span>
			<?php echo get_option_fisik('LHR_KGB_KONS', $value['LHR_KGB_KONS'],'class="form-control"','lhr_kgb_kons'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>MOBILE</span>
			<?php echo get_option_fisik('LHR_KGB_MOBILLE', $value['LHR_KGB_MOBILLE'],'class="form-control"','LHR_KGB_MOBILLE'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>NYERI</span>
			<?php echo get_option_fisik('LHR_KGB_NYERITEKAN', $value['LHR_KGB_NYERITEKAN'],'class="form-control"','LHR_KGB_NYERITEKAN'); ?>
				<?php //echo form_label( $value['LHR_KGB_NYERITEKAN'] ); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>KULIT KEMERAHAN</span>
			<?php echo get_option_fisik('LHR_KGB_KLTMRH', $value['LHR_KGB_KLTMRH'],'class="form-control"','LHR_KGB_KLTMRH'); ?>
		</div>
	</fieldset>

	<div class="clearfix"></div>
	<hr>

	<div class="col-xs-6 col-sm-4 col-lg-4">
		<span class='form_labeling'>KEL.TIROID</span>
		<?php echo get_option_fisik('LHR_KEL_TIROID', $value['LHR_KEL_TIROID'],'class="form-control"','lhr_kel_tiroid'); ?>
		<?php echo get_option_fisik('LHR_TIROID', $value['LHR_TIROID'],'class="form-control"','lhr_tiroid'); ?>
	</div>

	<fieldset>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>KONSISTENSI</span>
			<?php echo get_option_fisik('LHR_TIROID_KONS', $value['LHR_TIROID_KONS'],'class="form-control"','lhr_tiroid_kons'); ?>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>BRUIT</span>
			<?php echo get_option_fisik('LHR_TIROID_BRUI', $value['LHR_TIROID_BRUI'],'class="form-control"','LHR_TIROID_BRUI'); ?>
		</div>
	</fieldset>

	<div class="clearfix"></div>
	<hr>

	<div class="col-xs-8 col-sm-8 col-lg-8">
		<span class='form_labeling'>LAIN-LAIN</span>
		<input class="form-control" name="LEHER_KET" value='<?php echo $value['LEHER_KET']; ?>' />
	</div>

	<input type="hidden" value="#content-data-leher" name="referer_">

<?php endforeach; ?>
	
	<div class="clearfix"></div>