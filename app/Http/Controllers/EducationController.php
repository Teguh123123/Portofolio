<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
{
    function __construct()
    {
        $this->_tipe = 'education';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('riwayat')->where('tipe', $this->_tipe)->orderBy('tgl_akhir', 'desc')->get();

        return view('education.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('info1', $request->info1);
        Session::flash('info2', $request->info2);
        Session::flash('info3', $request->info3);
        Session::flash('tgl_mulai', $request->tgl_mulai);
        Session::flash('tgl_akhir', $request->tgl_akhir);

        $request->validate(
            [
                'judul' => 'required',
                'info1' => 'required',
                'tgl_mulai' => 'required',
            ],
            [
                'judul.required' => 'Judul wajib diisi',
                'info1' => 'Nama perusahaan wajib diisi',
                'tgl_mulai.required' => 'Tanggal mulai wajib diisi',
            ]
        );

        $data = [
            'judul' => $request->judul,
            'info1' => $request->info1,
            'info2' => $request->info2,
            'info3' => $request->info3,
            'tipe' => $this->_tipe,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
        ];

        DB::table('riwayat')->insert($data);

        return redirect()->route('education.index')->with('success', 'Berhasil menambahkan data');
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
    public function edit(string $id)
    {
        $data = DB::table('riwayat')->where('tipe', $this->_tipe)->find($id);

        return view('education.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'judul' => 'required',
                'info1' => 'required',
                'tgl_mulai' => 'required',
            ],
            [
                'judul.required' => 'Judul wajib diisi',
                'info1' => 'Nama perusahaan wajib diisi',
                'tgl_mulai.required' => 'Tanggal mulai wajib diisi',
            ]
        );

        $data = [
            'judul' => $request->judul,
            'info1' => $request->info1,
            'info2' => $request->info2,
            'info3' => $request->info3,
            'tipe' => $this->_tipe,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
        ];
        
        DB::table('riwayat')->where('id', $id)->where('tipe', $this->_tipe)->update($data);

        return redirect()->route('education.index')->with('success', 'Berhasil melakukan perubahan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('riwayat')->where('id', $id)->where('tipe', $this->_tipe)->delete();
        
        return redirect()->route('education.index')->with('success', 'Berhasil melakukan penghapusan data');
    }
}
