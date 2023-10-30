<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = "content";
    protected $fillable = [
        'nama_prov',
        'sejarah',
        'pict_sejarah',
        'baju_adat',
        'pict_baju_adat',
        'rumah_adat',
        'pict_rumah_adat',
        'lagu_daerah',
        'pict_lagu_daerah',
        'senjata',
        'pict_senjata'
    ];
}
