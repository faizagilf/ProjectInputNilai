@extends('layout')
@section('title','Edit Dosen')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <h3 style="text-align: center">Edit Nilai Mahasiswa</h3>
            <div class="row justify-content-center">
                <div class="col-lg-6 mt-3">
                    <form method="post" action="{{ route('mahasiswa.update',$mahasiswa->id)}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="npm" placeholder="20106311700XX" value="{{ old('npm') ?? $mahasiswa->npm }}">
                            <label for="floatingInput">NPM</label>
                            @error('npm')
                            <p style="color: red">{{ $message }}</p> 
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') ?? $mahasiswa->nama}}" >
                            <label for="floatingInput">Nama</label>
                            @error('nama')
                            <p style="color: red">{{ $message }}</p> 
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="absen" placeholder="Absen" value="{{ old('absen') ?? $mahasiswa->absen}}" >
                            <label for="floatingInput">Absen</label>
                            @error('absen')
                            <p style="color: red">{{ $message }}</p> 
                            @enderror
                        </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="uts" placeholder="UTS" value="{{ old('uts') ?? $mahasiswa->uts}}" >
                            <label for="floatingInput">UTS</label>
                            @error('uts')
                            <p style="color: red">{{ $message }}</p> 
                            @enderror
                        </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="uas" placeholder="UAS" value="{{ old('uas') ?? $mahasiswa->uas}}" >
                            <label for="floatingInput">UAS</label>
                            @error('uas')
                            <p style="color: red">{{ $message }}</p> 
                            @enderror
                        </div>
                      
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3 mb-3">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection