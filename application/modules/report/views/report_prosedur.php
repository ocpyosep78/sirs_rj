<?php if(count($query['result']) > 0): ?>
<?php foreach($query['result'] as $key=>$value): ?>

<div>
    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>NO. KODE RUMAH SAKIT <sup><i>(Hospital Code Number)</i></sup></label> : <label>3373015</label>
  	</div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>KELAS RUMAH SAKIT <sup><i>(Type of Hospital)</i></sup></label> : <label>A</label>
  	</div>

  	<hr>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>NOMOR MEDREC <sup><i>(Medical of Record)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>JENIS PERAWATAN <sup><i>(Patient Type Designation)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>TOTAL BIAYA <sup><i>(Total Charge)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>TANGGAL MASUK <sup><i>(Admission Date)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>TANGGAL KELUAR <sup><i>(Discharge Date)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>LAMA DIRAWAT <sup><i>(Length of Stay)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>USIA (TAHUN) <sup><i>(Admission of Year)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>USIA (HARI) <sup><i>(Admission of Day)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>JENIS KELAMIN <sup><i>(Gender)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>TANGGAL LAHIR <sup><i>(Date of Birth)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:400px'>CARA PULANG <sup><i>(Discharge Dispotition)</i></sup></label> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class='clearfix'></div>

    <div class="col-lg-12 col-xl-12">
      <span>DIAGNOSA</span> : <label><?php echo $value['DIAGNOSA'].' : '.$value['NM_DIAGNOSA']; ?></label>
  	</div>

  	<hr>

  	<div class="col-lg-12 col-xl-12">
      <span>TINDAKAN</span> : <label><?php echo $value['DIAGNOSA'].' : '.$value['NM_DIAGNOSA']; ?></label>
  	</div>

  	<?php print_r($signature) ?>
</div>

<?php endforeach; ?>
<?php else: ?>
	<div class="empty-row">
		<?php echo preset_message('unavailable_data'); ?>
	</div>
<?php endif; ?>