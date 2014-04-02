<?php 
	$results = (isset($query['result'])) ? $query['result'] : $result;
	foreach($results as $key=>$value):
?>

	<div class="col-xs-12 col-sm-4 col-lg-3">
		<span>VOKAL FREMITUS</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['PARU_VOKALFREMITUS'], 'paru_vokalfremitus') ).', '; ?>
			<?php echo form_label( get_latin_fisik($value['PARU_VOKALFREMITUS_KET'], 'paru_vokalfremitus_ket') ); ?>
		</div>
	</div>

	<div class="col-xs-12 col-sm-4 col-lg-3">
		<span>VOKAL RESONANS</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['PARU_VOKALRESONANS'], 'paru_vokalresonans') ).', '; ?>
			<?php echo form_label( get_latin_fisik($value['PARU_VOKALRESONANS_KET'], 'paru_vokalresonans_ket') ); ?>
		</div>
	</div>

	<div class='clearfix'></div>

	<div class="col-xs-12 col-sm-4 col-lg-3">
		<span>SUARA PERNAPASAN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['PARU_SUARA'], 'paru_suara') ); ?>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span>SUARA PERNAPASAN TAMBAHAN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( get_latin_fisik($value['PARU_SUARANAFAS'], 'PARU_SUARANAFAS') ).', '; ?>
			<?php echo form_label( get_latin_fisik($value['PARU_RONKI'], 'paru_ronki') ).', '; ?>
			<?php echo form_label( get_latin_fisik($value['PARU_RONKI_KET'], 'paru_ronki_ket') ); ?>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<span>LAIN-LAIN</span>
		<div class="bs-callout bs-callout-info">
			<?php echo form_label( $value['PARU_KET'] ); ?>
		</div>
	</div>

<?php endforeach; ?>

	<div class="clearfix"></div>
	<hr>
	<?php echo main_button('edit_data_btn', 'modal_fisik_paru_', 'primary', 1, 'edit');?>