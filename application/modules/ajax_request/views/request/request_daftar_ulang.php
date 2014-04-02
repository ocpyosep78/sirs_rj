<?php if(count($query['result']) > 0): ?>
    <?php echo $print; ?>
<?php endif; ?>

<div class='table-filter'>
  <form id="filter_form">
    <label>Group Data</label>
    <span>Bulan</span> <?php echo($query['bulan']); ?> 
    <span>Tahun</span> <?php echo($query['tahun']); ?>
    <button id='submit_filter' class='btn btn-link'><span id='submit_filter' class="glyphicon glyphicon-ok"></span> Lihat Data</button>
  </form>
</div>

<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" id='sort_table'>
    <thead>
      <tr class="table_header">
        <th class="fix_width_xs"> </th>
        <th class="fix_width_xs">TGL. <br>KUNJUNGAN</th>
        <th class="fix_width_lg">POLI <br>UTAMA</th>
        <th class="fix_width_xs">JNS. <br>KUNJUNGAN</th>
        <th class="fix_width_xs">CARA <br>BAYAR</th>
        <th class="fix_width_xs">NO. <br>DOKPOLI</th>
        <th class="fix_width_lg">NAMA <br>DOKTER</th>
        <th class="fix_width_xs">PRE <br>KONDISI</th>
        <th class="fix_width_xs">TINDAK <br>LANJUT</th>
        <th class="fix_width_xs">ID DRG</th>
        <th class="fix_width_xs">JDWL. <br>KONTROL</th>
        <th class="fix_width_lg">POLI <br>RUJUKAN</th>
      </tr>
    </thead>
    
    <tbody class="content-daftar_ulang" id="content-daftar-daftar_ulang">

    <?php if(count($query['result']) > 0): ?>
      <?php foreach($query['result'] as $key => $value): ?>

        <tr>
          <td class="button_column">
            <a href="nomed=<?php echo $value['NO_MEDREC']; ?>&tgl=<?php echo $value['TGL_KUNJUNGAN']; ?>&idpol=<?php echo $value['ID_POLI']; ?>" class="btn btn-info btn-sm details_daful"><span class="glyphicon glyphicon-search"></span></a>
            <a href="nomed=<?php echo $value['NO_MEDREC']; ?>&tgl=<?php echo $value['TGL_KUNJUNGAN']; ?>&idpol=<?php echo $value['ID_POLI']; ?>" class="btn btn-default btn-sm button-modal-daful" id="modal_daftar_ulang_" ><span class="glyphicon glyphicon-th"></span></a>
          </td>

          <td>
            <?php echo $value['TGL_KUNJUNGAN']; ?>
          </td>

          <td>
            <small><?php echo $value['ID_POLI']; ?></small><br><?php echo $value['NM_POLI']; ?>
          </td>

          <td>
            <?php echo $value['JNS_KUNJ']; ?>
          </td>

          <td>
            <?php echo $value['CARA_BAYAR']; ?>
          </td>

          <td>
            <?php echo $value['NO_DOK_POLI']; ?>
          </td>

          <?php $dokter = $this->addon->addon_dokter($value['ID_DOKTER']); ?>
          <td class="edit_column">
            <small><?php echo $value['ID_DOKTER']; ?></small><br>
            <?php echo (count($dokter) > 0) ? $dokter[0]['NM_DOKTER'] : ''; ?>
          </td>

          <td class="edit_column">
            <?php echo get_latin_prekondisi($value['PREKONDISI']); ?>
          </td>

          <td class="edit_column">
            <?php echo  $value['TINDAKLANJUT']; ?>
          </td>

          <?php $drg = $this->addon->addon_drg($value['ID_DRG']); ?>
          <td class="edit_column">
             <!--abbr title='<?php echo (count($drg) > 0) ? $drg[0]['NM_DRG'] : ''; ?>'><?php echo $value['ID_DRG']; ?></abbr-->
             <a data-toggle="tooltip" title='<?php echo (count($drg) > 0) ? $drg[0]['NM_DRG'] : ''; ?>'><?php echo $value['ID_DRG']; ?></a>
          </td>

          <td>
            <?php echo $value['TGL_JADWAL']; ?>
          </td>

          <?php $poli = $this->addon->addon_poliklinik($value['ID_POLI2']); ?>
          <td class="edit_column">
            <small><?php echo $value['ID_POLI2']; ?></small><br>
            <?php echo (count($poli) > 0) ? $poli[0]['NM_POLI'] : ''; ?>
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
</div>

<script type="text/javascript">
    $('table').tablesorter({});
    $('table').tablePagination({});
</script>