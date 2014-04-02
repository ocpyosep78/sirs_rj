<?php foreach($result as $key=>$value): ?>

	<div class="col-lg-6 col-xl-6">
		<span><?php echo $key; ?></span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label($value[$key]); ?>
		</div>
	</div>

<?php endforeach; ?>