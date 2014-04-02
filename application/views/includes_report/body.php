 <body>
    <div class='wraping-notification'>
      <div class='print_panel'>
        <p>Anda Yakin akan mencetak data ini ? </br>
        <a href='javascript:void(0);' onClick="window.print();">Ya, Cetak Laporan Ini</a>
      </div>
    </div>

    <div id='wrap-header'>
      <div id="header" class='container'>
        <img src="<?php echo base_url(); ?>assets/img/logo.png">
        <div class='title-container'>
          <span class='title primary'><?php echo $this->config->item('report_1st_header'); ?></span>
          <span class='title second'><?php echo $this->config->item('report_2nd_header'); ?></span>
          <span class='title third'><?php echo $this->config->item('report_3rd_header'); ?></span>
      </div>
      </div>
    </div>

    <div class='clear_fix'></div>

    <div class='container'>
      <div class='report_title'>
        <?php echo $title; ?>
      </div>

      <div class="body">
