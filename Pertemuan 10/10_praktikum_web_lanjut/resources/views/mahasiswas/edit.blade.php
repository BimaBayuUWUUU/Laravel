@extends('mahasiswas.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mahasiswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->nim) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="form-control" id="nim"
                                   value="{{ $Mahasiswa->nim }}" aria-describedby="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                   value="{{ $Mahasiswa->nama }}" aria-describedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" class="form-control">
                                @foreach($kelas as $kls)
                                    <option value="{{$kls->id}}"
                                    {{$Mahasiswa->kelas_id == $kls->id ? 'selected' : ''}}>{{$kls->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="jurusan" name="jurusan" class="form-control" id="jurusan"
                                   value="{{ $Mahasiswa->jurusan }}" aria-describedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="no_handphone">No_Handphone</label>

                            <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone"
                                   value="{{ $Mahasiswa->no_handphone }}" ari-describedby="no_handphone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                   value="{{ $Mahasiswa->email }}" aria-describedby="email">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal_Lahir</label>
                            <input type="tanggal_lahir" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                   value="{{ $Mahasiswa->tanggal_lahir }}" aria-describedby="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="Foto">Foto Profil</label>
                            <input type="file" name="Foto" class="form-control" id="Foto" aria-describedby="Foto" >
                        </div>
                        <div>
                            @if($Mahasiswa->image_profile)
                                <img src="{{ asset('images/'.$Mahasiswa->image_profile) }}" width="150px" height="150px" alt="">
                            @else
                                <img src="{{ asset('images/default.png') }}" width="150px" height="150px" alt="">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
