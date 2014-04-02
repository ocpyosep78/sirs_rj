<?php foreach($query as $key=>$value): ?>

	<span class="form_labeling">JAWABAN</span>
	<div>
		<textarea rows="3" class="form-control" name="JAWABAN"><?php echo $value['JAWABAN_KONSUL']; ?></textarea>
	</div>

	<input type="hidden" value="<?php echo $value['ID_KONSUL']; ?>" name="ID_KONSUL">
	<input type="hidden" value="#content-data-konsul" name="referer_">

<?php endforeach; ?>