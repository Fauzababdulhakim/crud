<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.index')->with([
            'mahasiswa' => Mahasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nim' => 'required|min:9|max:9',
        'nama' => 'required|min:3',
        'prodi' => 'required|min:3',
    ]);

    $mahasiswa = new Mahasiswa;
    $mahasiswa->nim = $request->nim;
    $mahasiswa->nama = $request->nama;
    $mahasiswa->prodi = $request->prodi;
    $mahasiswa->save();

    return redirect()->route('mahasiswa.index')->with('success', 'Data Berhasil Ditambah.');
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
        return view('mahasiswa.edit')->with([
            'mahasiswa' => Mahasiswa::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nim' => 'required|min:9|max:9',
            'nama' => 'required|min:3',
            'prodi' => 'required|min:3',
        ]);
    
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->save();
    
        return redirect()->route('mahasiswa.index')->with('success', 'Data Berhasil Edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return back()->with('success','Data Berhasil di Hapus.');
    }
}
