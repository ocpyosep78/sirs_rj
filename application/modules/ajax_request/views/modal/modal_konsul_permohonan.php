<?php 
	$form_control = "class='form-control'"; 
	$form_chosen = "class='form-control chosen'"; 
?>

<span class="form_labeling">POLI RUJUKAN</span>
<div>
	<?php echo get_option_poliklinik('ID_POLI', '', $form_chosen); ?>
</div>
	
<span class="form_labeling">PROBLEM KONSUL</span>
<div>
	<textarea rows="3" class="form-control" name="PROBLEM_KONSUL"></textarea>
</div>

<span class="form_labeling">DIAGNOSA KERJA</span>
<div>
	<textarea rows="3" class="form-control" name="DIAGNOSA"></textarea>
</div>

<span class="form_labeling">LEMBAR KERJA</span>
<div>
	<textarea rows="3" class="form-control" name="ISI_KONSUL"></textarea>
</div>

<span class="form_labeling">CATATAN KHUSUS</span>
<div>
	<textarea rows="3" class="form-control" name="CATATAN_KHUSUS"></textarea>
</div>

<input type="hidden" value="#content-data-konsul" name="referer_">
