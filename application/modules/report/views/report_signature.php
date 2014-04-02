<?php //foreach($result as $key=>$value): ?>

	<div class='clear_fix'></div>
	<p>
	<div class='signature'>
		<span><?php echo $this->config->item('report_lokasi'); ?>, </span> <span><?php echo date('j F Y'); ?></span><p>
		<label class='nama_signature lg'><?php echo $dokter[0]['NM_DOKTER']; ?></label>
		<label class='lg'>NIP. <?php echo ''; ?></label>
	</div>
<?php //endforeach; ?>