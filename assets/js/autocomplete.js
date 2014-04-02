/*
 * autocomplete v1-beta
 *-------------------------------
 * @author : AMP - RSHS2014
 *
*/

$(function($){

	$.fn.autoComplete = function(setting){

		if( this.length == 0) return;

		var base_url = setting.bu;
		var ajax_address_load = 'sistem/autofeed_data';
		var parent_selector = this;
		var max_char_triger = 3;
		var post_string;
		var timeout = 8000;
		var this_id = '#'+parent_selector.attr('id');

		function inisialisasi()
		{
			$(document).find('.gulma').remove();
		}

		function load_content(){
			var data = {
				url : base_url + ajax_address_load,
				type : 'POST',
				data : {'str' : post_string},
				timeout : timeout,
				cache: false,

				success: function(html){
					if(html !== ''){
						build_layout(html);
					}else{
						inisialisasi();
					}
				},
			}
			$.ajax(data);
		}

		function build_layout(html){
			width = parent_selector.width();
			height = parent_selector.height();
			padding_top = parseInt(parent_selector.css('padding-top')) * 2;
			padding_left = parseInt(parent_selector.css('padding-left')) * 2;
			spacetolerance = parseInt('5px');

			postop = parent_selector.offset().top;
			posleft = parent_selector.offset().left;
			totaltop = postop + height + padding_top + spacetolerance;
			totalwidth = width + padding_left;

			str = '<div class="autocomplete gulma" style="position:absolute; top:'+ totaltop +'px; left:'+ posleft +'px; width:'+ totalwidth +'px">';
			str += html;
			str += '<li class=autocomplete_footer>Data yang ditampilkan hanya 15 data teratas saja, jika data tidak terdaftar masukan data pencarian yang lebih spesifik</li>';
			str += '</div>';

			btn = '<div class="autocomplete_clear gulma" style="position:absolute; top:'+ (postop+7) +'px; left:'+ (posleft+width-30) +'px; width:50px">clear</div>';

			inisialisasi();
			$('body').append(str);
			$('body').find('.autocomplete_clear').remove();
			$('body').append(btn);
		}

		function set_string($str){
			post_string = $str;
		}

		$(document).delegate(this_id, 'keyup', function(e){
			set_string(parent_selector.val());
			if(post_string.length >= max_char_triger){
				load_content();
			}else{
				inisialisasi();
			}
		});

		$(document).delegate(this_id, 'click', function(e){
			set_string(parent_selector.val());
			if(post_string.length >= max_char_triger){
				load_content();
			}else{
				inisialisasi();
			}
		});

		$(document).delegate('.autocomplete_request', 'click', function(e){
			parent_selector.val($(this).attr('id'));
			$("#medrec_search_form").submit();
		});

		$(document).delegate('.autocomplete_clear','click', function(e){
			parent_selector.val('').focus();
			inisialisasi();
		});
	}
});