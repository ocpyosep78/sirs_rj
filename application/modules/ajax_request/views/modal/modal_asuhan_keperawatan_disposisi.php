<?php $form_control = "class='form-control'"; ?>
<?php $form_chosen = "class='form-control chosen'"; ?>

<div class="col-xs-12 col-sm-6 col-lg-6">
	<span class='form_labeling_small'>TINDAK LANJUT</span>
	<?php echo get_option_tindak_lanjut('PENDIDIKAN', '', $form_control,'PENDIDIKAN'); ?>
</div>

<div class="col-xs-12 col-sm-6 col-lg-6">
	<span class='form_labeling_small'>RUANG RAWAT</span>
	<?php echo get_option('STATUS_TINGGAL', '', $form_control,'STATUS_TINGGAL'); ?>
</div>

<div class="col-xs-12 col-sm-6 col-lg-6">
	<span class='form_labeling_small'>TANGGAL KONTROL</span>
	<div data-date-format="mm/dd/yyyy" data-date="2013-12-13" id="dp3" class="input-group input-append date">
	  	<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	  	<input type="text" value="" size="16" class="tg form-control" name="TANGGAL1">
	</div>
</div>


<div class='clearfix'></div>
<hr>

<div class="col-xs-12 col-sm-12 col-lg-12">
	<span class='form_labeling_small'>DOKTER SUPERVISOR</span>
	<?php echo get_option('STATUS_TINGGAL', '', $form_chosen,'STATUS_TINGGAL'); ?>
</div>

<div class="col-xs-12 col-sm-12 col-lg-12">
	<span class='form_labeling_small'>PERAWAT</span>
	<?php echo get_option('STATUS_TINGGAL', '', $form_chosen,'STATUS_TINGGAL'); ?>
</div>

<div class='clearfix'></div>
<hr>

<input type="hidden" value="#content-data-asuhan-keperawatan" name="referer_">

<script type="text/javascript">
	$('.tg').datepicker();
</script>