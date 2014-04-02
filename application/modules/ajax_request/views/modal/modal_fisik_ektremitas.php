<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span class='form_labeling_small'>CLUBBING</span>
		<?php echo get_option_fisik('EKSTREMITAS_CLUBBING', $value['EKSTREMITAS_CLUBBING'],'class="form-control"','EKSTREMITAS_CLUBBING'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>LOKASI CLUBBING</span>
		<input class='form-control' name='EKSTREMITAS_CLUBBING_LOKASI' value='<?php echo $value['EKSTREMITAS_CLUBBING_LOKASI']; ?>' />
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span class='form_labeling_small'>TREMOR</span>
		<?php echo get_option_fisik('EKSTREMITAS_TREMOR', $value['EKSTREMITAS_TREMOR'],'class="form-control"','EKSTREMITAS_TREMOR'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>LOKASI TREMOR</span>
		<input class='form-control' name='EKSTREMITAS_TREMOR_LOKASI' value='<?php echo $value['EKSTREMITAS_TREMOR_LOKASI']; ?>' />
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span class='form_labeling_small'>EDEMA</span>
		<?php echo get_option_fisik('EXTREMITAS_BWH_IDEMA', $value['EXTREMITAS_BWH_IDEMA'],'class="form-control"','EXTREMITAS_BWH_IDEMA'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>LOKASI EDEMA</span>
		<input class='form-control' name='EKSTREMITAS_EDEMA_LOKASI' value='<?php echo $value['EKSTREMITAS_EDEMA_LOKASI']; ?>' />
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span class='form_labeling_small'>VARICES</span>
		<?php echo get_option_fisik('EKSTREMITAS_VARICES', $value['EKSTREMITAS_VARICES'],'class="form-control"','EKSTREMITAS_VARICES'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>LOKASI VARICES</span>
		<input class='form-control' name='EKSTREMITAS_VARICES_LOKASI' value='<?php echo $value['EKSTREMITAS_VARICES_LOKASI']; ?>' />
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span class='form_labeling_small'>FRAKTUR</span>
		<?php echo get_option_fisik('EKSTREMITAS_FRAKTUR', $value['EKSTREMITAS_FRAKTUR'],'class="form-control"','EKSTREMITAS_FRAKTUR'); ?>
		<?php echo get_option_fisik('EKSTREMITAS_FRAKTUR_KET', $value['EKSTREMITAS_FRAKTUR_KET'],'class="form-control"','EKSTREMITAS_FRAKTUR_KET'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>LOKASI FRAKTUR</span>
		<input class='form-control' name='EKSTREMITAS_FRAKTUR_LOKASI' value='<?php echo $value['EKSTREMITAS_FRAKTUR_LOKASI']; ?>' />
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-8 col-sm-8 col-lg-8">
		<span class='form_labeling_small'>LAIN-LAIN</span>
		<input class="form-control" name="EXTREMITAS_BWH_KET" value='<?php echo $value['EXTREMITAS_BWH_KET']; ?>' />
	</div>

	<input type="hidden" value="#content-data-ektremitas" name="referer_">

<?php endforeach; ?>

	<div class="clearfix"></div>