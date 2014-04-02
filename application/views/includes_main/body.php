  <body>
    <noscript>
      <div class="alert alert-danger">
        <strong>Error..!!</strong>
        <span><?php echo preset_message('error_java_script'); ?></span>
      </div>
    </noscript>

    <div class='overlay'>
      <div class="alert alert-danger" id="error_ajax">
        <strong>Error..!!</strong>
        <span><?php echo preset_message('error_loading'); ?></span>
        <div class="tutup_error"><a href="javascript:void(0);"><span class="glyphicon glyphicon-circle-arrow-left"></span> Kembali</a></div>
      </div>
    </div>

    <div id='wrap'>
      <div class="navbar navbar-default">
          <div class="navbar-header">
            <a href="" class="navbar-brand"><img width='60px' src='<?php echo base_url().'assets/img/logo.png'; ?>'> <?php echo $judul; ?></a>
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

        <?php if($this->session->userdata('is_logged_in')): ?>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>">
                <span class='glyphicon glyphicon-home'></span> Dashboard</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class='glyphicon glyphicon-signal'></span> Statistik <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo base_url(); ?>graphics"><span class='glyphicon glyphicon-signal'></span> Grafik Kedatangan</a>
                  </li>
                </ul>
              </li>
              <li class='menu_permintaan_konsul'>
                <a><span class='glyphicon glyphicon-comment'></span> Permohonan Konsul <sup class='red'>2</sup></a>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class='glyphicon glyphicon-user'></span> <?php echo $this->session->userdata('namadokter'); ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">
                    <span class='glyphicon glyphicon-list'></span> Lihat Daftar Pasien</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>sistem/edit_password">
                    <span class='glyphicon glyphicon-user'></span> Ubah Password</a>
                  </li>
                  <li role="presentation" class="divider"></li>
                  <li>
                    <a href="<?php echo base_url(); ?>login/logout" onclick="return confirm('Anda yakin akan logout dari session login anda ?');">
                    <span class='glyphicon glyphicon-off'></span> Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        <?php endif; ?>

      </div>