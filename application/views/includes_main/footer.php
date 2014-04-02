       </div>
    </div>

    <div id='loading_panel'>
      <img src='<?php echo base_url();?>assets/img/ajax-loader.gif'/>
    </div>

    <div id='loading-overlay-layer'>
      <div class="progress progress-striped active">
        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <span class="sr-only">Loading</span>
        </div>
      </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        </div>
      </div>
    </div>

    <div class='scroll_top'>
      <a id='to-top' href='javascript:void(0);'><span class='glyphicon glyphicon-arrow-up'></span></a>
    </div>

  <?php if($this->uri->segment(2) == 'dashboard' && $this->uri->segment(1) == 'sistem'): ?>
    <div class="toggle-identity">
      <div>
        <label class='title'>No.Medrec</label><br>
        <label class='span_no_medrec content'>--</label>
      </div>
      <div>
        <label class='title'>Tanggal</label><br>
        <label class='span_tgl_kunjungan content'>--</label>
      </div>
      <div>
        <label class='title'>Id.Poli</label><br>
        <label class='span_id_poli content'>--</label>
      </div>
      <div>
        <label class='title'>Pasien</label><br>
        <label class='span_pasien content content-inner'>--</label>
      </div>
      <div>
        <label class='title'>Umur</label><br>
        <label class='span_umur content content-inner'>--</label>
      </div>
    </div>
  <?php endif; ?>

    <div id="footer">
      <div class="container">
        <div class="pull-right">
          <p class="text-muted credit visible-lg"><img src="<?php echo base_url(); ?>assets/img/logo.png"></p>
        </div>
        <p class="text-muted credit">
          <?php echo $footer; ?>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ajax_load.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/default.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/choosen/chosen.jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/graphics/knockout-2.2.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/graphics/globalize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/graphics/dx.chartjs.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/graphics/default.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tablepagination.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tagingpicture.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/autocomplete.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    set_base_url('<?php echo base_url(); ?>');
    $('#input_no_modrek').autoComplete({ bu : '<?php echo base_url(); ?>' });
  });
</script>