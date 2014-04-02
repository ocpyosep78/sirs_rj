<?php foreach($result as $key=>$value): ?>

	<div class="col-lg-6 col-xl-6">
		<span>NAMA PASIEN</span> : <?php echo form_label($value['NAMA']); ?>
	</div>

	<div class="col-lg-6 col-xl-6">
		<span>KELAMIN / UMUR </span> : <?php echo form_label(get_latin_jenis_kelamin($value['SEX'])); ?> / <?php echo form_label(age_from_dob($value['TGL_LAHIR'])); ?>
	</div>

	<div class="col-lg-6 col-xl-6">
		<span>NOMOR MEDREC</span> : <?php echo form_label($value['NO_MEDREC'],'',''); ?>
	</div>

	<div class="col-lg-6 col-xl-6">
		<span>TANGGAL KUNJUNGAN</span> : <?php echo form_label($value['TGL_KUNJ'],'',''); ?>
	</div>

	<div class="col-lg-6 col-xl-6">
		<span>POLIKLINIK</span> : <?php echo form_label($value['NM_POLI'],'',''); ?>
	</div>

	<div class="col-lg-6 col-xl-6">
		<span>CARA BAYAR</span> : <?php echo form_label($value['CARA_BAYAR'],'',''); ?>
	</div>

	<div class="col-lg-6 col-xl-6">
		<span>DOKTER PEMERIKSA</span> : <?php echo form_label($value['NM_DOKTER'],'',''); ?>
	</div>

	<div class="col-lg-6 col-xl-6">
		<span>NO. TELP / HP</span> : <?php echo form_label($value['NO_TELP'],'',''); ?>
	</div>
<?php endforeach; ?>