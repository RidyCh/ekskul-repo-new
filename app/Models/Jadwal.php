<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    protected $fillable = [
        'ekskul_role',
        'tanggal_ekskul',
        'lokasi',
        'jam_mulai',
        'jam_selesai',
        'status',
    ];
}
