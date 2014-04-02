<?php if(count($result) > 0): ?>
<?php foreach($result as $key=>$value): ?>

<div>
    <div class="col-lg-6 col-xl-6">
      <span>NAMA PASIEN</span> : <label><?php  echo $value['NAMA']; ?></label>
  	</div>

    <div class="col-lg-6 col-xl-6">
      <span>KELAMIN / UMUR </span> : <label><?php echo get_latin_jenis_kelamin( $value['SEX'] );?></label> / <label><?php echo age_from_dob( $value['TGL_LAHIR'] );?></label>
  	</div>

    <div class="col-lg-6 col-xl-6">
      <span>NOMOR MEDREC</span> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>CARA BAYAR</span> : <label><?php echo $value['CARA_BAYAR']; ?></label>
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>POLIKLINIK</span> : <label><?php echo $value['NM_POLI']; ?></label>
    </div>

    <?php $dokter = $this->addon->addon_dokter($value['ID_DOKTER']); ?>
    <div class="col-lg-6 col-xl-6">
      <span>DOKTER PEMERIKSA</span> : <label><?php echo $dokter[0]['NM_DOKTER']; ?></label>
    </div>

    <div class='clearfix'></div>

    <div class="col-lg-12 col-xl-12">
      <span>CATATAN KHUSUS</span> : <label><?php echo $value['CATATAN']; ?></label>
  	</div>

    <div class='clearfix'></div>

	  <div class="col-lg-6 col-xl-6">
      <span>DIAGNOSA</span> : <label><?php echo $value['DIAGNOSA'].' : '.$value['NM_DIAGNOSA']; ?></label>
  	</div>

  	<div class='clear_fix'></div>
    <p>
    <div class='signature'>
      <span><?php echo $this->config->item('report_lokasi'); ?>, </span> <span><?php echo date('j F Y'); ?></span><p>
      <label class='nama_signature lg'><?php echo $dokter[0]['NM_DOKTER']; ?></label><br>
      <label class='lg'>NIP. <?php echo $dokter[0]['ID_DOKTER'] ?></label>
    </div>

<?php endforeach; ?>
<?php else: ?>

	<div class="empty-row">
		<?php echo preset_message('unavailable_data'); ?>
	</div>

<?php endif; ?>