<?php

namespace App\Http\Controllers;

use App\Models\data_penduduk;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = data_penduduk::where('NIK','like',"%% $katakunci")
                ->orWhere('Nama','like',"%$katakunci")
                ->paginate($jumlahbaris);
        }else{
            $data = data_penduduk::orderBy('nik','asc')->paginate($jumlahbaris);
        }
        return view('DataPenduduk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataPenduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'NIK' => $request->nik,
            'Nama' => $request->nama,
            'Jenis Kelamin' => $request->kelamin,
            'Tanggal Lahir' => $request->lahir,
            'Provinsi' => $request->provinsi,
            'Kota' => $request->kota,
            'Alamat' => $request->alamat,
            'RT' => $request->rt,
            'RW' => $request->rw,
        ];
        data_penduduk::create($data);
        return redirect('data_penduduk');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
