<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-3 col-sm-3 col-lg-3">
		<span class='form_labeling'>NEUROLOGIS</span>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>CLUBBING</span>
			<?php echo get_option_fisik('NEUROLOGIS_CLUBBING', $value['NEUROLOGIS_CLUBBING'],'class="form-control"','NEUROLOGIS_CLUBBING'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>LOKASI CLUBBING</span>
			<input class='form-control' name='NEUROLOGIS_CLUBBING_LOKASI' value='<?php echo $value['NEUROLOGIS_CLUBBING_LOKASI']?>'/>
		</div>

		<div class='clearfix'></div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>TREMOR</span>
			<?php echo get_option_fisik('NEUROLOGIS_TREMOR', $value['NEUROLOGIS_TREMOR'],'class="form-control"','NEUROLOGIS_TREMOR'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>LOKASI TREMOR</span>
			<input class='form-control' name='NEUROLOGIS_TREMOR_LOKASI' value='<?php echo $value['NEUROLOGIS_TREMOR_LOKASI']?>'/>
		</div>

		<div class='clearfix'></div>

		<div class="col-xs-8 col-sm-8 col-lg-8">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input type='text' class='form-control' name="NEUROLOGIS_KET" value='<?php echo $value['NEUROLOGIS_KET']; ?>' />
		</div>
	</fieldset>

	<hr>

	<div class="col-xs-3 col-sm-3 col-lg-3">
		<span class='form_labeling'>REFLEKS</span>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>KPR</span>
			<?php echo get_option_fisik('REFLEKS_KPR', $value['REFLEKS_KPR'],'class="form-control"','refleks_kpr'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>APR</span>
			<?php echo get_option_fisik('REFLEKS_APR', $value['REFLEKS_APR'],'class="form-control"','refleks_apr'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>BI / TRICEPS</span>
			<?php echo get_option_fisik('REFLEKS_BICEPS', $value['REFLEKS_BICEPS'],'class="form-control"','refleks_biceps'); ?>
		</div>

		<div class='clearfix'></div>

		<div class="col-xs-8 col-sm-8 col-lg-8">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input type='text' class='form-control' name="REFLEKS_KET" value='<?php echo $value['REFLEKS_KET']; ?>' />
		</div>
	</fieldset>

<?php endforeach; ?>

	<input type="hidden" value="#content-data-neurologis" name="referer_">