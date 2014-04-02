<?php 
	$form_control = "class='form-control chosen'";
?>

<span class="form_labeling">DIAGNOSA (icd1)</span>
<div>
	<?php echo get_option_icd1('ID_DIAGNOSA', '', $form_control); ?>
</div>

<!-- <span class="form_labeling">KLASIFIKASI</span>
<div>
	<?php echo get_option_klasifikasi('KLASIFIKASI', '', $form_control); ?>
</div> -->

<input type="hidden" value="#content-data-diagnosis" name="referer_">