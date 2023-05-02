<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$data = halaman::orderBy('Judul', 'asc')->get();
        $data = DB::table('halaman')->orderBy('Judul', 'asc')->get();
        return view('halaman.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('halaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('isi', $request->isi);
        
        $request->validate(
            [
                'judul' => 'required',
                'isi' => 'required',
            ],
            [
                'judul.required' => 'Judul wajib diisi',
                'isi.required' => 'Isian tulisan wajib diisi',
            ]
        );

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi
        ];
        //dd($data);
        //halaman::create($data);
        DB::table('halaman')->insert($data);

        return redirect()->route('halaman.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //$data = halaman::where('id', $id)->first();
        $data = DB::table('halaman')->find($id);

        return view('halaman.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'judul' => 'required',
                'isi' => 'required',
            ],
            [
                'judul.required' => 'Judul wajib diisi',
                'isi.required' => 'Isian tulisan wajib diisi',
            ]
        );

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi
        ];

        DB::table('halaman')->where('id', $id)->update($data);
        
        return redirect()->route('halaman.index')->with('success', 'Berhasil melakukan perubahan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //halaman::where('id', $id)->delete();
        DB::table('halaman')->where('id', $id)->delete();
        
        return redirect()->route('halaman.index')->with('success', 'Berhasil melakukan penghapusan data');
    }
}