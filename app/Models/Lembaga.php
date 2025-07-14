<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_lembaga',
        'alamat',
        'email',
        'jenjang',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function backups()
    {
        return $this->hasMany(Backup::class);
    }
}
