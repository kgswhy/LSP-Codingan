<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input_aspirasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'kelas',
        'judul_laporan',
        'kode_pengaduan',
        'nama',
        'email',
        'no_telp',
        'alamat',
        'jenis_pengaduan',
        'kategori_pengaduan',
        'tanggal_laporan',
        'laporan',
        'berkas_pendukung',
        'status'
    ];

    public function tanggapan()
    {
        return $this->hasOne(aspirasi::class,  'pengaduan_id', 'id');
    }
}
