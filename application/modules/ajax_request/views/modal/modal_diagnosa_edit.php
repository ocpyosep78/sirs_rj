<?php 
	$form_control = "class='form-control'";
	$form_chosen = "class='form-control chosen'";
?>

<?php foreach($query as $key => $value): ?>

	<span class="form_labeling">DIAGNOSA (icd1)</span>
	<div>
		<?php echo get_option_icd1('ID_DIAGNOSA', $value['DIAGNOSA'], $form_control); ?>
	</div>

 	<span class="form_labeling">KLASIFIKASI</span>
	<div>
		<?php echo get_option_klasifikasi('KLASIFIKASI', $value['KLASIFIKASI'], $form_control); ?>
	</div>

	<input type="hidden" value="<?php echo $value['DIAGNOSA']; ?>" name="DIAGNOSA_LAMA">
	<input type="hidden" value="#content-data-diagnosis" name="referer_">

<?php endforeach; ?>