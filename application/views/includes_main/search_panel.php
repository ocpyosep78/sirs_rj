  <div class="bs-old-docs">
    <div class="container">
      <form class='form-horizontal' role="form" name="medrec_search_form" id="medrec_search_form">
        <div class="form-group form_group-compact">
          <div class="col-lg-12">
            <div class="input-group">
              <input type="text" class="form-control large-font" id="input_no_modrek" placeholder="Isi No. Medrek / Nama. Tekan Enter atau tombol Cari Data" autofocus> 
                <span class="input-group-btn">
                  <button id="submit_search" class="btn btn-info btn-supper" type="button">
                    <span>Cari Data Pasien</span>
                  </button>
                </span>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="bs-old-docs docs-header">
    <div class="container inline">
      <div style='width:72%; float:left'>
        <h3> <?php echo $this->config->item('description'); ?></h3>
        <p><?php echo $this->config->item('mini_description'); ?></p>
      </div>
    </div>
  </div>