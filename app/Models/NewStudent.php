<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewStudent extends Model
{
    protected $fillable = [
        'nama_calon_peserta_didik',
        'jenis_kelamin',
        'nisn',
        'nik',
        'alamat_rumah',
        'tempat_lahir',
        'tanggal_lahir',
        'anak_ke',
        'no_hp_wa',
        'email',
        'nama_sekolah_asal',
        'tahun_lulus',
        'tujuan_sekolah',
        'nomor_kartu_keluarga',
        'nama_ayah',
        'pekerjaan_ayah',
        'pendidikan_terakhir_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'pendidikan_terakhir_ibu',
        'no_hp_wa_orang_tua'
    ];
}
