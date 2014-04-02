<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-4 col-sm-3 col-lg-3">
		<span class='form_labeling'>KEPALA</span>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>KEPALA</span>
			<?php echo get_option_fisik('KEPALA', $value['KEPALA'],'class="form-control"','kepala'); ?>
		</div>

		<div class="col-xs-8 col-sm-8 col-lg-8">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input type='text' name='KEPALA_KET' class='form-control' value='<?php echo $value['KEPALA_KET']; ?>' />
		</div>
	</fieldset>

	<hr>

	<div class="col-xs-4 col-sm-3 col-lg-3">
		<span class='form_labeling'>MATA</span>
	</div>
		
	<fieldset>
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>SKLERA</span>
			<?php echo get_option_fisik('MATA_SKLERA', $value['MATA_SKLERA'],'class="form-control"','mata_sklera'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>KONJUNGTIVA</span>
			<?php echo get_option_fisik('MATA_KONJUNGTIVA', $value['MATA_KONJUNGTIVA'],'class="form-control"','mata_konjungtiva'); ?>
		</div>

		<div class="col-xs-8 col-sm-8 col-lg-8">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input type='text' name='MATA_KET' class='form-control' value='<?php echo $value['MATA_KET']; ?>' />
		</div>
	</fieldset>

	<hr>

	<div class="col-xs-4 col-sm-3 col-lg-3">
		<span class='form_labeling'>TELINGA</span>
	</div>
		
	<fieldset>
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>PENDENGARAN</span>
			<?php echo get_option_fisik('TELINGA_PENDENGARAN', $value['TELINGA_PENDENGARAN'],'class="form-control"','telinga_pendengaran'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>CAE</span>
			<?php echo get_option_fisik('TELINGA_CAE', $value['TELINGA_CAE'],'class="form-control"','TELINGA_CAE'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>SEKRET</span>
			<?php echo get_option_fisik('TELINGA_SEKRET', $value['TELINGA_SEKRET'],'class="form-control"','TELINGA_SEKRET'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>MEMBRAN TYMPANI</span>
			<?php echo get_option_fisik('MEMBRANTYMPANI_INTAK', $value['MEMBRANTYMPANI_INTAK'],'class="form-control"','MEMBRANTYMPANI_INTAK'); ?>
		</div>

		<div class="col-xs-8 col-sm-8 col-lg-8">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input type='text' name='TELINGA_KET' class='form-control' value='<?php echo $value['TELINGA_KET']; ?>' />
		</div>
	</fieldset>

	<hr>

	<div class="col-xs-4 col-sm-3 col-lg-3">
		<span class='form_labeling'>HIDUNG</span>
	</div>
		
	<fieldset>
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>HIDUNG PECAH</span>
			<?php echo get_option_fisik('HIDUNG_PCH', $value['HIDUNG_PCH'],'class="form-control"','HIDUNG_PCH'); ?>
		</div>
	
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>SEKRET</span>
			<?php echo get_option_fisik('HIDUNG_SEKRET', $value['HIDUNG_SEKRET'],'class="form-control"','HIDUNG_SEKRET'); ?>
		</div>
	
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>CONCHA</span>
			<?php echo get_option_fisik('HIDUNG_CONCHA', $value['HIDUNG_CONCHA'],'class="form-control"','HIDUNG_CONCHA'); ?>
		</div>
	
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>SEPTUM DEVIASI</span>
			<?php echo get_option_fisik('HIDUNG_SEPTUMDEVIASI', $value['HIDUNG_SEPTUMDEVIASI'],'class="form-control"','HIDUNG_SEPTUMDEVIASI'); ?>
		</div>


		<div class="col-xs-8 col-sm-8 col-lg-8">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input type='text' name='HIDUNG_KET' class='form-control' value='<?php echo $value['HIDUNG_KET']; ?>' />
		</div>
	</fieldset>

	<hr>

	<div class="col-xs-4 col-sm-3 col-lg-3">
		<span class='form_labeling'>TENGGOROKAN</span>
	</div>
		
	<fieldset>
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>TONSIL</span>
			<?php echo get_option_fisik('TENGGOROKAN_TONSIL', $value['TENGGOROKAN_TONSIL'],'class="form-control"','TENGGOROKAN_TONSIL'); ?>
			<?php echo get_option_fisik('TONSIL_MEMBESAR', $value['TONSIL_MEMBESAR'],'class="form-control"','TONSIL_MEMBESAR'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>FARING</span>
			<?php echo get_option_fisik('TENGGOROKAN_FARING', $value['TENGGOROKAN_FARING'],'class="form-control"','TENGGOROKAN_FARING'); ?>
		</div>

		<div class="col-xs-8 col-sm-8 col-lg-8">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input type='text' name='TENGGOROKAN_KET' class='form-control' value='<?php echo $value['TENGGOROKAN_KET']; ?>' />
		</div>
	</fieldset>

	<hr>

	<div class="col-xs-4 col-sm-3 col-lg-3">
		<span class='form_labeling'>LIDAH</span>
	</div>
		
	<fieldset>
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>LIDAH</span>
			<?php echo get_option_fisik('LIDAH', $value['LIDAH'],'class="form-control"','LIDAH'); ?>
		</div>

		<div class="col-xs-8 col-sm-8 col-lg-8">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input type='text' name='LIDAH_KET' class='form-control' value='<?php echo $value['LIDAH_KET']; ?>' />
		</div>
	</fieldset>

	<hr>
	
	<div class="col-xs-4 col-sm-3 col-lg-3">
		<span class='form_labeling'>BIBIR</span>
	</div>
		
	<fieldset>
		<div class="col-xs-6 col-sm-6 col-lg-4">
			<span class='form_labeling_small'>BIBIR</span>
			<?php echo get_option_fisik('BIBIR', $value['BIBIR'],'class="form-control"','BIBIR'); ?>
		</div>

		<div class="col-xs-8 col-sm-8 col-lg-8">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<input type='text' name='BIBIR_KET' class='form-control' value='<?php echo $value['BIBIR_KET']; ?>' />
		</div>
	</fieldset>

	<input type="hidden" value="#content-data-kepala" name="referer_">

<?php endforeach; ?>

