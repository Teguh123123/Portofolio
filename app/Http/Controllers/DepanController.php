<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepanController extends Controller
{
    public function index()
    {
        $about_id = get_meta_value('_halaman_about');
        $about_data = DB::table('halaman')->where('id', $about_id)->first();
        

        $interest_id = get_meta_value('_halaman_interest');
        $interest_data = DB::table('halaman')->where('id', $interest_id)->first();

        $award_id = get_meta_value('_halaman_award');
        $award_data = DB::table('halaman')->where('id', $award_id)->first();

        $experience_data = DB::table('riwayat')->where('tipe', 'experience')->get();

        $education_data = DB::table('riwayat')->where('tipe', 'education')->get();

        return view('depan.index', [
            'about' => $about_data,
            'interest' => $interest_data,
            'award' => $award_data,
            'experience' => $experience_data,
            'education' => $education_data,
        ]);
    }

    public function index2()
    {
        $about_id = get_meta_value('_halaman_about');
        $about_data = DB::table('halaman')->where('id', $about_id)->first();
        

        $interest_id = get_meta_value('_halaman_interest');
        $interest_data = DB::table('halaman')->where('id', $interest_id)->first();

        $award_id = get_meta_value('_halaman_award');
        $award_data = DB::table('halaman')->where('id', $award_id)->first();

        $experience_data = DB::table('riwayat')->where('tipe', 'experience')->get();

        $education_data = DB::table('riwayat')->where('tipe', 'education')->get();

        return view('depan.index2', [
            'about' => $about_data,
            'interest' => $interest_data,
            'award' => $award_data,
            'experience' => $experience_data,
            'education' => $education_data,
        ]);
    }
}
