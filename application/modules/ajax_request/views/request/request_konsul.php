<?php if(count($query['result']) > 0) : ?>
	<?php echo $print; ?>
<?php foreach ($query['result'] as $key => $value): ?>

	<?php $request_dokter = $this->addon->cek_kirim_terima_to_current($value['DR_PENGIRIM'],$value['DR_PENERIMA']); ?>
	<?php $cek_isi_terima = $this->addon->cek_isi_terima($value['DR_PENERIMA'], $value['JAWABAN']); ?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><small><strong>Permohonan Rujukan</strong></small></h3>
	</div>
	
	<div class="panel-body">
		<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
			<span>POLI RUJUKAN</span>
			<div class="bs-callout bs-callout-info">
				<span class="label label-primary"><?php echo $value['ID_POLI2']; ?></span> 
				<?php echo form_label($value['NM_POLI']); ?>
			</div>
		</div>

		<?php $dokter = $this->addon->addon_dokter($value['DR_PENGIRIM']); ?>

		<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
			<span>DOKTER PENGIRIM</span>
			<div class="bs-callout bs-callout-info">
				<span class="label label-primary"><?php echo $value['DR_PENGIRIM']; ?></span>
				<?php echo form_label($dokter[0]['NM_DOKTER']); ?>
			</div>
		</div>

		<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
			<span>PROBLEM KONSUL</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['PROBLEM_KONSUL']); ?>
			</div>
		</div>

		<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
			<span>DIAGNOSA KERJA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['DIAGNOSA']); ?>
			</div>
		</div>

		<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
			<span>LEMBAR KERJA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['ISI_KONSUL']); ?>
			</div>
		</div>

		<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
			<span>CATATAN KHUSUS</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['CAT_KHUSUS']); ?>
			</div>
		</div>

		<?php if($request_dokter['st_kirim'] == 1):?>
			<div class="clearfix"></div>
			<hr>
			<?php echo main_button('edit_data_btn', 'modal_edit_permohonan_konsul_', 'primary', 1, 'edit');?>
		<?php endif; ?>
	</div>
</div>

<hr>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			<small><strong>Jawaban Rujukan</strong></small>
		</h3>
	</div>

	<div class="panel-body">
		<?php if($cek_isi_terima > 0): ?>
			
			<?php $dokter = $this->addon->addon_dokter($value['DR_PENERIMA']); ?>

			<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
				<span>DOKTER YANG MENJAWAB</span>
				<div class="bs-callout bs-callout-info">
					<span class="label label-primary"><?php echo $value['DR_PENERIMA']; ?></span>
					<?php echo form_label($dokter[0]['NM_DOKTER']); ?>
				</div>
			</div>

			<div class="col-xs-24 col-sm-24 col-md-6 col-lg-6 col-xl-6">
				<span>JAWABAN</span>
				<div class="bs-callout bs-callout-info">
					<?php echo form_label($value['JAWABAN_KONSUL']); ?>
				</div>
			</div>

			<?php if($request_dokter['st_terima'] == 1):?>
				<div class="clearfix"></div>
				<hr>
				<?php echo main_button('edit_data_btn', 'modal_jawaban_konsul_', 'primary', 1, 'edit');?>
			<?php endif; ?>

		<?php else: ?>
			<div class="empty-row">
				<?php echo preset_message('unavailable_data'); ?>
			</div>

			<?php if($request_dokter['st_kirim'] == 0):?>
				<hr>
				<?php echo main_button('add_data_btn', 'modal_jawaban_konsul_', 'primary', 1, 'add');?>
			<?php endif; ?>
		<?php endif; ?>
	</div>

<?php endforeach; ?>
<?php else: ?>
	
	<div class="empty-row">
		<?php echo preset_message('unavailable_data'); ?>
	</div>
	<hr>
	<?php echo main_button('add_data_btn', 'modal_permohonan_konsul_', 'primary', 1, 'add');?>

<?php endif; ?>