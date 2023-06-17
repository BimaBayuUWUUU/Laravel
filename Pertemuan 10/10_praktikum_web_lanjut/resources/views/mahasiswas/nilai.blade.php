@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2 class="text-center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
                <h1 class="text-center">KARTU HASIL STUDI (KHS)</h1>
            </div>

        </div>
    </div>
    <p>NIM : {{$mahasiswa->nim}}</p>
    <p>Nama : {{$mahasiswa->nama}}</p>
    <p>Kelas : {{$mahasiswa->kelas->nama_kelas}}</p>

    <table class="table table-bordered">
        <tr>
            <th>Matakuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Nilai</th>
        </tr>
        @foreach ($mahasiswa_matakuliah as $item)
            <tr>
                <td>{{$item->matakuliah->nama_matkul}}</td>
                <td>{{$item->matakuliah->sks}}</td>
                <td>{{$item->matakuliah->semester}}</td>
                <td>{{$item->nilai}}</td>
            </tr>
        @endforeach
        {{-- create link back to page mahasiswas --}}

    </table>
    <a href="{{ route('mahasiswas.index') }}" class="btn btn-primary">Kembali</a>
    <a href="{{ route('mahasiswas.print', $mahasiswa->nim) }}" class="btn btn-danger float-right">Cetak PDF</a>
@endsection
