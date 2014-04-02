(function ($) { 

	$.fn.tagingPicture = function(setting){

		if( this.length == 0) return;

		var base_url = null;
		var post_string = null;
		var start_to_tag = false;
		var signal_to_tag = false;
		var parent_selector = this;
		var ajax_address_save = 'sistem/save_koordinat';
		var ajax_address_load = 'sistem/load_koordinat';
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
		
		
	}		
});