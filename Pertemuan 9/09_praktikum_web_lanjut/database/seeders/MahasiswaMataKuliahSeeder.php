<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Mahasiswa_MataKuliah;
use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //    get all mahasiswa and matakuliah data, next insert to mahasiswa_matakuliah table
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = MataKuliah::all();

        foreach ($mahasiswas as $mahasiswa) {
            foreach ($matakuliahs as $matakuliah) {
                Mahasiswa_MataKuliah::create([
                    'mahasiswa_nim' => $mahasiswa->nim,
                    'matakuliah_id' => $matakuliah->id,
                    'nilai' => chr(rand(65, 69)),
                ]);
            }
        }
    }
}
