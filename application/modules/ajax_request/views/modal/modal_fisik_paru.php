<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>VOKAL FREMITUS</span>
		<?php echo get_option_fisik('PARU_VOKALFREMITUS', $value['PARU_VOKALFREMITUS'],'class="form-control"','paru_vokalfremitus'); ?>
		<?php echo get_option_fisik('PARU_VOKALFREMITUS_KET', $value['PARU_VOKALFREMITUS_KET'],'class="form-control"','paru_vokalfremitus_ket'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>VOKAL RESONANS</span>
		<?php echo get_option_fisik('PARU_VOKALRESONANS', $value['PARU_VOKALRESONANS'],'class="form-control"','paru_vokalresonans'); ?>
		<?php echo get_option_fisik('PARU_VOKALRESONANS_KET', $value['PARU_VOKALRESONANS_KET'],'class="form-control"','paru_vokalresonans_ket'); ?>
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>SUARA PERNAPASAN</span>
		<?php echo get_option_fisik('PARU_SUARA', $value['PARU_SUARA'],'class="form-control"','paru_suara'); ?>
	</div>

	<div class="col-xs-6 col-sm-6 col-lg-6">
		<span class='form_labeling_small'>SUARA TAMBAHAN</span>
		<?php echo get_option_fisik('PARU_SUARANAFAS', $value['PARU_SUARANAFAS'],'class="form-control"','PARU_SUARANAFAS'); ?>
		<?php echo get_option_fisik('PARU_RONKI', $value['PARU_RONKI'],'class="form-control"','paru_ronki'); ?>
		<?php echo get_option_fisik('PARU_RONKI_KET', $value['PARU_RONKI_KET'],'class="form-control"','paru_ronki_ket'); ?>
	</div>

	<div class="clearfix"></div>

	<div class="col-xs-8 col-sm-8 col-lg-8">
		<span class='form_labeling_small'>LAIN-LAIN</span>
		<input class="form-control" name="PARU_KET" value='<?php echo $value['PARU_KET']; ?>' />
	</div>

	<input type="hidden" value="#content-data-paru" name="referer_">

<?php endforeach; ?>
	
	<div class="clearfix"></div>