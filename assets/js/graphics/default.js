var Source = '';
var title_bar;

function set_resources($param) {this.Source = $param; } 
function get_resource() {return this.Source; }
function get_data($name)
{	
	var $link;
	var $title;
	var $color = '#EEE';

	var bulan = $('#bulan').val();
	var tahun = $('#tahun').val();
	var grafik_type = $('#grap_type').val();
	
	var palete = {
		'primary' : '#ED9C28',
		'warning' : '#3276B1',
		'infos' : '#3276B1',
		'success' : '#009D3A',
		'danger' : '#FF2A2A',
		'soft_pink' : '#AA55FF',
		'black' : '#000000'
	}

	switch($name){
		case 'rawat_jalan':
			$link = 'get_rawat_jalan';
			$title = '<strong>GRAFIK RAWAT JALAN</strong>';
			$title_bar = 'Rawat Jalan';
			$color = palete.warning;
			break;

		case 'rawat_inap':
			$link = 'get_rawat_inap';
			$title = '<strong>GRAFIK RAWAT INAP</strong>';
			$title_bar = 'Rawat Inap';
			$color = palete.infos;
			break;

		case 'rawat_darurat':
			$link = 'get_rawat_darurat';
			$title = '<strong>GRAFIK RAWAT DARURAT</strong>';
			$title_bar = 'Rawat Darurat';
			$color = palete.primary;
			break;

		case 'radiologi':
			$link = 'get_radiologi';
			$title = '<strong>GRAFIK RADIOLOGI</strong>';
			$title_bar = 'Radiologi';
			$color = palete.success;
			break;

		case 'patalogi_anatomi':
			$link = 'get_patalogi_anatomi';
			$title = '<strong>GRAFIK PATALOGI ANATOMI</strong>';
			$title_bar = 'Patalogi Anatomi';
			$color = palete.danger;
			break;

		case 'rehabilitasi_medik':
			$link = 'get_rehabilitasi_medik';
			$title = '<strong>GRAFIK RAWAT DARURAT</strong>';
			$title_bar = 'Rehabilitasi Medik';
			$color = palete.soft_pink;
			break;

		case 'nuklir':
			$link = 'get_nuklir';
			$title = '<strong>GRAFIK NUKLIR</strong>';
			$title_bar = 'Nuklir';
			$color = palete.black;
			break;

		default:
			$link = 'get_rawat_jalan';
			$title = '<strong>GRAFIK RAWAT JALAN</strong>';
			$title_bar = 'Rawat Jalan';
			break;
	}

	$.ajax({
		url : this.base_url + 'graphics/' + $link + '/json/' + bulan + '/' + tahun,
		dataType : 'JSON',
		data : {},

		success: function(data){
			set_resources(data);
			$('.long-title').html($title + ' # ' + bulan + ' - ' + tahun);

			var data = get_resource();
			var isi = [];
			var $i = 0;

			$.each(data, function(){
				isi[$i] = {TGL : this.TGL, JLH : parseFloat(this.JLH)};
				$i++;
			});	

			$("#chartContainer").dxChart({
				palette: "Harmony Light",
			    dataSource: isi,
			    commonSeriesSettings: {
			    	type: grafik_type,
			        argumentField: "TGL",
					label: {
			            visible: true,
			            connector: {
			                visible: true
			            }
		        	},
			    },
			    series: [
			        { color: $color, valueField: "JLH", name: $('.long-title').html()},
			    ],
			    argumentAxis:{
			        grid:{
			            visible: true
			        }
			    },
			    tooltip:{
			        enabled: false
			    },
			    title: '',
			    legend: {
			        verticalAlignment: "bottom",
			        horizontalAlignment: "center"
			    },
			    commonPaneSettings: {
					border:{
					    visible: true,
					    right: false
					}       
				},
			});
		}
	});

}

$(document).ready(function(){

	var $i = 0;
	var data;

	$('.btn-graph').click(function(event){
		event.preventDefault();

		var $name = $(this).attr('id');
		get_data($name);
	});

	//--> loading pertama sebelum data diload <--//
	$("#chartContainer").dxChart({
		 title: 'Silahkan pilih data yang akan ditampilkan',
	});
});
