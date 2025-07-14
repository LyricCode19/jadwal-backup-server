<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
    use HasFactory;

    protected $fillable = [
        'lembaga_id',
        'nama_file',
        'catatan',
        'lokasi_path',
        'uploaded_at',
    ];

    protected $casts = [
        'uploaded_at' => 'datetime', // ⬅️ Tambahkan baris ini
    ];

    public function lembaga()
    {
        return $this->belongsTo(Lembaga::class);
    }
}
