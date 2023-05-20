@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-6">
            <form action="{{ route('mahasiswas.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="Nama" placeholder="Cari berdasarkan nama..." aria-label="first name">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-outline-warning">Cari</button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th>Email</th>
            <th>Tanggal_Lahir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswas as $Mahasiswa)
            <tr>

                <td>{{ $Mahasiswa->nim }}</td>
                <td>{{ $Mahasiswa->nama }}</td>
                <td>{{ $Mahasiswa->kelas }}</td>
                <td>{{ $Mahasiswa->jurusan }}</td>
                <td>{{ $Mahasiswa->no_handphone }}</td>
                <td>{{ $Mahasiswa->email }}</td>
                <td>{{ $Mahasiswa->tanggal_lahir }}</td>
                <td>
                    <form action="{{ route('mahasiswas.destroy', $Mahasiswa->nim) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('mahasiswas.show', $Mahasiswa->nim) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('mahasiswas.edit', $Mahasiswa->nim) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

{{--    {{ $mahasiswas->links()}}--}}

    <!-- a Tag for previous page -->
    <a class="btn btn-primary" href="{{$mahasiswas->previousPageUrl()}}">
        Previous
    </a>
    @for($i=1;$i<=$mahasiswas->lastPage();$i++)
        <!-- a Tag for another page -->
        <a href="{{$mahasiswas->url($i)}}">{{$i}}</a>
    @endfor
    <!-- a Tag for next page -->
    <a class="btn btn-primary" href="{{$mahasiswas->nextPageUrl()}}">
        Next
    </a>
@endsection
