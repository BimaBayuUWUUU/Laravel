<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Models\Mahasiswa_MataKuliah;
use App\Models\MataKuliah;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response

     */
    public function index(Request $request)
    {
//        //fungsi eloquent menampilkan data menggunakan pagination
//        $keyword = $request->input('Nama');
//
//        if ($keyword) {
//            $mahasiswas = Mahasiswa::where('Nama', 'like', '%' . $keyword . '%')->paginate(5);
//        } else {
//            $mahasiswas = Mahasiswa::paginate(5);
//        }
//        return view('mahasiswas.index', ['mahasiswas' => $mahasiswas]);

        //yang semula Mahasiswa::all() diubah menjadi with() yang menyatakan relasi
        $mahasiswas = Mahasiswa::with('kelas')->get();
        $paginate = Mahasiswa::orderBy('nim', 'asc')->paginate(3);
        return view('mahasiswas.index', ['mahasiswas' => $mahasiswas, 'paginate' => $paginate]);
    }
    public function create()
    {
//
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswas.create', ['kelas' => $kelas]);
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',

        ]);
//        //fungsi eloquent untuk menambah data
//        Mahasiswa::create($request->all());
//        //jika data berhasil ditambahkan, akan kembali ke halaman utama
//        return redirect()->route('mahasiswas.index')
//            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->no_handphone = $request->get('no_handphone');
        $mahasiswa->email = $request->get('email');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        if ($request->hasFile('Foto')) {
            $extension = $request->file('Foto')->getClientOriginalExtension();
            $request->file('Foto')->move('storage/images/', $mahasiswa->nama . '.' . $extension);
            $mahasiswa->image_profile = $mahasiswa->nama . '.' . $extension;
        } else {
            $mahasiswa->image_profile = 'default.png';
        }
        $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->input('kelas');

        //fungsi eloquent untuk menambah data dengan relasi belongsTo
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($Nim)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
//        $Mahasiswa = Mahasiswa::find($Nim);
//        if (!$Mahasiswa) {
//            abort(404);
//        }
//        $nextMahasiswa = Mahasiswa::where('nim', '>', $Mahasiswa->nim)->first();
//        return view('mahasiswas.detail', compact('Mahasiswa', 'nextMahasiswa'));
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Mahasiswa = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
        return view('mahasiswas.detail', ['Mahasiswa' => $Mahasiswa]);
    }

    public function edit($nim)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
//        $Mahasiswa = Mahasiswa::find($nim);
//        return view('mahasiswas.edit', compact('Mahasiswa'));
        $Mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswas.edit', compact('Mahasiswa', 'kelas'));
    }

    public function update(Request $request, $nim)
    {
        //melakukan validasi data
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
        ]);
//        //fungsi eloquent untuk mengupdate data inputan kita
//        Mahasiswa::find($nim)->update($request->all());
//        //jika data berhasil diupdate, akan kembali ke halaman utama
//        return redirect()->route('mahasiswas.index')
//            ->with('success', 'Mahasiswa Berhasil Diupdate');
        $mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->no_handphone = $request->get('no_handphone');
        $mahasiswa->email = $request->get('email');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        if ($request->hasFile('Foto')) {
            $extension = $request->file('Foto')->getClientOriginalExtension();
            $request->file('Foto')->move('storage/images/', $mahasiswa->nama . '.' . $extension);
            $mahasiswa->image_profile = $mahasiswa->nama . '.' . $extension;
        } else {
            $mahasiswa->image_profile = 'default.png';
        }
        $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->input('kelas');

        //fungsi eloquent untuk mengupdate data dengan relasi belongsTo
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //delete image profile mahasiswa
        if ($mahasiswa->image_profile) {
            unlink(public_path('storage/images/' . $mahasiswa->image_profile));
        }

        $mahasiswa->delete();
        return redirect('mahasiswas')->with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function detailNilai($id)
    {
        $mahasiswa_matakuliah = Mahasiswa_MataKuliah::with('matakuliah')->where('mahasiswa_nim', $id)->get();
        $mahasiswa = Mahasiswa::with('kelas')->find($id);
        return view('mahasiswas.nilai', compact('mahasiswa_matakuliah', 'mahasiswa'));
    }
    public function print($id)
    {
        $mahasiswa_matakuliah = Mahasiswa_MataKuliah::with('matakuliah')->where('mahasiswa_nim', $id)->get();
        $mahasiswa = Mahasiswa::with('kelas')->find($id);
        $pdf = PDF::loadview('mahasiswas.nilai_pdf', ['mahasiswa' => $mahasiswa, 'mahasiswa_matakuliah' => $mahasiswa_matakuliah]);
        return $pdf->stream();
    }
}
