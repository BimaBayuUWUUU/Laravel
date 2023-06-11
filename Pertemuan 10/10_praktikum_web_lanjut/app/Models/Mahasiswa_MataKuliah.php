<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_MataKuliah extends Model
{
    protected $table = 'mahasiswa_matakuliah';
    protected $fillable = ['mahasiswa_nim', 'matakuliah_id', 'nilai'];

    public function mahasiswas()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_nim');
    }
    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'matakuliah_id');
    }
}
