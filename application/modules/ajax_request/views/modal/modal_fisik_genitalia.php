<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span class='form_labeling_small'>ULCER</span>
		<?php echo get_option_fisik('GENITALIA_ULCER', $value['GENITALIA_ULCER'],'class="form-control"','GENITALIA_ULCER'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>LOKASI ULCER</span>
		<input class='form-control' name='GENITALIA_ULCER_LOKASI' value='<?php echo $value['GENITALIA_ULCER_LOKASI']; ?>' />
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span class='form_labeling_small'>HIDROCEL</span>
		<?php echo get_option_fisik('GENITALIA_HIDROCEL', $value['GENITALIA_HIDROCEL'],'class="form-control"','GENITALIA_HIDROCEL'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>LOKASI HIDROCEL</span>
		<input class='form-control' name='GENITALIA_HIDROCEL_LOKASI' value='<?php echo $value['GENITALIA_HIDROCEL_LOKASI']; ?>' />
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span class='form_labeling_small'>HERNIA</span>
		<?php echo get_option_fisik('GENITALIA_HERNIA', $value['GENITALIA_HERNIA'],'class="form-control"','GENITALIA_HERNIA'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>LOKASI HERNIA</span>
		<input class='form-control' name='GENITALIA_HERNIA_LOKASI' value='<?php echo $value['GENITALIA_HERNIA_LOKASI']; ?>' />
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-3 col-lg-3">
		<span class='form_labeling_small'>HEMORROID</span>
		<?php echo get_option_fisik('GENITALIA_HEMORROID', $value['GENITALIA_HEMORROID'],'class="form-control"','GENITALIA_HEMORROID'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>LOKASI HEMORROID</span>
		<input class='form-control' name='GENITALIA_HEMORROID_LOKASI' value='<?php echo $value['GENITALIA_HEMORROID_LOKASI']; ?>' />
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-8 col-sm-8 col-lg-8">
		<span class='form_labeling_small'>LAIN-LAIN</span>
		<input class="form-control" name="GENITALIA_KET" value='<?php echo $value['GENITALIA_KET']; ?>' />
	</div>

	<input type="hidden" value="#content-data-genitalia" name="referer_">

<?php endforeach; ?>

	<div class="clearfix"></div>