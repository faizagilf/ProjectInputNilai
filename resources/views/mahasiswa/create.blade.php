@extends('layout')
@section('content')
<div class="container">
  <div class="row">
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
      {{ $message }}
    </div>
    @endif
    <div class="col-md-12">
    <h2>
        TAMBAH NILAI MAHASISWA
    </h2>
    <p>
        Silakan masukkan data dengan benar dan lengkap!!
    </p>
<div class="container">
    <div class="edit m-auto">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NPM</label>
                                <input type="text" name="npm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('npm')}}">

                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Absen</label>
                                <input type="text" name="absen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('absen')}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">UTS</label>
                                <input type="text" name="uts" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('uts')}}">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('nama')}}">

                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tugas</label>
                                <input type="text" name="tugas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('tugas')}}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">UAS</label>
                                <input type="text" name="uas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('uas')}}">
                              </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
