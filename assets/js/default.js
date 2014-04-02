/*
 * default.js
 *-------------------------------
 * @author : AMP - RSHS2014
 *
*/

var no_medrec;
var loading_bar = $('#loading_panel');
var post_string;

$.xhrPool = [];
$.xhrPool.abortAll = function() {
    $(this).each(function(idx, jqXHR) {
        jqXHR.abort();
    });
    $.xhrPool = [];
};

function fetch_data_main()
{
	var get_biodata = {
		url_ref : 'ajax_request/bio_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : 'nomed=' + no_medrec,
		container : '#content-data-biodata',
	}
	get_content(get_biodata);

	var get_daftar_ulang = {
		url_ref : 'ajax_request/daful_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : 'nomed=' + no_medrec,
		container : '#content-data-kunjungan',
		container_exp : '#content-data-kunjungan',
	}
	get_content(get_daftar_ulang);
	early_state();
}

function fetch_data_detail()
{
	var get_anamnesis = {
		url_ref : 'ajax_request/anam_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-anamnesis',
	}
	get_content(get_anamnesis);

	var get_khusus = {
		url_ref : 'ajax_request/khusus_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-khusus',
	}
	get_content(get_khusus);

	var get_pelayanan_poli = {
		url_ref : 'ajax_request/pelayanan_poli_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-klinik',
	}
	get_content(get_pelayanan_poli);

	var get_prosedur = {
		url_ref : 'ajax_request/prosedur_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-prosedur',
	}
	get_content(get_prosedur);

	var get_konsul = {
		url_ref : 'ajax_request/konsul_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-konsul',
	}
	get_content(get_konsul);

	var get_pengobatan_inastik = {
		url_ref : 'ajax_request/pengobatan_inastik_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-obat',
	}
	get_content(get_pengobatan_inastik);

	var get_diagnosa = {
		url_ref : 'ajax_request/diagnosa_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-diagnosis',
	}
	get_content(get_diagnosa);

	var get_fisik = {
		url_ref : 'ajax_request/fisik_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-fisik',
	}
	get_content(get_fisik);

	var get_penunjang = {
		url_ref : 'ajax_request/penunjang_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-penunjang',
	}
	get_content(get_penunjang);

	var get_asuhan_keperawatan = {
		url_ref : 'ajax_request/asuhan_keperawatan_tb_',
		methode : 'POST',
		content_type : 'html',
		send_data : post_string,
		container : '#content-data-asuhan-keperawatan',
	}
	get_content(get_asuhan_keperawatan);
	early_state();

	$('html, body').animate({
	    scrollTop: $("#panel-keterangan").offset().top - 60
	}, 1000);
}

function early_state()
{
	$(document).find('taging_overlay').remove();
}

$(document).ready(function(){
	var top = $(window).scrollTop();
	if(top > 100) $('.scroll_top').show();

	$("#medrec_search_form").submit(function(e){
		e.preventDefault();
		no_medrec = $('#input_no_modrek').val();
		
		if(no_medrec === ''){
			$('#input_no_modrek').focus();
		}else{
			fetch_data_main();
		}

		$('body').find('.gulma').remove();
		$('.span_no_medrec').html(no_medrec);
		$('.details_daful').popover('show')
	});

	$("#submit_search").click(function(){
		$("#medrec_search_form").submit();
	});

	$(".colapse_button").click(function(e){
		e.preventDefault();
		$(this).parent().siblings().slideToggle('fast');
	});

	$('#refresh_manual').click(function(e){
		e.preventDefault();
		if(post_string) fetch_data_detail();
	});

	$.ajaxSetup({
		beforeSend: function(jqXHR) {
	        $.xhrPool.push(jqXHR);
	    },
	    complete: function(jqXHR) {
	        var index = $.xhrPool.indexOf(jqXHR);
	        if (index > -1) {
	            $.xhrPool.splice(index, 1);
	        }
	    }
	});

	$(document).ajaxStart(function(){
		loading_bar.show();
			 }).ajaxStop(function(){
				loading_bar.hide();
			 }).ajaxError(function(){
				//$(".overlay").show();
				loading_bar.hide();
				$('#myModal').modal('hide');
	});

	$(document).delegate('.details_daful','click',function(e){
		e.preventDefault();
		
		data        = $(this).attr('href');
		post_string = data;

		fetch_data_detail();

		var sp   = data.split("&");
		var tgls = sp[1].split("=");
		tgls     = tgls[1];
		
		var idps = sp[2].split("=");
		idps     = idps[1];

		$('.span_tgl_kunjungan').html(tgls);
		$('.span_id_poli').html(idps);

		$('tr').removeClass('daful_active');
		$('tr').removeClass('daful_active_edit');
		$(this).parent().parent().addClass('daful_active');
	});

	$(document).delegate('.button-modal','click',function(e){
		var id   = $(this).attr('id');
		var attr = ($(this).attr('href') !== '') ? '&'+$(this).attr('href') : '';

		e.preventDefault();
		loading_bar.hide();
		get_modal(id, post_string+attr);
	});

	$(document).delegate('.button-delete','click',function(e){
		var id   = $(this).attr('id');
		var attr = ($(this).attr('href') !== '') ? '&'+$(this).attr('href') : '';

		e.preventDefault();
		loading_bar.hide();

		if(confirm('Anda yakin akan menghapus data ini ?')){
			delete_record(id, attr);
		}
	});

	$(document).delegate('.button-modal-daful','click',function(e){
		var id      = $(this).attr('id');
		var attr    = $(this).attr('href');
		post_string = attr;
		
		e.preventDefault();
		loading_bar.hide();
		get_modal(id, attr);

		$('tr').removeClass('daful_active_edit');
		$('tr').removeClass('daful_active');
		$(this).parent().parent().addClass('daful_active_edit');
	});

	$(document).delegate('.modal_save_button', 'click', function(){
		var form    = $(this).parent().parent();
		var atribut = {'url' : form.attr('action'), 'methods' : form.attr('method'), 'id' : form.attr('id'), 'class' : form.attr('class')};
		var data    = form.serialize();

		action_modal(atribut, data, post_string);
	});

	$(document).delegate('#to-top', 'click', function(e){
		e.preventDefault();
		$('html, body').animate({
		    scrollTop: $("body").offset().top
		}, 1000);
	});

	$(document).delegate('.tutup_error', 'click', function(){
		$('.overlay').toggle();
	});

	$(document).scroll(function(e){
		var top = $(window).scrollTop();

		if(top > 100){
			$('.scroll_top').show();
		}else{
			$('.scroll_top').hide();
		}
	});

	$(document).delegate('.fetch_penunjang','click',function(e){
		e.preventDefault();
		var landing_page      = $(this).attr('data-target');
		var content_penunjang = $(this).attr('data');

		var get_penunjang = {
			url_ref : 'ajax_request/penunjang_content_',
			methode : 'GET',
			content_type : 'html',
			send_data : "content="+content_penunjang+'&'+post_string,
			container :landing_page,
		}
		get_content(get_penunjang);

		$('.fetch_penunjang').removeClass('fetch_active');
		$(this).addClass('fetch_active');
	});

	$(document).delegate('.save_penunjang','click', function(e){
		e.preventDefault();
		var ini   = $(this);
		var value = $(this).attr('data');

		var save_penunjang = {
			url : 'sistem/save_penunjang',
			type : 'POST',
			datatype : 'json',
			data : $('#form_penunjang').serialize()+'&'+post_string,

			success: function(data){
				$('.fetch_penunjang.fetch_active').click();
			},
		}
		$.ajax(save_penunjang);
	});

	$(document).delegate('.delete_penunjang','click',function(e){
		e.preventDefault();
		var ini   = $(this);
		var value = $(this).attr('data');

		if(confirm("Anda yakin akan mengahapus data ini ?"))
		{
			var delete_penunjang = {
				url : 'sistem/delete_penunjang',
				type : 'POST',
				datatype : 'json',
				data : post_string + '&ID_LAY=' + $(this).attr('data'),

				success: function(data){
					if(data.query === "1"){
						$(ini).replaceWith('<input type="checkbox" name="ID_JNS_LAYANAN[]" value="'+ value +'"/>');
					}
				},
			}
			$.ajax(delete_penunjang);
		}
	});

	$(document).delegate('#filter_form','submit', function(e){
		e.preventDefault();
		var form_data = $(this).serialize();

		var get_daftar_ulang = {
			url_ref : 'ajax_request/daful_tb_',
			methode : 'POST',
			content_type : 'html',
			send_data : 'nomed=' + no_medrec + '&' + form_data,
			container : '#content-data-kunjungan',
			container_exp : '#content-data-kunjungan',
		}
		get_content(get_daftar_ulang);
		$.xhrPool.abortAll();
	});

	$(document).delegate('#refresh_filter_reload', 'click', function(e){
		e.preventDefault();

		if(no_medrec){
			fetch_data_main();
		}
	});

	$(document).delegate('.display-toggle-link', 'click', function(e){
		e.preventDefault();
		id = $(this).attr('id');
		if(id === 'shortcut'){
			$('.shortcut').show();
			$('.panel-group .list').hide();
		}else{
			$('.shortcut').hide();
			$('.panel-group .list').show();
		}
	});

	$('.accordion-toggle').click(function(){
		$('.panel-heading').removeClass('accordion-toggle-active');
		$(this).parent().toggleClass('accordion-toggle-active');
	});

	// $(window).on('beforeunload', function() {
	// 	alert('lorem');
 	// })
});