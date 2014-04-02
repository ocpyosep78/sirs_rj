<?php if(count($query['result']) > 0): ?>
	<?php echo $print; ?>
<?php foreach($query['result'] as $key=>$value): ?>

	<span>CATATAN</span>
	<div class="bs-callout bs-callout-info">
		<?php echo form_label($value['CATATAN']); ?>
	</div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_cat_edit', 'primary', 1, 'edit');?>

<?php endforeach; ?>
<?php else: ?>

	<div class="empty-row">
		<?php echo preset_message('unavailable_data'); ?>
	</div>
	<hr>
	<?php echo main_button('add_data_btn', 'modal_cat_', 'primary', 1, 'add');?>

<?php endif; ?>