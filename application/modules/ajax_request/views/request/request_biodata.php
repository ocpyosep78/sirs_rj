<?php if(count($query['result']) > 0): ?>
	<?php echo $print; ?>
<?php foreach($query['result'] as $key=>$value): ?>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
		<span>NAMA PASIEN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['NAMA'],'',array('id' => 'nama_pasien')); ?>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-24 col-sm-6 col-md-6 col-lg-6 col-xl-6">
		<span>TEMPAT / TANGGAL LAHIR</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['TMPT_LAHIR']).' / '.form_label($value['TGL_LAHIR']); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
		<span>UMUR (Tahun, Bulan, Hari)</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(age_from_dob($value['TGL_LAHIR']),'',array('id'=>'umur_pasien')); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>JENIS KELAMIN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_jenis_kelamin($value['SEX'])); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>STATUS</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label(get_latin_status_pernikahan($value['STATUS'])); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>AGAMA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['AGAMA']); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>SUKU</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['SUKU']); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>WARGA NEGARA</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['WNEGARA']); ?>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
		<span>ALAMAT</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['ALAMAT']); ?>
			<br>RT : <?php echo form_label($value['RT']); ?> | RW : <?php echo form_label($value['RW']); ?>
			<br>KELURAHAN : <?php echo form_label($value['KELURAHAN']); ?> | KECAMATAN : <?php echo form_label($value['KECAMATAN']); ?>
		</div>
	</div>

	<?php $daerah = $this->addon->addon_daerah($value['ID_DAERAH']); ?>

	<div class="col-xs-24 col-sm-6 col-md-6 col-lg-6 col-xl-6">
		<span>DAERAH</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label("(".$value['ID_DAERAH'].")") ?> : <?php echo form_label((count($daerah) > 0) ? $daerah[0]['NM_DAERAH'] : '')?>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>PEKERJAAN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['PEKERJAAN']); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>PENDIDIKAN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['PENDIDIKAN']); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>PENSIUNAN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['PENSIUNAN']); ?>
		</div>
	</div>


	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>NOMOR ASURANSI</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['NO_ASURANSI']); ?>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>GOLONGAN DARAH</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['GOLDARAH']); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>NO. TELP</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['NOTLP']); ?>
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<span>NO. HP</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value['NO_TLP_HP']); ?>
		</div>
	</div>

<?php endforeach; ?>
<?php else: ?>

	<div class='empty-row'>
		<?php echo preset_message('unavailable_data'); ?>
	</div>

<?php endif; ?>