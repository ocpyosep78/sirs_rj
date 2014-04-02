<?php foreach($query as $key=>$value): ?>

	<span class="form_labeling">SUMBER INFORMASI</span>
	<div>
		<?php echo get_option_sumber('SUMBER', $value['SUMBER'], "class='form-control'"); ?>
	</div>

	<span class="form_labeling">KELUHAN UTAMA</span>
	<div>
		<textarea rows="3" class="form-control" name="KELUHAN_UTAMA"><?php echo $value['KELUHAN_UTAMA']?></textarea>
	</div>

	<span class="form_labeling">RIWAYAT PENYAKIT UTAMA</span>
	<div>
		<textarea rows="3" class="form-control" name="PASIEN_ILLNES"><?php echo $value['PASIEN_ILLNES']?></textarea>
	</div>

	<span class="form_labeling">RIWAYAT PENGOBATAN</span>
	<div>
		<textarea rows="3" class="form-control" name="ANAMNESA"><?php echo $value['ANAMNESA']?></textarea>
	</div>

	<span class="form_labeling">RIWAYAT PENYAKIT TERDAHULU</span>
	<div>
		<textarea rows="3" class="form-control" name="RIWAYAT_PENYAKIT"><?php echo $value['RIWAYAT_PENYAKIT']?></textarea>
	</div>

	<span class="form_labeling">RIWAYAT PENYAKIT KELUARGA</span>
	<div>
		<textarea rows="3" class="form-control" name="RIWAYAT_PENYAKIT_KELUARGA"><?php echo $value['RIWAYAT_PENYAKIT_KELUARGA']?></textarea>
	</div>

	<input type="hidden" value="#content-data-anamnesis" name="referer_">

<?php endforeach; ?>

