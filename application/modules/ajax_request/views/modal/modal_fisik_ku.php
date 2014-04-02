<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
	<span class="form_labeling_small">KESAN SAKIT</span>
	<div>
		<?php echo get_option_fisik('KU', '', "class='form-control'",'ku'); ?>
	</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
	<span class="form_labeling_small">KESADARAN</span>
	<div>
		<?php echo get_option_fisik('KESADARAN', '', "class='form-control'",'kesadaran'); ?>
	</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
	<span class="form_labeling_small">KESAN GIZI</span>
	<div>
		<?php echo get_option_fisik('GIZI', '', "class='form-control'",'kesan_gizi'); ?>
	</div>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
	<span class="form_labeling_small">SKALA KENYERIAN</span>
	<div>
		<?php echo get_option_fisik('VAS', '', "class='form-control'",'skala_kenyerian'); ?>
	</div>
</div>

<div class="clearfix"></div>
<hr>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mini_input">
	<span class="form_labeling_small">TINGGI BADAN </span>
	<div>
		<input name='TINGGI' class='form-control mini_input input_numeric'></input>
		<span class='visible-lg'> cm</span>
	</div>
</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mini_input">
	<span class="form_labeling_small">BERAT BADAN</span>
	<div>
		<input name='BERAT' class='form-control mini_input input_numeric'></input>
		<span class='visible-lg'> kg</span>
	</div>
</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mini_input">
	<span class="form_labeling_small">SUHU BADAN</span>
	<div>
		<input name='SUHU' class='form-control mini_input input_numeric'></input>
		<span class='visible-lg'> &deg;C</span>
	</div>
</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mini_input">
	<span class="form_labeling_small">LINGKAR KEPALA</span>
	<div>
		<input name='LINGKAR_KEPALA' class='form-control mini_input input_numeric'></input>
		<span class='visible-lg'> cm</span>
	</div>
</div>

<div class="clearfix"></div>
<br>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mini_input">
	<span class="form_labeling_small">NADI</span>
	<div>
		<input name='NADI' class='form-control mini_input input_numeric'></input>
		<span class='visible-lg'> /min</span>
	</div>
</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mini_input">
	<span class="form_labeling_small">RESPIRASI</span>
	<div>
		<input name='PERNAPASAN' class='form-control mini_input input_numeric'></input>
		<span class='visible-lg'> /min</span>
	</div>
</div>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
	<span class="form_labeling_small">TEKANAN DARAH</span>
	<div>
		<input name='TEKDAR_SIS' class='form-control input_numeric mini_input double'></input>
		<input name='TEKDAR_DIAS' class='form-control input_numeric mini_input double'></input>
		<span class='visible-lg'> (mm/Hg)</span>
		<div class="clearfix"></div>
	</div>
</div>

<div class="clearfix"></div>

<input type="hidden" value="#content-data-fisik" name="referer_">