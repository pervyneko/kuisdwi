<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Soal5 extends Controller
{
    public function index()
    {
        return view('soal5');
    }

    public function proses(Request $request)
    {
        return redirect()->route('soal5.result', $request->angka);
    }

    public function result($angka)
    {
        return view('hasil5', compact('angka'));
    }
}
