<?php if(count($query['result']) > 0): ?>
	<?php echo $print; ?>
<?php endif; ?>

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th></th>
				<th>DETAIL DIAGNOSA</th>
				<th>KLASIFIKASI</th>
			</tr>
		</thead>

		<tbody>

			<?php if(count($query['result']) > 0) : ?>
			<?php foreach($query['result'] as $key=>$value): ?>

				<tr>
					<td class='button_column_md'>
						<?php //echo edit_button_link($link.'&DIAGNOSA='.$value['DIAGNOSA'], 'modal_diagnosa_edit_'); ?>
						<?php echo delete_button_link($link.'&DIAGNOSA='.$value['DIAGNOSA'], 'delete_diagnosa'); ?>
					</td>
					<td>
						<?php $diagnosa = $this->addon->addon_icd1($value['DIAGNOSA']); ?>
							<span class="label label-primary"><?php echo $value['DIAGNOSA']; ?></span> 
						<?php echo form_label($nama_diagnosa = (count($diagnosa) > 0) ? $diagnosa[0]['NM_DIAGNOSA'] : ''); ?>
					</td>
					<td><?php echo form_label($value['KLASIFIKASI']); ?></td>
				</tr>

			<?php endforeach; ?>
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
<?php echo main_button('add_data_btn', 'modal_diagnosa_', 'primary', 1, 'add');?>

<script type="text/javascript">
    $('table').tablesorter({});
</script>