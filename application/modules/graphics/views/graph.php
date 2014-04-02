<div class='container'>
	<div class='panel panel-shadow'>
		<div class='panel-body'>
			<form class='form-horizontal' role="form" name="medrec_search_form" id="medrec_search_form">
				<div class="form-group form_group-compact">
					<div class="col-lg-12">
						<button type="button" id='rawat_darurat' class="btn btn-graph btn-warning">RAWAT DARURAT</button>
						<button type="button" id='rawat_inap' class="btn btn-graph btn-info">RAWAT INAP</button>
						<button type="button" id='rawat_jalan' class="btn btn-graph btn-primary">RAWAT JALAN</button>
						<button type="button" id='radiologi' class="btn btn-graph btn-success">RADIOLOGI</button>
						<button type="button" id='patalogi_anatomi' class="btn btn-graph btn-danger">PATALOGI ANATOMI</button>
						<button type="button" id='rehabilitasi_medik' class="btn btn-graph btn-pink">REHABILITASI MEDIK</button>
						<button type="button" id='nuklir' class="btn btn-graph btn-black">NUKLIR</button>
					</div>

					<div class='clearfix'></div>
					<hr class='dash'>

		            <div class="col-lg-12">
		            	<label class='label-lg'>PARAMETER</label>
		          		<?php
		          			$bulan = array(
			                  '01' => 'Januari',
			                  '02' => 'Februari',
			                  '03' => 'Maret',
			                  '04' => 'April',
			                  '05' => 'Mai',
			                  '06' => 'Juni',
			                  '07' => 'Juli',
			                  '08' => 'Agustus',
			                  '09' => 'September',
			                  '10' => 'Oktober',
			                  '11' => 'November',
			                  '12' => 'Desember',
			                );
							$attribut_bulan = "id='bulan' class='form-control short_option'";
							echo form_dropdown('bulan', $bulan, date('m'), $attribut_bulan);

							$options = array(
			                  '00' => '2000',
			                  '01' => '2001',
			                  '02' => '2002',
			                  '03' => '2003',
			                  '04' => '2004',
			                  '05' => '2005',
			                  '06' => '2006',
			                  '07' => '2007',
			                  '08' => '2008',
			                  '09' => '2009',
			                  '10' => '2010',
			                  '11' => '2011',
			                  '12' => '2012',
			                  '13' => '2013',
			                  '14' => '2014',
			                  '15' => '2015',
			                );
							$attribut_tahun = "id='tahun' class='form-control short_option'";
							echo form_dropdown('tahun', $options, date('y'), $attribut_tahun);
						?>
		          	</div>

		          	<div class='col-lg-12'>
		          		<label class='label-lg'>GRAFIK</label>
		          		<?php 
							$options = array(
			                  'line' => 'Line Grafik',
			                  'spline' => 'Spline Grafik',
			                  'stepline' => 'Stepline Grafik',
			                  'area' => 'Area Grafik',
			                  'splinearea' => 'SplineArea Grafik',
			                  'steparea' => 'Steparea Grafik',
			                  'bar' => 'Bar Grafik',
			                  'scatter' => 'Scatter Grafik',
			                );
							$attribut_tahun = "id='grap_type' class='form-control short_option'";
							echo form_dropdown('grap_type', $options, '', $attribut_tahun);
						?>
		          	</div>
		        </div>
		   	</form>
		</div>
	</div>
</div>

<div class='container'>
	<div class='panel panel-default panel-shadow'>
		<div class='panel-heading'>
			<div class="long-title"><h3></h3></div>
		</div><!-- /.panel-heading -->

		<div class='panel-body'>
			<div class="pane">
				<div id="chartContainer" style="width: 100%; height: 440px;"></div>
				<div class="credits"><small>© Data Terpadu RSHS</small></div>
			</div><!-- /.pane -->
		</div><!-- /.panel-body -->
	</div><!-- panel -->
</div><!-- /.container -->