<?php 

/*
|------------------------------------------------------------
| utilities helper
|------------------------------------------------------------
|
| utilities digunakan untuk membantu memberikan preset (set awal)
| pada sistem yang dibangun
|
*/
function notification_message($kode)
{
	switch ($kode) {
		case 'login_err':
			$header = 'Kombinasi Email/Kata Sandi Salah';
			$message = 'Email dan kata sandi yang Anda masukkan tidak cocok. Ingatlah bahwa kata sandi peka terhadap penggunaan huruf besar dan kecil, jadi periksalah tombol CAPS lock Anda';
			break;
		case 'login_first':
			$header = 'Permintaan Akses Login';
			$message = 'Akses anda terbatas untuk mengakses halaman ini. Silahkan login terlebih dahulu';
			break;
		case 'no_data':
			$header = '';
			$message = 'Data yang anda cari tidak / belum tersedia';
			break;
		case 'add_success':
			$header = 'Proses Input Data Berhasil';
			$message = 'Proses input data berhasil. Data sudah tersimpan kedalam basisdata';
			break;
		case 'add_err':
			$header = 'Proses Input Data Error..!!';
			$message = 'Proses input data tidak berhasil disimpan. Silahkan ulangi kembali proses yang dilakukan sebelumnya';
			break;
		case 'update_pass_success':
			$header = 'Update Password Berhasil';
			$message = 'Password yang anda punya sudah di rubah. <b>untuk alasan keamanan, anda dianjurkan Logout dan gunakan password baru anda</b>';
			break;
		default:
			$header	= '';
			$message = '';
			break;
	}

	$data  = array('header' => $header, 'message' => $message);
	return $data;
}

function preset_message($kode)
{
	$message = array(
		'no_data'                    => 'Tidak ada data<br><small>Silahkan proses dengan tombol <span class="glyphicon glyphicon-search"></span> di <b>Riwayat Kunjungan Pasien</b></small>',
		'unavailable_data'           => 'Data belum tersedia, atau tidak lengkap',
		'unavailable_data_penunjang' => 'Silahkan Pilih Rencana Pemeriksaan Penunjang, untuk melihat rincian Pemeriksaan Penunjang yang ada',
		'need_search'                => 'Data tidak tersedia',
		'add_data_btn'               => 'Tambah Data',
		'save_penunjang_data_btn'    => 'Simpan Data Baru',
		'save_data_btn'              => 'Simpan Data',
		'cancel_btn'                 => 'Batal',
		'edit_data_btn'              => 'Edit Data',
		'edit_permohonan_konsul_btn' => 'Edit Permohonan Konsul',
		'edit_jawaban_konsul_btn'    => 'Edit Jawaban Konsul',
		'add_permohonan_konsul_btn'  => 'Tambah Permohonan Konsul',
		'add_jawaban_konsul_btn'     => 'Tambah Jawaban Konsul',
		'error_loading'              => 'Maaf ada kesalahan dalam proses ambil data. Silahkan ulangi lagi proses yang dilakukan sebelumnya.',
		'same_account'               => 'Maaf, Dokter yang sama tidak dapat menjawab konsul yang diajukan',
		'undefined_key'              => '--Undefined Key--',
		'unavailable_data_need_ku'   => 'Kesan Umum belum terisi, silahkan isi <b>KESAN UMUM</b> terlebih dahulu',
		'add_image'                  => 'Tambahkan Gambar',
		'sistem_lock'                => 'Sistem Input / Output Sedang Tidak bisa dilakukan, Cobalah beberapa saat lagi.',
		'error_java_script'          => 'Sistem Informasi ini didukung dengan fasilitas Java Script. Mohon hidupkan Java Script Anda',
		'wait_order'                 => 'Menunggu Aturan Asuhan Keperawatan Rawat Jalan yang disepakati',
		'edit_data_btn_kepala'		 => 'PEMERIKSAAN KEPALA',
		'edit_data_btn_leher'		 => 'PEMERIKSAAN LEHER',
		'edit_data_btn_mammae'		 => 'PEMERIKSAAN MAMMAE',
		'edit_data_btn_thoraks'		 => 'PEMERIKSAAN THORAKS',
		'edit_data_btn_paru'		 => 'PEMERIKSAAN PARU',
		'edit_data_btn_jantung'		 => 'PEMERIKSAAN JANTUNG',
		'edit_data_btn_abdomen'		 => 'PEMERIKSAAN ABDOMEN',
		'edit_data_btn_genitalia'	 => 'PEMERIKSAAN GENITALIA',
		'edit_data_btn_ektremitas'	 => 'PEMERIKSAAN EKTREMITAS',
		'edit_data_btn_neurologis'	 => 'PEMERIKSAAN NEUROLOGIS',
	);

	$result = (array_key_exists($kode, $message)) ? $message[$kode] : '';
	return $result;
}

/*
|---------------------------------------------------------
|  Age from DOB
|---------------------------------------------------------
|
| Mencari selisih umur sekarang dalam tahun, bulan, hari
|
*/
function age_from_dob($dob)
{
	$interval = date_diff(date_create(), date_create($dob));
	return strtoupper($interval->format("%Y <sup>th</sup>, %M <sup>bln</sup>, %d <sup>hr</sup>"));
}

/*
|---------------------------------------------------------
|  Age from DOB
|---------------------------------------------------------
|
| Mencari selisih umur sekarang dalam tahun, bulan, hari
|
*/
function bmi($berat, $tinggi)
{
	@$bmi = ($berat / ($tinggi/100)) * ($tinggi/100);
	return $bmi;
}

/*
|---------------------------------------------------------
| Debuging script
|---------------------------------------------------------
|
| menampilkan isi array
|
*/
function debuging($content, $state='')
{
	echo "<pre>";
		print_r($content);
	echo "</pre>";
	
	if($state == 'die'){
		die();
	}
}

/*
|---------------------------------------------------------
| site component
|---------------------------------------------------------
|
| menampilkan keterangan situs dinamicaly
|
*/
function site_component()
{
	$ci =& get_instance();

	return array(
		'judul' => $ci->config->item("site_title"),
	 	'browser_title' => $ci->config->item('browser_title'),
	 	'footer' => $ci->config->item("footer_credit"),
	 	'author' => $ci->config->item("author"),
	 	'description' => $ci->config->item("description"),
	);
}

/*
|---------------------------------------------------------
| month name
|---------------------------------------------------------
|
*/
function month_name($mon)
{
	$month = array( 
		'1' => 'Januari', '2' => 'Februari',
	 	'3' => 'Maret', '4' => 'April',
	 	'5' => 'Mei', '6' => 'Juni',
	 	'7' => 'Juli', '8' => 'Agustus',
	 	'9' => 'September', '10' => 'Oktober',
	 	'11' => 'November', '12' => 'Desember',
	);
	return $month[$mon];
}