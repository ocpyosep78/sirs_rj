<?php if(count($query['result']) > 0): ?>
	<?php echo $print; ?>
<?php endif; ?>

<div class="panel panel-default">
	<div class="panel-heading">
		<span class="panel-title"><strong>KESAN UMUM</strong></span>
	</div>

	<div class="panel-body">
    <div class='col-xs-12 col-sm-12 col-lg-8'>
  
  	<?php if(count($query['result']) > 0): ?>
  		<?php foreach($query['result'] as $key=>$value): ?>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>KESAN SAKIT</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['KU']); ?>
  			</div>
  		</div>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>KESADARAN</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['KESADARAN']); ?>
  			</div>
  		</div>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>KESAN GIZI</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['GIZI']); ?>
  			</div>
  		</div>

      <div class='clearfix'></div>
      
  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>TINGGI BADAN</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['TINGGI']).' cm'; ?>
  			</div>
  		</div>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>BERAT BADAN</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['BERAT']).' kg'; ?>
  			</div>
  		</div>

      <div class="col-xs-6 col-sm-4 col-lg-4">
        <span>BODY MASS INDEX</span>
        <div class="bs-callout bs-callout-info">
          <?php echo form_label( bmi($value['BERAT'], $value['TINGGI'])).' kg'; ?>
        </div>
      </div>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>LINGKAR KEPALA</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['LINGKARKEPALA']).' cm'; ?>
  			</div>
  		</div>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>SUHU</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['SUHU']).' &deg;C'; ?>
  			</div>
  		</div>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>NADI</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['NADI']).' x /menit'; ?>
  			</div>
  		</div>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>RESPIRASI</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['PERNAPASAN']).' x /menit'; ?>
  			</div>
  		</div>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>TEKANAN DARAH</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label($value['TEKDAR_SIS']).' / '.form_label($value['TEKDAR_DIAS']); ?>
  			</div>
  		</div>

  		<div class="col-xs-6 col-sm-4 col-lg-4">
  			<span>SKALA KENYERIAN</span>
  			<div class="bs-callout bs-callout-info">
  				<?php echo form_label(get_latin_fisik($value['VAS'],'skala_kenyerian')); ?>
  			</div>
  		</div>

  		<div class="clearfix"></div>
  		<hr>
  		<?php echo main_button('edit_data_btn', 'modal_fisik_kesan_umum_edit_', 'primary', 1, 'edit');?>
      <p/>
    </div>

    <div class='col-xs-12 col-sm-12 col-lg-4'>
      <div class="col-xs-12 col-sm-6 col-lg-12">
        <span>LOKASI KELUHAN PASIEN</span>
        <div class='tag_gambar'>
          <?php $jk = ($this->session->userdata('jk') !== 'L') ? 'woman' : 'man'; ?>
          <img class='img_anatomi' width='100%' src='<?php echo base_url()?>assets/img/human_body/human-body-<?php echo $jk; ?>.png'/>
        </div>
      </div>
    </div>

      <?php endforeach; ?>
    <?php else: ?>
      
      <div class='empty-row'>
        <?php echo preset_message('unavailable_data'); ?>
      </div>
      <hr>
      <?php echo main_button('add_data_btn', 'modal_fisik_kesan_umum_', 'primary', 1, 'add');?>
    </div>

    <?php endif; ?>
</div>
</div>

<?php if(count($query['result']) > 0): ?>
  <div class='display-toogle'>
    <div class='display-toogle-header'>
      Pilih Tampilan : <a id='shortcut' class='display-toggle-link'><span class='glyphicon glyphicon-th-large'></span> Shortcut</a> | <a id='list' class='display-toggle-link'><span class='glyphicon glyphicon-th-list'></span> Detail List</a>
    </div>
  
    <div class='display-toogle-body'>
      <div>
        <center class='shortcut'>
          <?php echo main_button('edit_data_btn_kepala' , 'modal_fisik_kepala_', 'primary', 1, 'link');?><?php echo main_button('edit_data_btn_leher' , 'modal_fisik_leher_', 'primary', 1, 'link');?><?php echo main_button('edit_data_btn_mammae' , 'modal_fisik_mammae_', 'primary', 1, 'link');?><?php echo main_button('edit_data_btn_thoraks' , 'modal_fisik_thoraks_', 'primary', 1, 'link');?><?php echo main_button('edit_data_btn_paru' , 'modal_fisik_paru_', 'primary', 1, 'link');?><?php echo main_button('edit_data_btn_jantung' , 'modal_fisik_jantung_', 'primary', 1, 'link');?><?php echo main_button('edit_data_btn_abdomen' , 'modal_fisik_abdomen_', 'primary', 1, 'link');?><?php echo main_button('edit_data_btn_genitalia' , 'modal_fisik_genitalia_', 'primary', 1, 'link');?><?php echo main_button('edit_data_btn_ektremitas' , 'modal_fisik_ektremitas_', 'primary', 1, 'link');?><?php echo main_button('edit_data_btn_neurologis' , 'modal_fisik_neurologis_', 'primary', 1, 'link');?>
        </center>
      </div>

      <div class="panel-group list" id="accordion1">
        <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#kepala">
                <strong>PEMERIKSAAN KEPALA</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="kepala" class="panel-collapse-fisik panel-collapse-fisik panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-kepala">

              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/kepala', $query) ?></span>

              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>

            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->

        <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#leher">
                <strong>PEMERIKSAAN LEHER</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="leher" class="panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-leher">
              
              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/leher') ?></span>

              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>

            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->

        <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#mammae">
                <strong>PEMERIKSAAN MAMMAE</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="mammae" class="panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-mammae">

              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/mammae') ?></span>

              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>

            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->

         <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#thoraks">
                <strong>PEMERIKSAAN THORAKS</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="thoraks" class="panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-thoraks">
              
              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/thoraks') ?></span>

              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>

            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->


         <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#paru">
                <strong>PEMERIKSAAN PARU-PARU</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="paru" class="panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-paru">
              
              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/paru') ?></span>

              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>

            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->

        <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#jantung">
                <strong>PEMERIKSAAN JANTUNG</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="jantung" class="panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-jantung">
              
              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/jantung') ?></span>

              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>

            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->

        <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#abdomen">
                <strong>PEMERIKSAAN ABDOMEN</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="abdomen" class="panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-abdomen">
              
              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/abdomen') ?></span>

              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>

            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->

          <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#genitalia">
                <strong>PEMERIKSAAN GENITALIA</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="genitalia" class="panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-genitalia">
              
              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/genitalia') ?></span>

              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>
              
            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->

        <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#ektremitas">
                <strong>PEMERIKSAAN EKTREMITAS</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="ektremitas" class="panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-ektremitas">

              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/ektremitas') ?></span>

              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>

            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->

        <div class="panel panel-default">
          <div class="panel-heading">
              <span class='glyphicon glyphicon-chevron-up'></span>
              <a class="accordion-toggle accordion-toggle-primary" data-toggle="collapse" data-parent="#accordion1" href="#neurologis">
                <strong>PEMERIKSAAN NEUROLOGIS</strong>
              </a>
          </div><!-- /.panel-heading -->

          <div id="neurologis" class="panel-collapse-fisik panel-collapse collapse">
            <div class="panel-body" id="content-data-neurologis">
              
              <?php if(count($query['result']) > 0): ?>

                <span><?php $this->load->view('fisik_request/neurologis') ?></span>
              
              <?php else: ?>

                <div class='empty-row'>
                  <?php echo preset_message('unavailable_data_need_ku'); ?>
                </div>

              <?php endif; ?>
              
            </div><!-- /.panel-body -->
          </div><!-- /.panel-collapse-fisik panel-collapse collapse -->
        </div><!-- /.panel -->
        </div><!-- /.panel-group -->  
      </div>
    </div>
<?php endif; ?>
  
<script type="text/javascript">
    $('.img_anatomi').tagingPicture({
      ps : '<?php echo $link; ?>',
      bu : '<?php echo base_url(); ?>'
    });
</script>