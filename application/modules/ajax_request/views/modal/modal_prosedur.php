<?php 
	$form_control = "class='form-control chosen'";
?>

<span class="form_labeling">JENIS TINDAKAN (icd9cm)</span>
<div>
	<?php echo get_option_icd9cm('ID_TINDAKAN', '', $form_control); ?>
</div>

<!-- <span class="form_labeling">KLASIFIKASI</span>
<div>
	<?php echo get_option_klasifikasi('KLASIFIKASI', '', $form_control); ?>
</div> -->

<input type="hidden" value="#content-data-prosedur" name="referer_">