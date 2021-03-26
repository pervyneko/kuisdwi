<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuisController extends Controller
{
	function index (){
		return view('soal1');
	}
	function proses (Request $request){
		$nama = $request -> input('nama');
		$jenis = $request -> input('jenis');
		$harga = $request -> input('harga');
		$jumlah = $request -> input('jumlah');

		$total = $jumlah * $harga;
		if ($total >= 100000) {
			$diskon = $total*0.15;
		}elseif ($total >= 50000) {
			$diskon = $total*0.10;
		}else{
			$diskon = 0;
		}
		$totalbayar = $total - $diskon;
		$data = array(
			'namapelanggan' => $nama,
			'jenis' => $jenis,
			'harga' => $harga,
			'jumlah' => $jumlah,
			'diskon' => $diskon,
			'total' => $totalbayar,
		);
		return view('hasil', $data);
	}	
}
