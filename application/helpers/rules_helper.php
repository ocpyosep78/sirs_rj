<?php

/*
|------------------------------------------------------------
| Rule Section
|------------------------------------------------------------
|
| Rule yang digunakan di sistem, untuk menggantikan fungsi
| decode pada oracle
|
*/
function jenis_kelamin()
{
	$jenis_kelamin = array(
			'L' => 'LAKI-LAKI',
			'P' => 'PEREMPUAN'
		);
	return $jenis_kelamin;
}

function status_pernikahan()
{
	$status_pernikahan = array(
			'K'  => 'KAWIN',
			'TK' => 'TIDAK KAWIN',
			'C'  => 'CERAI',
			'J'  => 'JANDA',
			'D'  => 'DUDA' 
		);
	return $status_pernikahan;
}

function sumber_anamnesis()
{
	$sumber_anamnesis = array(
			'0' => 'YANG BERSANGKUTAN (ORANG SAKIT)',
			'1' => 'AYAH',
			'2' => 'IBU',
			'3' => 'SUAMI',
			'4' => 'ISTRI',
			'5' => 'LAIN-LAIN',
		);
	return $sumber_anamnesis;
}

function prekondisi()
{
	$prekondisi = array(
		      '-'  => 'MENINGGAL SEBELUM DIRAWAT',
		      '+'  => 'MENINGGAL SETELAH DIRAWAT',
		      '0' => 'TIDAK KEDUANYA',
	    );
	return  $prekondisi;
}

/*
|------------------------------------------------------------
| Rule Section Fisik Pasien
|------------------------------------------------------------
|
| decode dari bagian fisik pasien : kepala, mammae, paru-paru, 
| abdomen, ektremitas, leher, thoraks, jantung, genitalia, neurologis
|
*/

function ku()
{
	$option = array(
			'berat'  => 'BERAT',
			'sedang' => 'SEDANG',
			'sakit'  => 'SAKIT',
		);
	return $option;
}

function kesan_gizi()
{
	$option = array(
			'baik'  => 'BAIK',
			'buruk' => 'BURUK',
			);
	return $option;
}

function skala_kenyerian()
{
	$option = array(
			'0'  => '0',
			'1'  => '1',
			'2'  => '2',
			'3'  => '3',
			'4'  => '4',
			'5'  => '5',
			'6'  => '6',
			'7'  => '7',
			'8'  => '8',
			'9'  => '9',
			'10' => '10',
		);
	return $option;
}

function kesadaran()
{
	$option = array(
			'Sopor Comatus' => 'SOPOR COMATUS',
			'Comatus'       => 'COMATUS',
			'Delirium'      => 'DELIRIUM',
			'Sopor'         => 'SOPOR',
			'Somnolen'      => 'SOMNOLEN',
			'Composmentis'  => 'COMPOSMENTIS',
 		);
	return $option;
}

function kepala()
{
	$option = array(
			'0' => 'ASIMETRIS',
			'1' => 'SIMETRIS',
		);
	return $option;
}

function mata_sklera()
{
	$option = array(
			'0' => 'IKTERIK',
			'1' => 'TIDAK IKTERIK',
		);
	return $option;
}

function mata_konjungtiva()
{
	$option = array(
			'0' => 'ANEMSIS',
			'1' => 'TIDAK ANEMSIS',
		);
	return $option;
}

function telinga_pendengaran()
{
	$option = array(
			'0' => 'NORMAL',
			'1' => 'TIDAK NORMAL',
		);
	return $option;
}

function telinga_cae()
{
	$option = array(
			'0' => 'TENANG',
			'1' => 'TIDAK TENANG',
		);
	return $option;
}

function membrantympani_intak()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function telinga_sekret()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function hidung_pch()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function hidung_sekret()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function hidung_concha()
{
	$option = array(
			'0' => 'EUTROFI',
			'1' => 'HIPERTROFI',
		);
	return $option;
}

function hidung_septumdeviasi()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function Tenggorokan_tonsil()
{
	$option = array(
			'0' => 'MEMBESAR',
			'1' => 'TIDAK MEMBERSAR',
		);
	return $option;
}

function tonsil_membesar()
{
	$option = array(
			'0' => 'T1',
			'1' => 'T2',
			'2' => 'T3',
		);
	return $option;
}

function tenggorokan_faring()
{
	$option = array(
			'0' => 'HIPEREMIS',
			'1' => 'TTDAK HIPEREMIS',
		);
	return $option;
}

function lidah()
{
	$option = array(
			'0' => 'SIMETRIS',
			'1' => 'ASIMETRIS',
		);
	return $option;
}

function bibir()
{
	$option = array(
			'0' => 'SIANOSIS',
			'1' => 'TIDAK SIANOSIS',
		);
	return $option;
}

function lhr_jvp()
{
	$option = array(
			'0' => 'NORMAL',
			'1' => 'MENINGKAT',
		);
	return $option;	
}

function lhr_jvp_ukuran()
{
	$option = array(
			'0' => '1 cm',
			'1' => '2 cm',
			'2' => '3 cm',
			'3' => 'PENUH',
		);
	return $option;	
}

function lhr_trachea()
{
	$option = array(
			'0' => 'DEVIASI',
			'1' => 'TIDAK DEVIASI',
		);
	return $option;	
}

function lhr_trachea_dev()
{
	$option = array(
			'0' => 'TERDORONG KE KANAN',
			'1' => 'TERDORONG KE KANAN',
		);
	return $option;	
}

function lhr_kgb()
{
	$option = array(
			'0' => 'TERABA',
			'1' => 'TIDAK TERABA',
		);
	return $option;
}

function lhr_kgb_lokasi()
{
	$option = array(
			'0' => 'PREAURIKULARIS',
			'1' => 'POSTAURIKULARIS',
			'2' => 'SUBMAKSILARIS',
			'3' => 'SERVIKALIS',
			'4' => 'SUPRAAURIKULARIS',
		);
	return $option;
}

function lhr_kgb_banyak()
{
	$option = array(
			'0' => 'SOLITER',
			'1' => 'MULTIPLE',
			'2' => 'PACKED',
		);
	return $option;
}

function lhr_kgb_ukuran()
{
	$option = array(
			'0' => '1 cm',
			'1' => '2 cm',
			'2' => '> 3 cm',
		);
	return $option;
}

function lhr_kgb_kons()
{
	$option = array(
			'0' => 'KENYAL LUNAK',
			'1' => 'KENYAL KERAS',
			'2' => 'KISTIK',
		);
	return $option;
}

function lhr_kgb_mobille()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function lhr_kgb_nyeritekan()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function lhr_kgb_kltmrh()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function lhr_kel_tiroid()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function lhr_tiroid()
{
	$option = array(
			'0' => 'NODUL',
			'1' => 'DIFFUSE',
		);
	return $option;
}

function lhr_tiroid_kons()
{
	$option = array(
			'0' => 'KENYAL LUNAK',
			'1' => 'KENYAL KERAS',
			'2' => 'KISTIK',
		);
	return $option;
}

function lhr_tiroid_brui()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function mammae_klt_merah()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function mammae_klt_orange()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function mammae_massa()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function mammae_massa_bentuk()
{
	$option = array(
			'0' => 'SOLITER',
			'1' => 'MULTIPLE',
			'2' => 'PACKED',
		);
	return $option;
}

function mammae_massa_lokasi_knn()
{
	$option = array(
			'0' => 'LATERAL SUPERIOR',
			'1' => 'LATERAL INFERIOR',
			'2' => 'MEDIAL SUPERIOR',
			'3' => 'MEDIAL INFERIOR',
		);
	return $option;
}

function mammae_massa_lokasi_kiri()
{
	$option = array(
			'0' => 'LATERAL SUPERIOR',
			'1' => 'LATERAL INFERIOR',
			'2' => 'MEDIAL SUPERIOR',
			'3' => 'MEDIAL INFERIOR',
		);
	return $option;
}

function mammae_massa_kons()
{
	$option = array(
			'0' => 'KENYAL LUNAK',
			'1' => 'KENYAL KERAS',
			'2' => 'KISTIK',
		);
	return $option;
}

function mammae_massa_mobile()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function mammae_massa_nyeri()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function mammae_papilla_retraksi()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function dada_btk()
{
	$option = array(
			'0' => 'SIMETRIS',
			'1' => 'ASIMETRIS',
		);
	return $option;
}

function dada_btk_lokasi()
{
	$option = array(
			'0' => 'KANAN > LEBIH CEMBUNG DARI KIRI',
			'1' => 'KIRI > LEBIH CEMBUNG DARI KANAN',
		);
	return $option;
}

function dada_grk()
{
	$option = array(
			'0' => 'KANAN TERTINGGAL',
			'1' => 'KIRI TERTINGGAL',
		);
	return $option;
}

function DADA_MSP()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function dada_massa_bentuk()
{
	$option = array(
			'0' => 'SOLITER',
			'1' => 'MULTIPLE',
			'2' => 'PACKED',
		);
	return $option;
}

function dada_massa_kons()
{
	$option = array(
			'0' => 'KENYAL LUNAK',
			'1' => 'KENYAL KERAS',
			'2' => 'KISTIK',
		);
	return $option;
}

function dada_massa_mobille()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function dada_massa_nyeri()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function dada_massa_kltmrh()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function batas_paru_hati()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function btsparuhati_ics()
{
	$option = array(
			'0' => 'ICS IV',
			'1' => 'ICS V',
			'2' => 'ICS VI',
		);
	return $option;
}

function btsparuhati_peranjakan()
{
	$option = array(
			'0' => 'ICS IV',
			'1' => 'ICS V',
			'2' => 'ICS VI',
		);
	return $option;
}

function paru_vokalfremitus()
{
	$option = array(
			'0' => 'PEKAK',
			'1' => 'DULL',
			'2' => 'NORMAL',
		);
	return $option;
}

function paru_vokalfremitus_ket()
{
	$option = array(
			'0' => 'ICS II',
			'1' => 'ICS III',
			'2' => 'ICS IV',
			'3' => 'ICS V',
		);
	return $option;
}

function paru_vokalresonans()
{
	$option = array(
			'0' => 'PEKAK',
			'1' => 'DULL',
			'2' => 'NORMAL',
		);
	return $option;
}

function paru_vokalresonans_ket()
{
	$option = array(
			'0' => 'ICS II',
			'1' => 'ICS III',
			'2' => 'ICS IV',
			'3' => 'ICS V',
		);
	return $option;
}

function paru_suara()
{
	$option = array(
			'0' => 'VESIKULER',
			'1' => 'SUB BRONKHIAL',
			'2' => 'BRONKHIAL',
		);
	return $option;
}

function paru_suaranafas()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function paru_ronki()
{
	$option = array(
			'0' => 'RONKHI',
			'1' => 'WHEEZING',
		);
	return $option;
}

function paru_ronki_ket()
{
	$option = array(
			'0' => 'BASAH SEDANG NYARING',
			'1' => 'KASAR',
			'2' => 'BASAH TIDAK NYARING',
		);
	return $option;
}

function jantung_ictcrds()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function jantung_ictcrds_plus()
{
	$option = array(
			'0' => 'KUAT ANGKAT',
			'1' => 'KUAT ANGKAT',
		);
	return $option;
}

function jantung_ukuran()
{
	$option = array(
			'0' => 'NORMAL',
			'1' => 'MEMBERSAR',
		);
	return $option;
}

function jantung_batas_atas()
{
	$option = array(
			'0' => 'ICS I',
			'1' => 'ICS II',
			'2' => 'ICS III',
		);
	return $option;
}

function jantung_batas_kanan()
{
	$option = array(
			'0' => 'LMCS',
			'1' => 'LSD',
			'2' => '1 CM LAT LMCS',
			'3' => '2 CM LAT LMCS',
		);
	return $option;
}

function jantung_batas_kiri()
{
	$option = array(
			'0' => 'LMCS',
			'1' => 'LSD',
			'2' => '1 CM LAT LMCS',
			'3' => '2 CM LAT LMCS',
		);
	return $option;
}

function jantung_mitral()
{
	$option = array(
			'0' => 'M1 > M2',
			'1' => 'M1 < M2',
		);
	return $option;
}

function jantung_mitral_sistolik()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function jantung_misis_grade()
{
	$option = array(
			'0' => 'I',
			'1' => 'II',
			'2' => 'III',
			'3' => 'IV',
			'4' => 'V',
			'5' => 'VI',
		);
	return $option;
}

function jantung_misis_ket()
{
	$option = array(
			'0' => 'PAN',
			'1' => 'HOLO',
		);
	return $option;
}

function jantung_misis_menjalar()
{
	$option = array(
			'0' => 'AXILLA',
			'1' => 'DISTAL',
			'2' => 'PROKSIMAL',
			'3' => 'LATERAL',
			'4' => 'MEDIAL',
		);
	return $option;
}


function jantung_mitral_diastolik()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function jantung_midias_grade()
{
	$option = array(
			'0' => 'I',
			'1' => 'II',
			'2' => 'III',
			'3' => 'IV',
		);
	return $option;
}

function jantung_midias_ket()
{
	$option = array(
			'0' => 'MID',
			'1' => 'EARLY',
			'2' => 'LATE',
		);
	return $option;
}

function jantung_pulmonal()
{
	$option = array(
			'0' => 'P1 > P2',
			'1' => 'P1 < P2',
		);
	return $option;
}

function jantung_pulmonal_sistolik()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function jantung_pulsis_grade()
{
	$option = array(
			'0' => 'I',
			'1' => 'II',
			'2' => 'III',
			'3' => 'IV',
			'4' => 'V',
			'5' => 'VI',
		);
	return $option;
}

function jantung_pulsis_ket()
{
	$option = array(
			'0' => 'PAN',
			'1' => 'HOLO',
		);
	return $option;
}

function jantung_pulsis_menjalar()
{
	$option = array(
			'0' => 'AXILLA',
			'1' => 'DISTAL',
			'2' => 'PROKSIMAL',
		);
	return $option;
}

function jantung_pulmonal_dias()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function jantung_puldias_grade()
{
	$option = array(
			'0' => 'I',
			'1' => 'II',
			'2' => 'III',
			'3' => 'IV',
		);
	return $option;
}

function jantung_puldias_ket()
{
	$option = array(
			'0' => 'MID',
			'1' => 'EARLY',
			'2' => 'LATE',
		);
	return $option;
}

function jantung_trikuspid()
{
	$option = array(
			'0' => 'P1 > P2',
			'1' => 'P1 < P2',
		);
	return $option;
}

function jantung_trikuspid_sistolik()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function jantung_trisis_grade()
{
	$option = array(
			'0' => 'I',
			'1' => 'II',
			'2' => 'III',
			'3' => 'IV',
			'4' => 'V',
			'5' => 'VI',
		);
	return $option;
}

function jantung_trisis_ket()
{
	$option = array(
			'0' => 'PAN',
			'1' => 'HOLO',
		);
	return $option;
}

function jantung_trisis_menjalar()
{
	$option = array(
			'0' => 'AXILLA',
			'1' => 'DISTAL',
			'2' => 'PROKSIMAL',
		);
	return $option;
}

function jantung_trikuspid_diastolik()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function jantung_tridias_grade()
{
	$option = array(
			'0' => 'I',
			'1' => 'II',
			'2' => 'III',
			'3' => 'IV',
		);
	return $option;
}

function jantung_tridias_ket()
{
	$option = array(
			'0' => 'MID',
			'1' => 'EARLY',
			'2' => 'LATE',
		);
	return $option;
}

function jantung_aorta()
{
	$option = array(
			'0' => 'P1 > P2',
			'1' => 'P1 < P2',
		);
	return $option;
}

function jantung_aorta_sistolik()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function jantung_aorsis_grade()
{
	$option = array(
			'0' => 'I',
			'1' => 'II',
			'2' => 'III',
			'3' => 'IV',
			'4' => 'V',
			'5' => 'VI',
		);
	return $option;
}

function jantung_aorsis_ket()
{
	$option = array(
			'0' => 'PAN',
			'1' => 'HOLO',
		);
	return $option;
}

function jantung_aorsis_menjalar()
{
	$option = array(
			'0' => 'AXILLA',
			'1' => 'DISTAL',
			'2' => 'PROKSIMAL',
		);
	return $option;
}

function jantung_aorta_diastolik()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function jantung_aordias_grade()
{
	$option = array(
			'0' => 'I',
			'1' => 'II',
			'2' => 'III',
			'3' => 'IV',
		);
	return $option;
}

function jantung_aordias_ket()
{
	$option = array(
			'0' => 'MID',
			'1' => 'EARLY',
			'2' => 'LATE',
		);
	return $option;
}

function jantung_lokasilain_bising()
{
	$option = array(
			'0' => 'MENJALAR',
			'1' => 'TIDAK MENJALAR',

		);
	return $option;
}

function jantung_bising_ket()
{
	$option = array(
			'0' => 'SISTOLE',
			'1' => 'DIASTOLE',

		);
	return $option;
}

function abdomen()
{
	$option = array(
			'0' => 'CEMBUNG',
			'1' => 'DATAR',
			'2' => 'CEKUNG',
		);
	return $option;
}

function abd_konsistensi()
{
	$option = array(
			'0' => 'LEMBUT',
			'1' => 'TEGANG',
		);
	return $option;
}

function abd_lainlain()
{
	$option = array(
			'0' => 'DARM CONTOUR',
			'1' => 'DARM STEIFUNG',
			'2' => 'PAPAN CATUR',
			'3' => 'DEFENSE MUSCULAR',
		);
	return $option;
}

function abd_nyeri_tekan()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_nyerilepas()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_refferedpain()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_massa()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_massa_bentuk()
{
	$option = array(
			'0' => 'SOLITER',
			'1' => 'MULTIPLE',
			'2' => 'PACKED',
		);
	return $option;
}

function abd_massa_kons()
{
	$option = array(
			'0' => 'KENYAL LUNAK',
			'1' => 'KENYAL KERAS',
			'2' => 'KISTIK',
		);
	return $option;
}

function abd_massa_mobille()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_massa_nyeri()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_massa_kltmrh()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_hepar()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_hepar_tepi()
{
	$option = array(
			'0' => 'TUMPUL',
			'1' => 'TAJAM',

		);
	return $option;
}

function abd_hepar_konsistensi()
{
	$option = array(
			'0' => 'KENYAL LUNAK',
			'1' => 'KENYAL KERAS',

		);
	return $option;
}

function abd_hepar_permukaan()
{
	$option = array(
			'0' => 'RATA',
			'1' => 'TIDAK RATA',

		);
	return $option;
}

function abd__hepar_nyeritekan()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_hepar_muka_brui()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_lien()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_lien_teraba()
{
	$option = array(
			'0' => 'SI',
			'1' => 'SII',
			'2' => 'SIII',
			'3' => 'SIV',
			'4' => 'SV',
			'5' => 'SVI',
			'6' => 'SVII',
			'7' => 'SVIII',
		);
	return $option;
}

function abd_lien_kons()
{
	$option = array(
			'0' => 'LUNAK',
			'1' => 'KERAS',

		);
	return $option;
}

function adb_ginjal_ballotement()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_ginjal_nyeriketok()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function abd_vesikaurinaria_teraba()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function genitalia_ulcer()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function genitalia_hidrocel()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function genitalia_hernia()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function genitalia_hemorroid()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function ekstremitas_clubbing()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function ekstremitas_tremor()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function extremitas_bwh_idema()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function ekstremitas_varices()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function ekstremitas_fraktur()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function ekstremitas_fraktur_ket()
{
	$option = array(
			'0' => 'TERBUKA',
			'1' => 'TERTUTUP',
		);
	return $option;
}

function neurologis_clubbing()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK'
		);
	return $option;
}

function neurologis_tremor()
{
	$option = array(
			'+' => 'YA',
			'-' => 'TIDAK',
		);
	return $option;
}

function refleks_kpr()
{
	$option = array(
			'0' => 'NORMAL',
			'1' => 'MENINGGI',
			'2' => 'MENURUN',
		);
	return $option;
}

function refleks_apr()
{
	$option = array(
			'0' => 'NORMAL',
			'1' => 'MENINGGI',
			'2' => 'MENURUN',
		);
	return $option;
}

function refleks_biceps()
{
	$option = array(
			'0' => 'NORMAL',
			'1' => 'MENINGGI',
			'2' => 'MENURUN',
		);
	return $option;
}

/*
|------------------------------------------------------------
| Rule Psikososial asuhan keperawatan
|------------------------------------------------------------
|
*/

function pendidikan()
{
	$option = array(
			'TIDAK SEKOLAH' => 'TIDAK SEKOLAH',
			'SD' => 'SD',
			'SMP' => 'SMP',
			'SMU' => 'SMU',
			'PERGURUAN TINGGI' => 'PERGURUAN TINGGI',
		);
	return $option;
}

function status_tinggal()
{
	$option = array(
			'0' => 'SENDIRI',
			'1' => 'ORANG TUA',
		);
	return $option;
}

function kebiasaan()
{
	$option = array(
			'KEBIASAAN1' => 'MEROKOK',
			'KEBIASAAN2' => 'ALKOHOL',
		);
	return $option;
}

function bahasa()
{
	$option = array(
			'BAHASA1' => 'INDONESIA',
			'BAHASA2' => 'DAERAH',
			'BAHASA3' => 'ASING',
		);
	return $option;
}

function bicara()
{
	$option = array(
			'0' => 'TIDAK',
			'1' => 'YA',
		);
	return $option;
}

function penterjemah()
{
	$option = array(
			'0' => 'TIDAK',
			'1' => 'YA',
		);
	return $option;
}

function bahasa_isyarat()
{
	$option = array(
			'0' => 'TIDAK',
			'1' => 'YA',
		);
	return $option;
}

function hambatan_bljr()
{
	$option = array(
			'0' => 'TIDAK',
			'1' => 'YA',
		);
	return $option;
}

function ext_hambaran_bljr()
{
	$option = array(
			'HAMBATAN_BLJR1' => 'PENDENGARAN',
			'HAMBATAN_BLJR2' => 'EMOSI',
			'HAMBATAN_BLJR3' => 'HILANG MEMORI',
			'HAMBATAN_BLJR4' => 'KESULITAN BICARA',
			'HAMBATAN_BLJR5' => 'MOTIVASI BURUK',
			'HAMBATAN_BLJR6' => 'TIDAK ADA MOTIVASI DARI CAREGIVER',
			'HAMBATAN_BLJR7' => 'MASALAH PENGLIHATAN',
			'HAMBATAN_BLJR8' => 'SECARA FISIOLOGI TIDAK MAMPU BELAJAR',
		);
	return $option;
}

function ext_cara_bljr()
{
	$option = array(
			'CARA_BLJR1' => 'AUDIO - VISUAL / GAMBAR',
			'CARA_BLJR2' => 'DISKUSI',
			'CARA_BLJR3' => 'MEMBACA',
			'CARA_BLJR4' => 'MENDENGAR',
			'CARA_BLJR5' => 'DEMONSTRASI',
		);
	return $option;
}

function ext_keb_pembelajaran()
{
	$option = array(
			'KEB_PEMBELAJARAN1' => 'PROSES PENYAKIT',
			'KEB_PEMBELAJARAN2' => 'PENGOBATAN / TINDAKAN',
			'KEB_PEMBELAJARAN3' => 'NUTRISI',
			'KEB_PEMBELAJARAN4' => 'LAIN-LAIN',
		);
	return $option;
}

/*
|---------------------------------------------------------------------
| build option & latin & checkbox rule psikososial asuhan keperawatan
|---------------------------------------------------------------------
|
*/
function get_option($name, $select, $attribut, $function)
{
	$option = array('' => '----');
	$option = array_merge($option, $function());
	return form_dropdown($name, $option, $select, $attribut);
}

function get_latin($sumber, $function)
{
	$option = $function();
	return strtoupper($result = (array_key_exists($sumber, $option)) ? $option[$sumber] : '');
}

function get_checkbox($name, $check = '', $attribut, $function, $disabled = '')
{
	$option = $function();
	$result = (array_key_exists($name, $option)) ? $option[$name] : '';
	$checked = ($check == 'Y') ? "checked" : "";

	return form_checkbox($name, 'Y', $checked).' '.$result;
}

/*
|------------------------------------------------------------
| build option & latin dari fisik rule
|------------------------------------------------------------
|
*/
function get_option_fisik($name,$select,$attribut,$function)
{
	$option = array('' => '----');
	$option = array_merge($option, $function());
	return form_dropdown($name, $option, $select, $attribut);
}

function get_latin_fisik($sumber, $function)
{
	$option = $function();
	return strtoupper($result = (array_key_exists($sumber, $option)) ? $option[$sumber] : '');
}

/*
|------------------------------------------------------------
| general rule
|------------------------------------------------------------
|
*/
function get_option_sumber($name,$select,$attribut)
{
	$option = sumber_anamnesis();
	return form_dropdown($name, $option, $select, $attribut);
}

function get_option_prekondisi($name,$select,$attribut)
{
	$option = prekondisi();
	return form_dropdown($name, $option, $select, $attribut);
}

function get_option_tindak_lanjut($name,$select,$attribut)
{
	$option = array(
			'PULANG'         => "PULANG",
			'DIRUJUK INTERN' => 'DIRUJUK INTERNAL',
			'DIRUJUK EXTERN' => 'DIRUJUK EXTERNAL',
			'DIRAWAT'        => 'DIRAWAT',
			'DIRUJUK BALIK'  => 'DIRUJUK BALIK',
			'BELUM DATANG'   => 'BELUM DATANG',
			'TIDAK DATANG'   => 'TIDAK DATANG',
		);

	return form_dropdown($name, $option, $select, $attribut);
}

function get_option_klasifikasi($name,$select,$attribut)
{
	$option = array(
			'UTAMA'    => 'UTAMA',
			'TAMBAHAN' => 'TAMBAHAN',
        );

	return form_dropdown($name, $option, $select, $attribut);
}

function get_option_jenis_kunjungan($name,$select,$attribut)
{
	$option = array(
			'LAMA' => 'LAMA',
			'BARU' => 'BARU',
        );

	return form_dropdown($name, $option, $select, $attribut);
}

function get_grup_obat($grup)
{
	$option = array(
			'ASKES'          => 'askes',
			'I/S/A ASKES'    => 'askes',
			'ASKES KARYAWAN' => 'askes',
			'UMUM'           => 'reguler',
			'KONTRAKTOR'     => 'reguler',
			'TIDAK MAMPU'    => 'reguler',
			'BEBAS'          => 'reguler',
			'ASKES SWASTA'   => 'reguler',
			'YAYASAN'        => 'reguler'
		);

	$grup = (array_key_exists($grup, $option)) ? $option[$grup] : '';
	return $grup;
}

/*
|---------------------------------------------------------
|  Dinamis dari database 
|---------------------------------------------------------
|
| file model 	: addon_model 
| lokasi		: /models/addon_model.php
|
*/
function get_option_poliklinik($name,$select,$attribut)
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_poliklinik();
	foreach($query as $key => $value)
	{
		$option['option'][$value['ID_POLI']] = strtoupper($value['NM_POLI']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}

function get_option_poliklinik_rujukan($name,$select,$attribut)
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_poliklinik();

	$option['option'][''] = '--';
	foreach($query as $key => $value)
	{
		$option['option'][$value['ID_POLI']] = strtoupper($value['NM_POLI']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}

function get_option_drg($name,$select,$attribut)
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_drg();
	foreach($query as $key => $value)
	{
		$option['option'][$value['ID_DRG']] = strtoupper($value['NM_DRG']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}

function get_option_dokter($name,$select,$attribut)
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_dokter();
	foreach($query as $key => $value)
	{
		$option['option'][$value['ID_DOKTER']] = strtoupper($value['NM_DOKTER']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}

function get_option_icd9cm($name,$select,$attribut)
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_icd9cm();
	foreach($query as $key => $value)
	{
		$option['option'][$value['ID'].'-'.$value['ID_TIND']] = $value['ID_TIND'].' : '.strtoupper($value['NM_TINDAKAN']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}

function get_option_icd1($name,$select,$attribut)
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_icd1();
	foreach($query as $key => $value)
	{
		$option['option'][$value['ID_ICD']] = $value['ID_ICD'].' : '.strtoupper($value['NM_DIAGNOSA']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}

function get_option_signa1($name,$select,$attribut)
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_signa1();
	foreach($query as $key => $value)
	{
		$option['option'][$value['LATINSIGNA1']] = strtoupper($value['KETSIGNA1']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}

function get_option_signa2($name,$select,$attribut)
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_signa2();
	foreach($query as $key => $value)
	{
		$option['option'][$value['LATINSIGNA2']] = strtoupper($value['KETSIGNA2']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}

function get_option_signa3($name,$select,$attribut)
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_signa3();
	foreach($query as $key => $value)
	{
		$option['option'][$value['LATINSIGNA3']] = strtoupper($value['KETSIGNA3']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}

function get_option_inastkrshs($name,$select,$attribut,$grup = '')
{
	$CI =& get_instance();
	$CI->load->model('addon_model','addon');
	$option['option'] = array('' => '----');

	$query = $CI->addon->addon_inastkrshs('', $grup);
	foreach($query as $key => $value)
	{
		$option['option'][$value['ID_OBAT']] = strtoupper($value['NAMA_OBAT']);
	}
	return form_dropdown($name, $option['option'], $select, $attribut);
}


/*
|---------------------------------------------------------
|  get list form static rule
|---------------------------------------------------------
|
| digunakan untuk mengembalikan keluaran kode ke latin
| diharapkan menggantikan fungsi decode di oracle agar
| program bisa dihandle juga dengan mysql
|
*/
function get_latin_sumber_anamnesis($sumber)
{
	$option = sumber_anamnesis();
	return strtoupper($result = (array_key_exists($sumber, $option)) ? $option[$sumber] : '--');
}

function get_latin_prekondisi($sumber)
{
	$option = prekondisi();
	return strtoupper($result = (array_key_exists($sumber, $option)) ? $option[$sumber] : '--');
}

function get_latin_jenis_kelamin($sumber)
{
	$option = jenis_kelamin();
	return strtoupper($result = (array_key_exists($sumber, $option)) ? $option[$sumber] : '--');
}

function get_latin_status_pernikahan($sumber)
{
	$option = status_pernikahan();
	return $result = strtoupper((array_key_exists($sumber, $option)) ? $option[$sumber] : '--');
}

/*
|---------------------------------------------------------
|  get list form static rule
|---------------------------------------------------------
|
| digunakan untuk mengembalikan keluaran kode ke latin
| diharapkan menggantikan fungsi decode di oracle agar
| program bisa dihandle juga dengan mysql
|
*/
function rule_img()
{
	return true;
}
