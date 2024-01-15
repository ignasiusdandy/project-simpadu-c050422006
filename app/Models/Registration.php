<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
    'no_pendaftaran',
    'nisn',
    'nama',
    'alamat',
    'tempat_lahir',
    'tanggal_lahir',
    'asal_sekolah',
    'jenis_kelamin',
    'jurusan',
    'nama_ayah',
    'pekerjaan_ayah',
    'nama_ibu',
    'pekerjaan_ibu',
    'penghasilan_orang_tua',
    'image',
];
}
