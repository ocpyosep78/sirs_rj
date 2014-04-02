<?php foreach($query as $key=>$value): ?>

	<div class="col-xs-3 col-sm-3 col-lg-2">
		<span class='form_labeling'>ABDOMEN</span>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>BENTUK</span>
			<?php echo get_option_fisik('ABDOMEN', $value['ABDOMEN'],'class="form-control"','abdomen'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>KETEGANGAN</span>
			<?php echo get_option_fisik('ABD_KONSISTENSI', $value['ABD_KONSISTENSI'],'class="form-control"','abd_konsistensi'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>LAIN-LAIN</span>
			<?php echo get_option_fisik('ABD_LAINLAIN', $value['ABD_LAINLAIN'],'class="form-control"','abd_lainlain'); ?>
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>NYERI TEKAN</span>
			<?php echo get_option_fisik('ABD_NYERI_TEKAN', $value['ABD_NYERI_TEKAN'],'class="form-control"','ABD_NYERI_TEKAN'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>LOKASI</span>
			<input class='form-control' name='ABD_NYERITEKAN_LOKASI' value='<?php echo $value['ABD_NYERITEKAN_LOKASI']; ?>' />
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>NYERI LEPAS</span>
			<?php echo get_option_fisik('ABD_NYERILEPAS', $value['ABD_NYERILEPAS'],'class="form-control"','ABD_NYERILEPAS'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>LOKASI</span>
			<input class='form-control' name='ABD_NYERILEPAS_LOKASI' value='<?php echo $value['ABD_NYERILEPAS_LOKASI']; ?>' />
		</div>

		<div class="clearfix"></div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>REFFERED PAIN</span>
			<?php echo get_option_fisik('ABD_REFFEREDPAIN', $value['ABD_REFFEREDPAIN'],'class="form-control"','ABD_REFFEREDPAIN'); ?>
		</div>

		<div class="col-xs-6 col-sm-6 col-lg-6">
			<span class='form_labeling_small'>LOKASI</span>
			<input class='form-control' name='ABD_REFFEREDPAIN_LOKASI' value='<?php echo $value['ABD_REFFEREDPAIN_LOKASI']; ?>' />
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling'>MASSA</span>
			<?php echo get_option_fisik('ABD_MASSA', $value['ABD_MASSA'],'class="form-control"','ABD_MASSA'); ?>
		</div>

		<fieldset>
			<div class="col-xs-12 col-sm-6 col-lg-6">
				<span class='form_labeling_small'>BENTUK</span>
				<?php echo get_option_fisik('ABD_MASSA_BENTUK', $value['ABD_MASSA_BENTUK'],'class="form-control"','ABD_MASSA_BENTUK'); ?>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-6">
				<span class='form_labeling_small'>LOKASI</span>
				<input class='form-control' name='ABD_MASSA_LOKASI' value='<?php echo $value['ABD_MASSA_LOKASI']; ?>' />
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-6">
				<span class='form_labeling_small'>KONSITENSI</span>
				<?php echo get_option_fisik('ABD_MASSA_KONS', $value['ABD_MASSA_KONS'],'class="form-control"','ABD_MASSA_KONS'); ?>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-6">
				<span class='form_labeling_small'>UKURAN</span>
				<input class='form-control' name='ABD_MASSA_UKURAN' value='<?php echo $value['ABD_MASSA_UKURAN']; ?>' />
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-6">
				<span class='form_labeling_small'>MOBILE</span>
				<?php echo get_option_fisik('ABD_MASSA_MOBILLE', $value['ABD_MASSA_MOBILLE'],'class="form-control"','ABD_MASSA_MOBILLE'); ?>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-6">
				<span class='form_labeling_small'>NYERI</span>
				<?php echo get_option_fisik('ABD_MASSA_NYERI', $value['ABD_MASSA_NYERI'],'class="form-control"','ABD_MASSA_NYERI'); ?>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-6">
				<span class='form_labeling_small'>KULIT MERAH</span>
				<?php echo get_option_fisik('ABD_MASSA_KLTMRH', $value['ABD_MASSA_KLTMRH'],'class="form-control"','ABD_MASSA_KLTMRH'); ?>
			</div>
		</fieldset>
	</fieldset>
	
	<hr>

	<div class="col-xs-3 col-sm-3 col-lg-2">
		<span class='form_labeling'>HEPAR</span>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>PEMBESARAN</span>
			<?php echo get_option_fisik('ABD_HEPAR', $value['ABD_HEPAR'],'class="form-control"','ABD_HEPAR'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>BAC (cm)</span>
			<input class='form-control' name='ABD_HEPAR_BAC' value='<?php echo $value['ABD_HEPAR_BAC']; ?>' />
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>BPX (cm)</span>
			<input class='form-control' name='ABD_HEPAR_BPX' value='<?php echo $value['ABD_HEPAR_BPX']; ?>' />
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>TEPI</span>
			<?php echo get_option_fisik('ABD_HEPAR_TEPI', $value['ABD_HEPAR_TEPI'],'class="form-control"','ABD_HEPAR_TEPI'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>KONSITENSI</span>
			<?php echo get_option_fisik('ABD_HEPAR_KONSISTENSI', $value['ABD_HEPAR_KONSISTENSI'],'class="form-control"','ABD_HEPAR_KONSISTENSI'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>PERMUKAAN</span>
			<?php echo get_option_fisik('ABD_HEPAR_PERMUKAAN', $value['ABD_HEPAR_PERMUKAAN'],'class="form-control"','ABD_HEPAR_PERMUKAAN'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>NYERI TEKAN</span>
			<?php echo get_option_fisik('ABD__HEPAR_NYERITEKAN', $value['ABD__HEPAR_NYERITEKAN'],'class="form-control"','ABD__HEPAR_NYERITEKAN'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>BRUIT</span>
			<?php echo get_option_fisik('ABD_HEPAR_MUKA_BRUI', $value['ABD_HEPAR_MUKA_BRUI'],'class="form-control"','ABD_HEPAR_MUKA_BRUI'); ?>
		</div>
	</fieldset>

	<hr>

	<div class="col-xs-3 col-sm-3 col-lg-2">
		<span class='form_labeling'>LIEN</span>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>PEMBESARAN</span>
			<?php echo get_option_fisik('ABD_LIEN', $value['ABD_LIEN'],'class="form-control"','ABD_LIEN'); ?>
		</div>

		<fieldset>
			<div class="col-xs-12 col-sm-6 col-lg-6">
				<span class='form_labeling_small'>UKURAN</span>
				<?php echo get_option_fisik('ABD_LIEN_TERABA', $value['ABD_LIEN_TERABA'],'class="form-control"','ABD_LIEN_TERABA'); ?>
			</div>
		</fieldset>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>KONSITENSI</span>
			<?php echo get_option_fisik('ABD_LIEN_KONS', $value['ABD_LIEN_KONS'],'class="form-control"','ABD_LIEN_KONS'); ?>
		</div>

	</fieldset>

	<hr>

	<div class="col-xs-3 col-sm-3 col-lg-2">
		<span class='form_labeling'>GINJAL</span>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>BALLOTEMENT</span>
			<?php //echo get_option_fisik('ADB_GINJAL_BALLOTEMENT', $value['ADB_GINJAL_BALLOTEMENT'],'class="form-control"','ADB_GINJAL_BALLOTEMENT'); ?>
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>NYERI KETOK CVA</span>
			<?php echo get_option_fisik('ABD_GINJAL_NYERIKETOK', $value['ABD_GINJAL_NYERIKETOK'],'class="form-control"','ABD_GINJAL_NYERIKETOK'); ?>
		</div>
	</fieldset>

	<div class="col-xs-3 col-sm-3 col-lg-2">
		<span class='form_labeling'>VESIKA URINARIA</span>
	</div>

	<fieldset>
		<div class="col-xs-6 col-sm-4 col-lg-4">
			<span class='form_labeling_small'>TERABA</span>
			<?php echo get_option_fisik('ABD_VESIKAURINARIA_TERABA', $value['ABD_VESIKAURINARIA_TERABA'],'class="form-control"','ABD_VESIKAURINARIA_TERABA'); ?>
		</div>
	</fieldset>

	<input type="hidden" value="#content-data-abdomen" name="referer_">

<?php endforeach; ?>

	<div class="clearfix"></div>