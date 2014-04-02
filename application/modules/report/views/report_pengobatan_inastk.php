<div>
    <div class="col-lg-6 col-xl-6">
      <span>NAMA PASIEN</span> : <label><?php  echo $result[0]['NAMA']; ?></label>
  	</div>

    <div class="col-lg-6 col-xl-6">
      <span>KELAMIN / UMUR </span> : <label><?php echo get_latin_jenis_kelamin( $result[0]['SEX'] );?></label> / <label><?php echo age_from_dob( $result[0]['TGL_LAHIR'] );?></label>
  	</div>

    <div class="col-lg-6 col-xl-6">
      <span>NOMOR MEDREC</span> : <label><?php echo $result[0]['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>ALAMAT</span> : <label><?php echo $result[0]['ALAMAT']; ?></label>
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>NO.TELP</span> : <label><?php echo $result[0]['NOTLP']; ?></label>
    </div>

    <div class='clearfix'></div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:150px'>CARA BAYAR</label> : <label><?php echo $result[0]['CARA_BAYAR']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:150px'>POLIKLINIK</label> : <label><?php echo $result[0]['NM_POLI']; ?></label>
    </div>

    <div class="col-lg-12 col-xl-12">
      <label style='width:150px'>DOKTER PEMERIKSA</label> : <label><?php echo $result[0]['ID_DOKTER']; ?></label>
    </div>

	<div class="col-lg-12 col-xl-12">
      <label style='width:150px'>DIAGNOSA</label> : <label><?php echo $result[0]['DIAGNOSA'].' : '.$result[0]['NM_DIAGNOSA']; ?></label>
  	</div>
  	<hr>
	<table class="table table-bordered table-striped table-hover" id='sort_table'>
	  <thead>
	    <tr class="table_header">
	      <th colspan="2" class="fix_width_xs">NAMA OBAT</th>
	      <th class="fix_width_lg">SEDIAAN</th>
	      <th class="fix_width_xs">BENTUK</th>
	      <th colspan="2" class="fix_width_xs">ATURAN</th>
	      <th class="fix_width_xs">JUMLAH</th>
	    </tr>
	  </thead>
	  
	  <tbody>

	  <?php if(count($result) > 0): ?>
	  <?php foreach($result as $key => $value): ?>
	  	<tr>
	        <td>
	          <small><?php echo $value['NAMA_OBAT']; ?></small>
	        </td>

	        <td>
	          <small><?php echo $value['SIGNA2']; ?></small>
	        </td>

	        <td>
	          <small><?php echo $value['SEDIAAN']; ?></small>
	        </td>

	        <td>
	          <small><?php echo $value['BENTUK']; ?></small>
	        </td>

	        <td>
	          <small><?php echo $value['SIGNA1']; ?></small>
	        </td>

	        <td>
	          <small><?php echo $value['SIGNA3']; ?></small>
	        </td>

	        <td>
	          <small><?php echo $value['JMLOBAT']; ?></small>
	        </td>
	    </tr>
	  <?php endforeach; ?>
	  <?php else: ?>
		<div class="empty-row">
			<?php echo preset_message('unavailable_data'); ?>
		</div>
	  <?php endif; ?>

	  </tbody>
	</table>

  	<?php print_r($signature) ?>
</div>