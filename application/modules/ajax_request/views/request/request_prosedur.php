<?php if(count($query['result']) > 0): ?>
	<?php echo $print; ?>
<?php endif; ?>

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th></th>
				<th>NAMA TINDAKAN / PROSEDUR</th>
				<th>KLASIFIKASI</th>
			</tr>
		</thead>

		<tbody>
		
		<?php if(count($query['result']) > 0): ?>
			<?php foreach($query['result'] as $key=>$value): ?>

			<tr>
				<td class='button_column_md'>
					<?php //echo edit_button_link($link.'&ID='.$value['ID'],'modal_prosedur_edit_'); ?>
					<?php echo delete_button_link($link.'&ID='.$value['ID'],'delete_prosedur_tindakan'); ?>
				</td>
				<td><span class="label label-primary"><?php echo $value['ID_TIND']; ?></span> <?php echo form_label($value['NM_TINDAKAN']); ?></td>
				<td class="edit_column"><?php echo form_label($value['KLASIFIKASI']); ?></td>
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
<?php echo main_button('add_data_btn', 'modal_prosedur_', 'primary', 1, 'add');?>

<script type="text/javascript">
    $('table').tablesorter({});
</script>