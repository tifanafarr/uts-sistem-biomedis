<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id',
           'nama',
          'notelp',
           'email',
           'spesialis',
            'created_at',
            'updated_at',
    ];
}
