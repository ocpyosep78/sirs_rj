
<div class="panel panel-default">
	<div class="panel-heading">
		<span class="panel-title"><strong>PSIKOSOSIAL & KEBUTUHAN KOMUNIKASI / PENDIDIKAN DAN PENGAJARAN</strong></span>
	</div>

	<div class="panel-body" id="content-data-asuhan-keperawatan">

	<?php if(count($query['result']) > 0) : ?>
	<?php foreach($query['result'] as $key=>$value): ?>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>GOLONGAN DARAH</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['GOLDARAH']); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>CARA KUNJUNGAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['CARA_KUNJ']); ?>
			</div>
		</div>

		<div class='clearfix'></div>
		<hr>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>PENDIDIKAN TERAKHIR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['PENDIDIKAN']); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>TINGGAL BERSAMA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label(get_latin( $value['STATUS_TINGGAL'],'STATUS_TINGGAL' )); ?>
			</div>
		</div>

		<div class='clearfix'></div>
		<hr>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>KEBIASAAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo get_checkbox('KEBIASAAN1', $value['KEBIASAAN1'], '', 'KEBIASAAN'); ?><br/>
				<?php echo get_checkbox('KEBIASAAN2', $value['KEBIASAAN2'], '', 'KEBIASAAN'); ?><br/>
				<span>KEBIASAAN LAINNYA <sup>selain diatas</sup></span>
				<br>
				<?php echo form_label($value['KEBIASAAN3']); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>KEMAMPUAN BAHASA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo get_checkbox('BAHASA1', $value['BAHASA1'], '', 'BAHASA'); ?><br/>
				<?php echo get_checkbox('BAHASA2', $value['BAHASA2'], '', 'BAHASA'); ?><br/>
				<?php echo get_checkbox('BAHASA3', $value['BAHASA3'], '', 'BAHASA'); ?><br/>
			</div>
		</div>

		<div class='clearfix'></div>
		<hr>
		
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BICARA</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['BICARA'],'BICARA') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>KAPAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['BICARA_GANGGUAN']); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BAHASA SEHARI-HARI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['BAHASA_HARIAN']); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>PERLU PENERJEMAH ?</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['PENTERJEMAH'],'PENTERJEMAH') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>BAHASA ISYARAT</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['BAHASA_ISYARAT'],'BAHASA_ISYARAT') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>HAMBATAN BELAJAR</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label( get_latin_fisik($value['HAMBATAN_BLJR'],'HAMBATAN_BLJR') ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>FAKTOR PENGHAMBATAN BELAJAR</span>
			<div class="bs-callout bs-callout-info">
					<?php echo get_checkbox('HAMBATAN_BLJR1', $value['HAMBATAN_BLJR1'], '', 'ext_hambaran_bljr'); ?><br/>
					<?php echo get_checkbox('HAMBATAN_BLJR2', $value['HAMBATAN_BLJR2'], '', 'ext_hambaran_bljr'); ?><br/>
					<?php echo get_checkbox('HAMBATAN_BLJR3', $value['HAMBATAN_BLJR3'], '', 'ext_hambaran_bljr'); ?><br/>
					<?php echo get_checkbox('HAMBATAN_BLJR4', $value['HAMBATAN_BLJR4'], '', 'ext_hambaran_bljr'); ?><br/>
					<?php echo get_checkbox('HAMBATAN_BLJR5', $value['HAMBATAN_BLJR5'], '', 'ext_hambaran_bljr'); ?><br/>
					<?php echo get_checkbox('HAMBATAN_BLJR6', $value['HAMBATAN_BLJR6'], '', 'ext_hambaran_bljr'); ?><br/>
					<?php echo get_checkbox('HAMBATAN_BLJR7', $value['HAMBATAN_BLJR7'], '', 'ext_hambaran_bljr'); ?><br/>
					<?php echo get_checkbox('HAMBATAN_BLJR8', $value['HAMBATAN_BLJR8'], '', 'ext_hambaran_bljr'); ?><br/>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>CARA BELAJAR YANG DISUKAI</span>
			<div class="bs-callout bs-callout-info">
				<?php echo get_checkbox('CARA_BLJR1', $value['CARA_BLJR1'], '', 'ext_cara_bljr'); ?><br/>
				<?php echo get_checkbox('CARA_BLJR2', $value['CARA_BLJR2'], '', 'ext_cara_bljr'); ?><br/>
				<?php echo get_checkbox('CARA_BLJR3', $value['CARA_BLJR3'], '', 'ext_cara_bljr'); ?><br/>
				<?php echo get_checkbox('CARA_BLJR4', $value['CARA_BLJR4'], '', 'ext_cara_bljr'); ?><br/>
				<?php echo get_checkbox('CARA_BLJR5', $value['CARA_BLJR5'], '', 'ext_cara_bljr'); ?><br/>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-lg-6">
			<span>KEBUTUHAN PEMBELAJARAN</span>
			<div class="bs-callout bs-callout-info">
				<?php echo get_checkbox('KEB_PEMBELAJARAN1', $value['KEB_PEMBELAJARAN1'], '', 'ext_keb_pembelajaran'); ?><br/>
				<?php echo get_checkbox('KEB_PEMBELAJARAN2', $value['KEB_PEMBELAJARAN2'], '', 'ext_keb_pembelajaran'); ?><br/>
				<?php echo get_checkbox('KEB_PEMBELAJARAN3', $value['KEB_PEMBELAJARAN3'], '', 'ext_keb_pembelajaran'); ?><br/>
				<?php echo get_checkbox('KEB_PEMBELAJARAN4', $value['KEB_PEMBELAJARAN4'], '', 'ext_keb_pembelajaran'); ?>
				<span>, PENJELASAN</span>
				<br>
				<?php echo form_label($value['KEB_PEMBELAJARAN5']); ?>
			</div>
		</div>
		<div class='clearfix'></div>
		<hr>
		<?php echo main_button('edit_data_btn', 'modal_asuhan_keperawatan_edit_', 'primary', 1, 'edit');?>

	<?php endforeach; ?>
	<?php else: ?>

		<div class="empty-row">
			<?php echo preset_message('unavailable_data'); ?>
		</div>
		<hr>
		<?php echo main_button('add_data_btn', 'modal_asuhan_keperawatan_', 'primary', 1, 'add');?>

	<?php endif; ?>

	</div>
</div>

<div class="panel panel-default disposisi">
	<div class="panel-heading">
		<span class="panel-title"><strong>DISPOSISI</strong></span>
	</div>

	<div class="panel-body">

	<?php if(count($query['result']) > 0) : ?>
	<?php foreach($query['result'] as $key=>$value): ?>
		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>TINDAK LANJUT</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['TINDAKLANJUT']); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>RUANG RAWAT</span>
			<div class="bs-callout bs-callout-info">
				<?php //echo form_label(form_label( get_latin_fisik( $value['ABDOMEN'],'ABDOMEN' )) ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>TANGGAL KONTROL</span>
			<div class="bs-callout bs-callout-info">
				<?php echo form_label($value['TGL_JADWAL']); ?>
			</div>
		</div>

		<div class='clearfix'></div>
		<hr>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>DOKTER SUPERVISOR / DPJP</span>
			<div class="bs-callout bs-callout-info">
				<?php //echo form_label(form_label( get_latin_fisik( $value['ABDOMEN'],'ABDOMEN' )) ); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-lg-3">
			<span>PERAWAT</span>
			<div class="bs-callout bs-callout-info">
				<?php //echo form_label(form_label( get_latin_fisik( $value['ABDOMEN'],'ABDOMEN' )) ); ?>
			</div>
		</div>
		<div class='clearfix'></div>
		<hr>
		<?php echo main_button('edit_data_btn', 'modal_disposisi_asuhan_keperawatan_edit_', 'primary', 1, 'edit');?>

	<?php endforeach; ?>
	<?php else: ?>

		<div class="empty-row">
			<?php echo preset_message('unavailable_data'); ?>
		</div>
		<hr>
		<?php echo main_button('add_data_btn', 'modal_disposisi_asuhan_keperawatan_', 'primary', 1, 'add');?>

	<?php endif; ?>
	</div>
</div>