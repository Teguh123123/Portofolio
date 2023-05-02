<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetHalController extends Controller
{
    public function index()
    {
        $data_halaman = DB::table('halaman')->orderBy('judul', 'asc')->get();
        return view('sethal.index', ['data_halaman' => $data_halaman]);
    }

    public function update(Request $request)
    {
        metadata::updateOrCreate(['meta_key' => '_halaman_about'], ['meta_value' => $request->_halaman_about]);
        metadata::updateOrCreate(['meta_key' => '_halaman_interest'], ['meta_value' => $request->_halaman_interest]);
        metadata::updateOrCreate(['meta_key' => '_halaman_award'], ['meta_value' => $request->_halaman_award]);

        return redirect()->route('sethal.index')->with('success', 'Berhasil melakukan perubahan data');
    }
}
