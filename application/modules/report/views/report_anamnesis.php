<?php if(count($result) > 0): ?>
<?php foreach($result as $key => $value): ?>

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

    <div class="col-lg-6 col-xl-6">
      <span>KESAN SAKIT</span> : <label><?php  echo strtoupper( $value['KU'] ); ?></label>
  	</div>

    <div class="col-lg-6 col-xl-6">
      <span>KESADARAN </span> : <label><?php echo strtoupper( $value['KESADARAN'] );?></label>
  	</div>

    <div class="col-lg-6 col-xl-6">
      <span>KESAN GIZI</span> : <label><?php echo strtoupper( $value['GIZI'] ); ?></label>
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>TINGGI</span> : <label><?php echo $value['TINGGI']; ?></label> cm
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>BERAT</span> : <label><?php echo $value['BERAT']; ?></label> kg
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>LINGKAR KEPALA</span> : <label><?php echo $value['LINGKARKEPALA']; ?></label> cm
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>SUHU</span> : <label><?php echo $value['SUHU']; ?></label> &deg;C
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>NADI</span> : <label><?php echo $value['NADI']; ?></label> /menit
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>RESPIRASI</span> : <label><?php echo $value['PERNAPASAN']; ?></label> /menit
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>TEKANAN DARAH</span> : <label><?php echo $value['TEKDAR_SIS'].'/'.$value['TEKDAR_DIAS']; ?></label>
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>BMI</span> : <label><?php echo bmi($value['BERAT'], $value['TINGGI']); ?></label> Kg
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>SKALA KENYERIAN</span> : <label><?php echo $value['VAS']; ?></label>
    </div>

    <div class='clearfix'></div>

	<table class="table table-bordered table-striped table-hover" id='sort_table'>
	  <thead>
	    <tr class="table_header">
	      <th class="fix_width_xs">TGL.KUNJ.</th>
	      <th class="fix_width_lg">URAIAN ANAMNESIS</th>
	      <th class="fix_width_xs">PENGOBATAN</th>
	    </tr>
	  </thead>
	  
	  <tbody>
	  	<tr>
	        <td>
	          <small><?php echo $value['TGL_KUNJUNGAN']; ?></small>
	        </td>

	        <td>
				<div>
					<small>DARI</small>
					<div class="bs-callout bs-callout-info">
						<small><?php echo form_label(get_latin_sumber_anamnesis($value['SUMBER'])); ?></small>
					</div>
				</div>

				<div>
					<small>KELUHAN UTAMA</small>
					<div class="bs-callout bs-callout-info">
						<small><?php echo form_label($value['KELUHAN_UTAMA']); ?></small>
					</div>
				</div>

				<div>
					<small>RIWAYAT PENYAKIT UTAMA</small>
					<div class="bs-callout bs-callout-info">
						<small><?php echo form_label($value['PASIEN_ILLNES']); ?></small>
					</div>
				</div>

				<div>
					<small>RIWAYAT PENGOBATAN</small>
					<div class="bs-callout bs-callout-info">
						<small><?php echo form_label($value['ANAMNESA']); ?></small>
					</div>
				</div>

				<div>
					<small>RIWAYAT PENYAKIT TERDAHULU</small>
					<div class="bs-callout bs-callout-info">
						<small><?php echo form_label($value['RIWAYAT_PENYAKIT']); ?></small>
					</div>
				</div>

				<div>
					<small>RIWAYAT PENYAKIT KELUARGA</small>
					<div class="bs-callout bs-callout-info">
						<small><?php echo form_label($value['RIWAYAT_PENYAKIT_KELUARGA']); ?></small>
					</div>
				</div>
	        </td>

	        <td>
	        	<small>TERAPI OBAT</small>
	        	<?php $pengobatan_inastk = $this->pasien->pasien_get_pengobatan_inastik($value['NO_MEDREC'], $value['TGL_KUNJUNGAN'], $value['ID_POLI'],''); ?>
	          	<?php foreach($pengobatan_inastk as $k=>$v): ?>
	          	<?php $nama_obat = $this->addon->addon_inastkrshs($v['ID_INASTK']);?>
	          		<div>
						<div class="bs-callout bs-callout-info">
							<li><small><?php echo $nama_obat[0]['NAMA_OBAT'].' ('.$v['JMLOBAT'].') ('.$v['SIGNA1'].')'; ?></small></li>
						</div>
					</div>
	          	<?php endforeach; ?>
	        </td>
	    </tr>
	  </tbody>
	</table>

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
</div>

<?php endforeach; ?>
<?php else: ?>
	<div class="empty-row">
		<?php echo preset_message('unavailable_data'); ?>
	</div>
<?php endif; ?>