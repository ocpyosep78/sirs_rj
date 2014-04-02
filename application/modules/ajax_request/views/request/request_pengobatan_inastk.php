<?php if(count($query['result']) > 0): ?>
	<?php echo $print; ?>
<?php endif; ?>

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th></th>
				<th>NAMA OBAT</th>
				<th>SEDIAAN / BENTUK</th>
				<th>DETAIL OBAT (signa)</th>
				<th>JUMLAH OBAT</th>
			</tr>
		</thead>

		<tbody>

		<?php if(count($query['result']) > 0): ?>
			<?php foreach($query['result'] as $key=>$value): ?>

			<tr>
				<td class='button_column_md'>
					<?php echo edit_button_link($link.'&ID_INASTK='.$value['ID_INASTK'],'modal_pengobatan_inastk_edit_'); ?>
					<?php echo delete_button_link($link.'&ID_INASTK='.$value['ID_INASTK'],'delete_pengobatan_inastk'); ?>
				</td>

				<?php $nama_obat = $this->addon->addon_inastkrshs($value['ID_INASTK']);?>
				<td class='edit_column'>
					<span class="label label-primary"><?php echo $value['ID_INASTK']; ?></span>  
					<?php echo form_label($nama_obat[0]['NAMA_OBAT']); ?>
				</td>
				<td><?php echo form_label($value['SEDIAAN']); ?> / <?php echo form_label($value['BENTUK']); ?></td>

				<td class='edit_column'>
					<?php $signa1 = $this->addon->addon_signa1($value['SIGNA1']);?>
					<?php echo form_label((isset($signa1[0]['KETSIGNA1'])) ? $signa1[0]['KETSIGNA1'] : ''); ?>
					 
					<?php $signa2 = $this->addon->addon_signa2($value['SIGNA2']);?>
					<?php echo form_label((isset($signa2[0]['KETSIGNA2'])) ? $signa2[0]['KETSIGNA2'] : ''); ?>
					 
					<?php $signa3 = $this->addon->addon_signa3($value['SIGNA3']);?>
	  				<?php echo form_label((isset($signa3[0]['KETSIGNA3'])) ? $signa3[0]['KETSIGNA3'] : ''); ?>
	  			</td>

				<td><?php echo form_label($value['JMLOBAT']); ?></td>
			</tr>

			<?php endforeach;?>
		<?php else: ?>

			<tr>
				<td class='empty-row' colspan='100'>
					<?php echo preset_message('unavailable_data'); ?>
				</td>
			</tr>

		<?php endif; ?>

		</tbody>
	</table>

</div>
<hr>
<?php echo main_button('add_data_btn', 'modal_pengobatan_inastk_', 'primary', 1, 'add');?>
