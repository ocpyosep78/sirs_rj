<?php 
	$form_control = "class='form-control'";
	$form_chosen = "class='form-control chosen'";
	$form_change = "class='form-control chosen change'";
?>

<?php foreach($query as $key => $value) : ?>

	<span class="form_labeling">NAMA OBAT</span>
	<div>
		<?php echo get_option_inastkrshs('ID_OBAT', $value['ID_INASTK'],$form_change, $cara_bayar); ?>
	</div>
	<hr>
		<div class="col-xs-4">
			<span class="form_labeling">KADAR OBAT</span>
			<input name="KADAR" id="kadar" class="form-control" placeholder="Kadar Obat" value="<?php echo $value['SEDIAAN']; ?>"/>
		</div>
		<div class="col-xs-4">
			<span class="form_labeling">SATUAN OBAT</span>
			<input name="SATUAN" id="satuan" class="form-control" placeholder="Satuan Obat" value="<?php echo $value['BENTUK']; ?>"/>
		</div>

	<div class="clearfix"></div>
	<hr>

	<span class="form_labeling">SIGNA 1</span>
	<div>
		<?php echo get_option_signa1('SIGNA1', $value['SIGNA1'],$form_chosen); ?>
	</div>
	<hr>

	<span class="form_labeling">SIGNA 2</span>
	<div>
		<?php echo get_option_signa2('SIGNA2', $value['SIGNA2'],$form_chosen); ?>
	</div>
	<hr>

	<span class="form_labeling">SIGNA 3</span>
	<div>
		<?php echo get_option_signa3('SIGNA3', $value['SIGNA3'],$form_chosen); ?>
	</div>
	<hr>

	<span class="form_labeling">JUMLAH OBAT</span>
	<div>
		<input type="text" value="<?php echo $value['JMLOBAT']; ?>" class="form-control" name="JMLOBAT">
	</div>
	<hr>

	<input type="hidden" value="<?php echo $value['ID_INASTK']; ?>" name="ID_INASTK">
	<input type="hidden" value="#content-data-obat" name="referer_">
	
<?php endforeach; ?>

<script type="text/javascript">
	$('.change').on('change', function(){
		var data = {
			url:  'sistem/get_detail_obat',
			type : 'GET',
			timeout : this.timeout,
			dataType : 'JSON',
			data : 'ID=' + $(this).val(),

			success: function(data){
				$('#kadar').val(data.kadar);
				$('#satuan').val(data.satuan);
			},
		}
		$.ajax(data);
	});
</script>