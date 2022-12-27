<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        //
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        //
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'absen' => 'required',
            'tugas' => 'required',
            'uts' => 'required',
            'uas' => 'required',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')
                         ->with('success','Data mahasiswa berhasil di simpan');
    }

    public function show(mahasiswa $mahasiswa)
    {
        
    }

    public function edit(mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'absen' => 'required',
            'tugas' => 'required',
            'uts' => 'required',
            'uas' => 'required',
        ]);

        $mahasiswa ->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success','Data mahasiswa done');
    }

    public function destroy(mahasiswa $mahasiswa)
    {
        //
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success','Data mahasiswa berhasil di delete');
    }
}
