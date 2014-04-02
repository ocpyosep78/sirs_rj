<div>
  <?php foreach($biodata as $key => $value): ?>

    <div class="col-lg-6 col-xl-6">
      <span>NAMA PASIEN</span> : <label><?php  echo $value['NAMA']; ?></label>  </div>

    <div class="col-lg-6 col-xl-6">
      <span>KELAMIN / UMUR </span> : <label><?php echo get_latin_jenis_kelamin( $value['SEX'] );?></label> / <label><?php echo age_from_dob( $value['TGL_LAHIR'] );?></label>  </div>

    <div class="col-lg-6 col-xl-6">
      <span>NOMOR MEDREC</span> : <label><?php echo $value['NO_MEDREC']; ?></label>
    </div>

    <div class="col-lg-6 col-xl-6">
      <span>ALAMAT</span> : <label><?php echo $value['ALAMAT']; ?></label>
    </div>

  <?php endforeach; ?>
</div>

<div class='clearfix'></div>

<table class="table table-bordered table-striped table-hover" id='sort_table'>
  <thead>
    <tr class="table_header">
      <th class="fix_width_xs">TGL.KUNJ.</th>
      <th class="fix_width_lg">POLIKLINIK</th>
      <th class="fix_width_xs">NO.DOK</th>
      <th class="fix_width_xs">DIAGNOSA</th>
      <th class="fix_width_xs">TERAPI OBAT</th>
    </tr>
  </thead>
  
  <tbody>

  <?php if(count($result) > 0): ?>
    <?php foreach($result as $key => $value): ?>

      <tr>
        <td>
          <small> <?php echo $value['TGL_KUNJUNGAN']; ?> </small> 
        </td>

        <td>
          <small> <?php echo $value['NM_POLI']; ?> </smalll>
        </td>

        <td>
          <small> <?php echo $value['NO_DOK_POLI']; ?> </small>
        </td>

        <td>
          <small> <?php echo $value['NM_DIAGNOSA'].' ('.$value['DIAGNOSA'].') ('.$value['KLASIFIKASI'].')'; ?> </small>
        </td>

        <td>
          <small> <?php echo $value['NAMA_OBAT'].' ; ('.$value['JMLOBAT']. $value['SIGNA2'].') ; ('.$value['SIGNA1'].')'; ?> </small>
        </td>
      </tr>

    <?php endforeach; ?>
  <?php else: ?>

      <tr>
        <td colspan="100" class="empty-row">
          <?php echo preset_message('unavailable_data'); ?>
        </td>
      </tr>

  <?php endif; ?>
  </tbody>
</table>