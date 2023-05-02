<?php

use App\Models\metadata;
use Illuminate\Support\Facades\DB;

function get_meta_value($meta_key)
{
    $data = DB::table('metadata')->where('meta_key', $meta_key)->first();
    // $data = metadata::where('meta_key', $meta_key)->first();
    if ($data) {
        return $data->meta_value;
    } 
}

function set_about_nama($nama)
{
    $arr = explode(' ', $nama);
    $kata_akhir = end($arr);
    $kata_akhir2 = "<span class='text-primary'>$kata_akhir</span>";
    array_pop($arr);
    $nama_awal = implode(" ", $arr);

    return $nama_awal . " " . $kata_akhir2;
}


function set_list_award($isi)
{
    $isi = str_replace("<ul>", '<ul class="fa-ul mb-0">', $isi);
    $isi = str_replace("<li>", ' <li><span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>', $isi);

    return $isi;
}

function set_list_workflow($isi)
{
    $isi = str_replace("<ul>", '<ul class="fa-ul mb-0">', $isi);
    $isi = str_replace("<li>", ' <li><span class="fa-li"><i class="fas fa-check"></i></span>', $isi);

    return $isi;
}