/*
 * ajax-load
 *-------------------------------
 * @author : AMP - RSHS2014
 *
*/

var base_url;
var no_medrec;
var timeout = 15000;

function set_base_url(baseurl)
{
	this.base_url = baseurl;
	window.base_url = baseurl;
}

function get_content(param)
{
	var option = {
		url:  this.base_url + param.url_ref,
		type : param.methode,
		timeout : this.timeout,
		dataType : param.content_type,
		data : param.send_data,

		success: function(data){
			$(param.container).empty().append(data);
			$('.span_pasien').html($('#nama_pasien').html());
			$('.span_umur').html($('#umur_pasien').html());
		},
		error: function(data){
			if(param.container_exp){
				$(param.container_exp).empty().append('<div class="empty-row empty-row-error"><strong>Kesalahan dalam proses ambil data</strong><br><small>Permasalahan bisa karena BasisData sedang padat, Tunggu beberapa waktu atau ulangi lagi proses yang dilakukan sebelumnya</small></div>');
			}else{
				$(param.container).empty().append('<div class="empty-row empty-row-error"><strong>Kesalahan dalam proses ambil data</strong><br><small>Permasalahan bisa karena BasisData sedang padat, Tunggu beberapa waktu atau ulangi lagi proses yang dilakukan sebelumnya</small></div>');
			}
		}
	}
	$.ajax(option);
}

function get_modal(id, post_string)
{
	var option = {
		url : this.base_url + 'ajax_request/ajax_modal/'+id,
		type : 'POST',
		timeout : this.timeout,
		data : post_string,
		dataType : 'html',

		success: function(data){
			$('#myModal').modal('show');
			$('.modal-content').empty().append(data);
		}
	}
	$.ajax(option);
}

function delete_record(id, post_string)
{
	var option = {
		url : this.base_url + 'sistem/'+id,
		type : 'POST',
		timeout : this.timeout,
		data : post_string,
		dataType : 'json',

		success: function(result){
			if(result.response === 1){
				var option = {
					url_ref : 'ajax_request/'+result.parent_control,
					methode : 'POST',
					content_type : 'html',
					send_data : post_string,
					container : result.referer_,
				}
				get_content(option);
			}
		}
	}
	$.ajax(option);
}

function action_modal(attribut, data, post_string)
{
	var option = {
		url : attribut.url,
		type : attribut.methods,
		timeout : this.timeout,
		data : data+ '&' +post_string,
		dataType : 'json',

		success: function(result){
			if(result.response === 1){
				var option = {
					url_ref : 'ajax_request/'+result.parent_control,
					methode : 'POST',
					content_type : 'html',
					send_data : post_string,
					container : result.referer_,
				}
				get_content(option);
				$('#myModal').modal('hide');
			}
		}
	}
	$.ajax(option);
}