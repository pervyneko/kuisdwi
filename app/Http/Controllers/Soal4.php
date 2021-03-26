<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal4 extends Controller
{
	function index()
	{
		return view('soal4');
	}

	function proses(Request $request)
	{
		return redirect()->route('soal4.result', $request->angka);
	}

	public function result($angka)
	{
		return view('hasil4', compact('angka'));
	}
}
