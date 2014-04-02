<?php if(count($content) > 0): ?>

<form id="form_penunjang">
	<?php echo main_button('save_penunjang_data_btn', 'save_penunjang', 'save_penunjang', 0, 'add');?>
	<?php echo print_button('report_anamnesa/0000000204/10-10-10/001'); ?>

	<div class='clearfix'></div>
	<hr class='dash'>

	<?php 
		foreach($content as $key=>$value):

			$selected = array_search($value['ID_JNS_LAYANAN'], $selected_content);
			$check = ($selected) ? 'checked' : '';
			$color = ($selected) ? '#AC5100' : '#203380';
	?>

	<label data='<?php echo $value['NM_LAYANAN']; ?>' class='penunjang_content'>
		<?php if($selected): ?>
			
				<a title="Delete Data" href="javascript:void(0)" data="<?php echo $value['ID_JNS_LAYANAN']; ?>" class="delete_penunjang">x</a>
				<span class='actives'><?php echo $value['NM_LAYANAN']; ?></span>

		<?php else: ?>

				<input type='checkbox' name='ID_JNS_LAYANAN[]' value='<?php echo $value['ID_JNS_LAYANAN']; ?>'/>
				<span><?php echo $value['NM_LAYANAN']; ?></span>

		<?php endif; ?>
	</label>

	<?php endforeach; ?>
</form>

<?php else: ?>

    <div class='empty-row'>
		<?php echo preset_message('unavailable_data'); ?>
	</div>

<?php endif; ?>
