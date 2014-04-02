<?php foreach($query as $key=>$value): ?>

	<span class="form_labeling">CATATAN KHUSUS</span>
	<div>
		<textarea id='catatan' cols="15" rows="15" class="form-control" name="catatan"><?php echo $value['CATATAN']?></textarea>
	</div>
	
	<input type="hidden" value="#content-data-khusus" name="referer_">

<?php endforeach; ?>