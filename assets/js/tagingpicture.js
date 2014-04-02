/*
 * tagging picture v1-beta
 *-------------------------------
 * @author : AMP - RSHS2014
 *
 * masih singletag, tapi sudah menghindari bubble sewaktu 
 * load di dinamik page (e.stopPropagation(); e.stopImmediatePropagation();)
 * walau sebenarnya delegate, live tidak mendukungnya
 *
*/

$(function($) { 

	$.fn.tagingPicture = function(setting){

		if( this.length == 0) return;

		var base_url = null;
		var post_string = null;
		var start_to_taging  = false;
		var signal_to_taging = false;
		var parent_selector = this;
		var ajax_address_save = 'sistem/save_koordinat';
		var ajax_address_load = 'sistem/load_koordinat';
		var ajax_result = null;
		var comment_string = null;
		var koordinat = {
			target_posisi_top : null,
			target_posisi_left : null,
			target_ukuran_height : null,
			target_ukuran_width : null,
			induk_posisi_top : parseFloat(parent_selector.position().top),
			induk_posisi_left : parseFloat(parent_selector.position().left),
			induk_ukuran_height : parseFloat(parent_selector.height()),
			induk_ukuran_width : parseFloat(parent_selector.width()),
		}
		var persentase_top = null;
		var persentase_left = null;
		var toleransi_akurat = {
			t_top : -2.2,
			t_left : -2.2,
		}
		var toleransi_tag_pointer = {
			t_top : -10,
			t_left : -10,
		}

		function set_post_string($post_string){
			post_string = $post_string;
		}

		function set_base_url($base_url){
			base_url = $base_url;
		}

		function set_koordinat($top, $left){
			persentase_top = $top;
			persentase_left = $left;
		}

		function unset_koordinat($top, $left){
			persentase_top = null;
			persentase_left = null;
		}

		function inisialisasi(){
			var pushHtml;
			pushHtml = "<button class='btn btn-link click_to_tag'><span class='glyphicon glyphicon-tag'></span> Mulai tag Posisi Sakit Pasien</button> <sup>&copy;versi 1.0 - beta</sup>";
			parent_selector.after(pushHtml);
			load_element();
		}

		function taging_modal(){
			var pushHtml;
			pushHtml = '<div class="taging_overlay">';
			pushHtml += '<div id="tag_target" style="height:400px; width:300px; margin:0px auto">';
			pushHtml += '<img id="gambar-target" src="'+ parent_selector.attr('src') +'" style="width:100%" />';
			pushHtml += "</div>";
			pushHtml += '<br/>';
			pushHtml += '<a href="javascript:void(0)" class="btn btn-link done_taging">';
			pushHtml += '<span class="glyphicon glyphicon-ok"></span> Selesai Proses Taging / Keluar Tampilan Ini</a>';
			pushHtml += '</div>';

			$('body').append(pushHtml);
			toogle_cursor();

			koordinat.target_posisi_top = parseFloat($('#tag_target').position().top);
			koordinat.target_posisi_left = parseFloat($('#tag_target').offset().left);
			koordinat.target_ukuran_height = parseFloat($('#tag_target').height());
			koordinat.target_ukuran_width = parseFloat($('#tag_target').width());
		}

		function save_element(){
			var save = {
				url : base_url + ajax_address_save,
				type : "POST",
				dataType : 'JSON',
				data : {'l': persentase_left, 
						't': persentase_top, 
						'str': comment_string,
						'ps' : post_string,
				},

				success: function(data){
					if(data.response == 1){
						load_element();
					}
				}
			}
			$.ajax(save);
		}

		function load_element(){

			$('.tag_gambar').find('.dot_taging').remove();

			var load = {
				url : base_url + ajax_address_load,
				type : 'POST',
				dataType : 'JSON',
				data : {'ps' : post_string},

				success: function(data){
					$.each(data, function(){
						console.log(parent_selector);
						$('body').find('.img_anatomi').after(create_dot_tag( (parseFloat(this.left_pa) + toleransi_akurat.t_left), ( parseFloat(this.top_pa) + toleransi_akurat.t_top), this.string));
						//parent_selector.after(create_dot_tag( (parseFloat(this.left_pa) + toleransi_akurat.t_left), ( parseFloat(this.top_pa) + toleransi_akurat.t_top), this.string));
						signal_taging = false;
						toogle_cursor();
						unset_koordinat();
						$('#dot_input_ok').remove();
					});
				}
			}
			$.ajax(load);
		}

		function create_input_element($left, $top){
			string = '<div class="dot_taging" style="left:'+ ($left + toleransi_tag_pointer.t_left) +'px; top:'+ ($top + toleransi_tag_pointer.t_top) +'px">';
			string += '<div class="dot_input">';
			string += '<textarea class="comm" name="comm" placeholder="Masukan keterangan (jika ada)" autofocus></textarea><br>';
			string += '<button id="dot_input_ok">Simpan</button><button id="dot_input_cancel">X Tutup</button></div></div>';
			return string;
		}

		function create_dot_tag($left, $top, $comment)
		{
			var string;
			string = '<div class="dot_taging" style="position:absolute; left:'+ $left +'%; top:'+ $top +'%">';
			string += ($comment !== '') ? '<div class="dot_input">'+ $comment +'</div>' : '';
			return string;
		}

		function toogle_cursor()
		{
			if(signal_taging == true){
				$('#tag_target').css({'cursor' : 'crosshair'});
			}else{
				$('#tag_target').css({'cursor' : 'context-menu'});
			}
		}

		$(document).delegate('.click_to_tag', 'click', function(e){
			e.stopPropagation();
			e.stopImmediatePropagation();
			startTaging = true;
			signal_taging = true;
			taging_modal();
			return false;
		});

		$(document).delegate('.done_taging','click', function(e){
			e.preventDefault();
			startTaging = true;
			signal_taging = true;
			$('.taging_overlay').remove();
			return false;
		});

		$(document).delegate('#dot_input_cancel','click', function(e){
			e.preventDefault();
			if($(this).parent().parent().remove()){
				signal_taging = true;
				toogle_cursor();
				unset_koordinat();
			}
		});

		$(document).delegate('#dot_input_ok','click', function(e){
			e.stopPropagation();
			e.stopImmediatePropagation();
			e.preventDefault();
			comment_string = $('.comm').val();
			save_element();
			return false;
		});

		$(document).delegate('#tag_target','click', function(e){
			if(startTaging === true && signal_taging === true)
			{
				signal_taging = false;
				var $left = parseFloat(e.clientX);
				var $top  = parseFloat(e.clientY);
				$(this).after(create_input_element($left, $top));
				$('.comm').focus();

				var katop            = $top - koordinat.target_posisi_top;
				var kaleft           = $left - koordinat.target_posisi_left;
				var $persentasi_left = (kaleft / koordinat.target_ukuran_width) * 100;
				var $persentasi_top  = (katop / koordinat.target_ukuran_height) * 100;
				set_koordinat( Math.abs($persentasi_top) , Math.abs($persentasi_left) );
				toogle_cursor();
			}
		});

		set_post_string(setting.ps);
		set_base_url(setting.bu);
		inisialisasi();
	}
});