<?php 
	$form_control = "class='form-control'";
	foreach($query as $key=>$value):
?>

<span class="form_labeling">JENIS TINDAKAN (icd9cm)</span>
<div>
	<?php echo get_option_icd9cm('ID_TINDAKAN', $value['ID'].'-'.$value['ID_TIND'], $form_control); ?>
</div>

<span class="form_labeling">KLASIFIKASI</span>
<div>
	<?php echo get_option_klasifikasi('KLASIFIKASI', $value['KLASIFIKASI'], $form_control); ?>
</div>

<input type="hidden" value="<?php echo $value['ID']; ?>" name="ID">
<input type="hidden" value="#content-data-prosedur" name="referer_">

<?php endforeach; ?>