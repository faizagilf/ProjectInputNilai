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
        DAFTAR NILAI MAHASISWA
    </h2>
    <p>
        Dibawah ini merupakan daftar nilai mahasiswa program studi
        <b>
        Teknik Informatika
        </b>
    </p>
      <div class="div d-flex justify-content-end">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">TAMBAH</a>
      </div>
      <table class="table">
        <div class="row mt-5">
            <table class="table table-bordered"> 
                <tr>
                    <th rowspan="2">#</th>
                    <th rowspan="2">NPM</th>
                    <th rowspan="2">Nama Lengkap</th>
                    <th colspan="4">Nilai</th>
                    <th colspan="4">Presentase</th>
                    <th rowspan="2">Nilai Akhir</th>
                    <th rowspan="2">Keterangan</th>
                    <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                    <th>Absen</th>
                    <th>Tugas</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Absen(10%)</th>
                    <th>Tugas(20%)</th>
                    <th>UTS(30%)</th>
                    <th>UAS(40%)</th>
                </tr>
                <tr>
                    @foreach ($mahasiswa as $mahasiswa)

                    <td scope="row">{{ $loop->iteration }}</td>

                    <td>{{ $mahasiswa->npm }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->absen }}</td>
                    <td>{{ $mahasiswa->tugas }}</td>
                    <td>{{ $mahasiswa->uts }}</td>
                    <td>{{ $mahasiswa->uas }}</td>
                    <td>{{ $mahasiswa->absen * 0.1 }}</td>
                    <td>{{ $mahasiswa->tugas * 0.2 }}</td>
                    <td>{{ $mahasiswa->uts * 0.3}}</td>
                    <td>{{ $mahasiswa->uas * 0.4 }}</td>
                    <td>{{ $mahasiswa->absen * 0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts *0.3 + $mahasiswa->uas * 0.4 }}</td>

                        <td>
                            <!-- kondisi -->
                            @if($mahasiswa->absen * 0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts * 0.3 + $mahasiswa->uas * 0.4 >= 70 &&
                            $mahasiswa->absen
                            *
                            0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts * 0.3 + $mahasiswa->uas * 0.4 <= 100) <span class="text-success">Lulus</span>

                                @elseif($mahasiswa->absen * 0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts * 0.3 + $mahasiswa->uas * 0.4 >= 0 &&
                                $mahasiswa->absen
                                *
                                0.1 + $mahasiswa->tugas * 0.2 + $mahasiswa->uts * 0.3 + $mahasiswa->uas * 0.4 < 70) <span class="text-danger">Tidak Lulus</span>

                                    @else
                                    @endif
                        </td>
                    
                    <td>
                      <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-sm btn-primary">Edit</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                    @endforeach
                </tr>
              </table>
        </div>



      </table>
    </div>
  </div>
</div>
@endsection
