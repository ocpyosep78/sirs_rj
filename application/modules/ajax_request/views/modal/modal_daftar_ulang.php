<?php 
	$form_control = "class='form-control'";
	$form_chosen = "class='form-control chosen'";
	foreach($query as $key=>$value): 
?>

	<span class="form_labeling">JENIS KUNJUNGAN</span>
	<div>
		<?php echo get_option_jenis_kunjungan('JNS_KUNJ', $value['JNS_KUNJ'], $form_control); ?>
	</div>
	<hr>

	<span class="form_labeling">DOKTER</span>
	<div>
		<?php echo get_option_dokter('ID_DOKTER',$id_dokter = ($value['ID_DOKTER'] == '') ? $this->session->userdata('user_id') : $value['ID_DOKTER'],$form_chosen); ?>
	</div>
	
	<span class="form_labeling">PREKONDISI</span>
	<div>
		<?php echo get_option_prekondisi('PREKONDISI', $value['PREKONDISI'], $form_control); ?>
	</div>
	<hr>

	<span class="form_labeling">ID DRG (drg)</span>
	<div>
		<?php echo get_option_drg('ID_DRG',$value['ID_DRG'],$form_chosen); ?>
	</div>
	<hr>

	<span class="form_labeling">TINDAK LANJUT</span>
	<div>
		<?php echo get_option_tindak_lanjut('TINDAK_LANJUT', $value['TINDAKLANJUT'], $form_control); ?>
	</div>
	<hr>

	<span class="form_labeling">POLI RUJUKAN</span>
	<div>
		<?php echo get_option_poliklinik_rujukan('ID_POLI2', $value['ID_POLI2'],$form_chosen); ?>
	</div>

	<input type="hidden" value="#content-data-kunjungan" name="referer_">

<?php endforeach; ?>