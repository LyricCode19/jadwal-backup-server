<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use App\Models\Lembaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
    public function index()
    {
        $backups = Backup::with('lembaga')->latest()->get();
        return view('form-step.backup.index', compact('backups'));
    }

    public function create()
    {
        $lembagas = Lembaga::all();
        return view('form-step.backup.create', compact('lembagas'));
    }

     public function store(Request $request)
    {
    $request->validate([
        'lembaga_id' => 'required|exists:lembagas,id',
        'nama_file' => 'required|string',
        'catatan' => 'nullable|string',
        'file_backup' => 'required|file|mimes:zip,sql,rar,docx,pdf,xlsx,jpg,jpeg,png'
    ]);

    $file = $request->file('file_backup');
    $filename = time() . '_' . $file->getClientOriginalName();
    $path = $file->storeAs('backups', $filename, 'public');

    Backup::create([
        'lembaga_id' => $request->lembaga_id,
        'nama_file' => $request->nama_file,
        'catatan' => $request->catatan,
        'lokasi_path' => $path,
        'uploaded_at' => now(),
    ]);

    return redirect()->route('backup.index')->with('success', 'File backup berhasil diupload!');
}


    public function show(Backup $backup)
    {
        return view('form-step.backup.show', compact('backup'));
    }

    public function destroy(Backup $backup)
    {
        if ($backup->lokasi_path && Storage::disk('public')->exists($backup->lokasi_path)) {
            Storage::disk('public')->delete($backup->lokasi_path);
        }

        $backup->delete();

        return redirect()->route('backup.index')->with('success', 'Backup dihapus!');
    }
}
