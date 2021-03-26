<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal4 extends Controller
{
	    function index (){
		return view('soal4');
	}
	function proses (Request $request){
		$angka = $request -> input('angka');

		$data = array(
		'angka' => $angka
		);
		return view('hasil4', $data);
	}	
}