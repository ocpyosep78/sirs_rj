<span class="form_labeling">SUMBER INFORMASI</span>
<div>
	<?php echo get_option_sumber('SUMBER', '', "class='form-control'"); ?>
</div>

<span class="form_labeling">KELUHAN UTAMA</span>
<div>
	<textarea rows="3" class="form-control" name="KELUHAN_UTAMA"></textarea>
</div>

<span class="form_labeling">RIWAYAT PENYAKIT UTAMA</span>
<div>
	<textarea rows="3" class="form-control" name="PASIEN_ILLNES"></textarea>
</div>

<span class="form_labeling">RIWAYAT PENGOBATAN</span>
<div>
	<textarea rows="3" class="form-control" name="ANAMNESA"></textarea>
</div>

<span class="form_labeling">RIWAYAT PENYAKIT TERDAHULU</span>
<div>
	<textarea rows="3" class="form-control" name="RIWAYAT_PENYAKIT"></textarea>
</div>

<span class="form_labeling">RIWAYAT PENYAKIT KELUARGA</span>
<div>
	<textarea rows="3" class="form-control" name="RIWAYAT_PENYAKIT_KELUARGA"></textarea>
</div>

<input type="hidden" value="#content-data-anamnesis" name="referer_">