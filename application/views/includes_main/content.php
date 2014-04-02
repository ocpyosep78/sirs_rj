        <div class='panel panel-primary panel-shadow'>
          <div class="panel-heading ">
            <span class='glyphicon glyphicon-chevron-up'></span> <a class='colapse_button' href="javascript:void(0);"><strong>Riwayat Kunjungan Pasien</strong></a>
            <a class='pull-right' id='refresh_filter_reload' href='javascript:void(0);'><span class="glyphicon glyphicon-refresh"></span> <strong>Reload Data</strong></a>
          </div>

          <div class='panel-body'>
            <div id='content-data-kunjungan'>
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr class="table_header">
                      <th class='fix_width_xs'> </th>
                      <th class='fix_width_xs'>TGL. <br>KUNJUNGAN</th>
                      <th class='fix_width_lg'>POLI <br>UTAMA</th>
                      <th class='fix_width_xs'>JNS. <br>KUNJUNGAN</th>
                      <th class='fix_width_xs'>CARA <br>BAYAR</th>
                      <th class='fix_width_xs'>NO. <br>DOKPOLI</th>
                      <th class='fix_width_lg'>NAMA <br>DOKTER</th>
                      <th class='fix_width_xs'>PRE <br>KONDISI</th>
                      <th class='fix_width_xs'>TINDAK <br>LANJUT</th>
                      <th class='fix_width_xs'>ID DRG</th>
                      <th class='fix_width_xs'>JDWL. <br>KONTROL</th>
                      <th class='fix_width_lg'>POLI <br>RUJUKAN</th>
                    </tr>
                  </thead>
                  <tbody id='content-daftar-daftar_ulang' class="content-daftar_ulang">
                    <tr>
                      <td class='empty-row' colspan='15'><?php echo preset_message('need_search'); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class='panel panel-primary panel-shadow'>
          <div class="panel-heading">
            <span class='glyphicon glyphicon-chevron-up'></span> <a class='colapse_button' href="javascript:void(0);"><strong>Biodata Pasien</strong></a>
          </div>

          <div class='panel-body' id='content-data-biodata'>
            <div class='empty-row'>
              <span><?php echo preset_message('need_search'); ?></span>
            </div>
          </div>
        </div>

        <div id='panel-keterangan' class='panel panel-primary panel-shadow'>
          <div class="panel-heading">
            <span class='glyphicon glyphicon-chevron-up'></span> <a class='colapse_button' href="javascript:void(0);"><strong>Catatan Medik Pasien</strong></a>
            <a class='pull-right' id='refresh_manual' href='javascript:void(0);'><span class="glyphicon glyphicon-refresh"></span> <strong>Reload Data</strong></a>
          </div>

          <div class='panel-body' id='catatan-medik-pasien'>
            <div class="panel-group" id="accordion">
              <div class="panel">
                <div class="panel-heading">
                    <span class='glyphicon glyphicon-chevron-up'></span>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#anamnesis">
                      Catatan Anamnesis Pasien
                    </a>
                </div>

                <div id="anamnesis" class="panel-collapse collapse">
                  <div class="panel-body" id="content-data-anamnesis">
                    <div class='empty-row'>
                      <span><?php echo preset_message('no_data'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading">
                    <span class='glyphicon glyphicon-chevron-up'></span>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#fisik">
                      Catatan Fisik Pasien
                    </a>
                </div>

                <div id="fisik" class="panel-collapse collapse">
                  <div class="panel-body" id="content-data-fisik">
                    <div class='empty-row'>
                      <span><?php echo preset_message('no_data'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading">
                    <span class='glyphicon glyphicon-chevron-up'></span>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#diagnosis">
                      Catatan Diagnosis Pasien
                    </a>
                </div>

                <div id="diagnosis" class="panel-collapse collapse">
                  <div class="panel-body" id="content-data-diagnosis">
                    <div class='empty-row'>
                      <span><?php echo preset_message('no_data'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading">
                    <span class='glyphicon glyphicon-chevron-up'></span>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#obat">
                      Catatan Obat Pasien
                    </a>
                </div>

                <div id="obat" class="panel-collapse collapse">
                  <div class="panel-body" id="content-data-obat">
                    <div class='empty-row'>
                      <span><?php echo preset_message('no_data'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading">
                    <span class='glyphicon glyphicon-chevron-up'></span>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#penunjang">
                      Catatan Transaksi Penunjang Pasien
                    </a>
                </div>

                <div id="penunjang" class="panel-collapse collapse">
                  <div class="panel-body" id="content-data-penunjang">
                    <div class='empty-row'>
                      <span><?php echo preset_message('no_data'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading">
                    <span class='glyphicon glyphicon-chevron-up'></span>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#konsul">
                      Catatan Konsul Rawat Jalan Pasien
                    </a>
                </div>

                <div id="konsul" class="panel-collapse collapse">
                  <div class="panel-body" id="content-data-konsul">
                    <div class='empty-row'>
                      <span><?php echo preset_message('no_data'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading">
                    <span class='glyphicon glyphicon-chevron-up'></span>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#klinik">
                      Catatan Klinik / Pelayanan Poli Pasien
                    </a>
                </div>

                <div id="klinik" class="panel-collapse collapse">
                  <div class="panel-body" id="content-data-klinik">
                    <div class='empty-row'>
                      <span><?php echo preset_message('no_data'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading">
                    <span class='glyphicon glyphicon-chevron-up'></span>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#prosedur">
                      Catatan Prosedur Pasien
                    </a>
                </div>

                <div id="prosedur" class="panel-collapse collapse">
                  <div class="panel-body" id="content-data-prosedur">
                    <div class='empty-row'>
                      <span><?php echo preset_message('no_data'); ?></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel">
                <div class="panel-heading">
                    <span class='glyphicon glyphicon-chevron-up'></span>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#khusus">
                      Catatan Khusus Pasien
                    </a>
                </div>
                <div id="khusus" class="panel-collapse collapse">
                  <div class="panel-body" id="content-data-khusus">
                    <div class='empty-row'>
                      <span><?php echo preset_message('no_data'); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class='panel panel-primary panel-shadow'>
          <div class="panel-heading ">
            <span class='glyphicon glyphicon-chevron-up'></span> <a class='colapse_button' href="javascript:void(0);"><strong>Asuhan Keperawatan</strong></a>
          </div>

          <div id='content-data-asuhan-keperawatan' class='panel-body'>
            <div class='empty-row'>
              <span><?php echo preset_message('wait_order'); ?></span>
            </div>
          </div>
        </div>

      </div>
    </div>