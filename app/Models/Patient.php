<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
           'kode_pasien',
           'nama',
           'tanggal_lahir',
           'jenis_kelamin',
           'alamat',
           'notelp',
           'golongan_darah',
           'riwayat_penyakit',
            'created_at',
            'updated_at',
    ];
}
