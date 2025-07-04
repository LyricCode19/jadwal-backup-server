<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalBackup extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama_server',
        'hari_backup',
        'jam_backup',
        'keterangan',
    ];
}

