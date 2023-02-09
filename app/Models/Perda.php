<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perda extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipe_dokumen', 'peraturan_daerah', 'no_perda', 'tahun', 'file'
    ];
}
