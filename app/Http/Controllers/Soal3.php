<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal3 extends Controller
{
	    function index (){
		return view('soal3');
	}
	function proses (Request $request){
		$angka = $request -> input('angka');

		 switch ($angka) {
            case 1:
                $bulan = "JANUARY";
                break;
            case 2:
                $bulan = "FEBRUARY";
                break;
            case 3:
                $bulan = "MARCH";
                break;
            case 4:
                $bulan = "APRIL";
                break;
            case 5:
                $bulan = "MAY";
                break;
            case 6:
                $bulan = "JUNE";
                break;
            case 7:
                $bulan = "JULY";
                break;
            case 8:
                $bulan = "AUGUST";
                break;
            case 9:
                $bulan = "SEPTEMBER";
                break;
            case 10:
                $bulan = "OCTOBER";
                break;
            case 11:
                $bulan = "NOVEMBER";
                break;
            case 12:
                $bulan = "DECEMBER";
                break;
        }

		$data = array(
			'angka' => $angka,
			'bulan' => $bulan,
		);
		return view('hasil3', $data);
	}	
}
