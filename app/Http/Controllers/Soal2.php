<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal2 extends Controller
{
    function index (){
		return view('soal2');
	}
	function proses (Request $request){
		$angka = $request -> input('angka');

		$hasil = $angka % 2;

		if ($angka == 0) {
            $jenis = "Angka 0";
        } else {
            if ($hasil == 0) {
            $jenis = "Bilangan Genap";
	        } else {
	            $jenis = "Bilangan Ganjil";
	        }
        }

		$data = array(
			'angka' => $angka,
			'jenis' => $jenis,
		);
		return view('hasil2', $data);
	}	
}

