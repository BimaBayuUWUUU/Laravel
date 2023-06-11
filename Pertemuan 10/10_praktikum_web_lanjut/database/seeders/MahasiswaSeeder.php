<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = [
            [
                'nim' => '1941720011',
                'nama' => 'Muhammad Rizqi Mahendra',
                'jurusan' => 'JTI',
                'no_handphone' => '0812345678',
                'email' => 'example1@gmail.com',
                'tanggal_lahir' => '2001-06-03',
                'kelas_id' => '1',
            ],
            [
                'nim' => '1941720012',
                'nama' => 'Muhammad Rizqi Mahendra 2',
                'jurusan' => 'JTI',
                'no_handphone' => '0812345679',
                'email' => 'example2@gmail.com',
                'tanggal_lahir' => '2002-07-04',
                'kelas_id' => '1',
            ],
            [
                'nim' => '1941720013',
                'nama' => 'Muhammad Rizqi Mahendra 3',
                'jurusan' => 'JTI',
                'no_handphone' => '0812345789',
                'email' => 'example3@gmail.com',
                'tanggal_lahir' => '2001-07-03',
                'kelas_id' => '1',
            ],
            [
                'nim' => '1941720014',
                'nama' => 'Muhammad Rizqi Mahendra 4',
                'jurusan' => 'JTI',
                'no_handphone' => '0812356789',
                'email' => 'example4@gmail.com',
                'tanggal_lahir' => '2002-06-03',
                'kelas_id' => '1',
            ],
            [
                'nim' => '1941720015',
                'nama' => 'Muhammad Rizqi Mahendra 5',
                'jurusan' => 'JTI',
                'no_handphone' => '0812456789',
                'email' => 'example5@gmail.com',
                'tanggal_lahir' => '2001-06-03',
                'kelas_id' => '1',
            ],
            [
                'nim' => '1941720016',
                'nama' => 'Muhammad Rizqi Mahendra 6',
                'jurusan' => 'JTI',
                'no_handphone' => '0823456789',
                'email' => 'example6@gmail.com',
                'tanggal_lahir' => '2001-06-03',
                'kelas_id' => '2',
            ],
            [
                'nim' => '1941720017',
                'nama' => 'Muhammad Rizqi Mahendra 7',
                'jurusan' => 'JTI',
                'no_handphone' => '0812456789',
                'email' => 'example7@gmail.com',
                'tanggal_lahir' => '2001-06-13',
                'kelas_id' => '2',
            ],
            [
                'nim' => '1941720018',
                'nama' => 'Muhammad Rizqi Mahendra 8',
                'jurusan' => 'JTI',
                'no_handphone' => '0812345679',
                'email' => 'example8@gmail.com',
                'tanggal_lahir' => '2001-06-03',
                'kelas_id' => '3',
            ],
            [
                'nim' => '1941720019',
                'nama' => 'Muhammad Rizqi Mahendra 9',
                'jurusan' => 'JTI',
                'no_handphone' => '0812345679',
                'email' => 'example9@gmail.com',
                'tanggal_lahir' => '2001-06-03',
                'kelas_id' => '3',
            ],
        ];
        DB::table('mahasiswas')->insert($mahasiswa);
    }
}
