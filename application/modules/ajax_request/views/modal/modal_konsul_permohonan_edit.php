<?php 
	$form_control = "class='form-control'";
	$form_chosen = "class='form-control chosen'"; 
	foreach($query as $key=>$value):
?>

<span class="form_labeling">POLI RUJUKAN</span>
<div>
	<?php echo get_option_poliklinik('ID_POLI', $value['ID_POLI2'], $form_chosen); ?>
</div>
	
<span class="form_labeling">PROBLEM KONSUL</span>
<div>
	<textarea rows="3" class="form-control" name="PROBLEM_KONSUL"><?php echo $value['PROBLEM_KONSUL']; ?></textarea>
</div>

<span class="form_labeling">DIAGNOSA KERJA</span>
<div>
	<textarea rows="3" class="form-control" name="DIAGNOSA"><?php echo $value['DIAGNOSA']; ?></textarea>
</div>

<span class="form_labeling">LEMBAR KERJA</span>
<div>
	<textarea rows="3" class="form-control" name="ISI_KONSUL"><?php echo $value['ISI_KONSUL']; ?></textarea>
</div>

<span class="form_labeling">CATATAN KHUSUS</span>
<div>
	<textarea rows="3" class="form-control" name="CATATAN_KHUSUS"><?php echo $value['CAT_KHUSUS']; ?></textarea>
</div>

<input type="hidden" value="<?php echo $value['ID_KONSUL']; ?>" name="ID_KONSUL">
<input type="hidden" value="#content-data-konsul" name="referer_">

<?php endforeach; ?>
