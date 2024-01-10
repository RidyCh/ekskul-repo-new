<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $table = 'login';

    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'password',
        'nama_lengkap',
        'ekskul_role',
        'nama_pembina',
        'foto_ekskul',
    ];
}
