<?php

namespace App\Http\Controllers;

use App\Models\JadwalBackup;
use Illuminate\Http\Request;

class JadwalBackupController extends Controller
{
    public function index()
    {
        $jadwals = JadwalBackup::all();
        return view('jadwal-backup.index', compact('jadwals'));
    }

    public function create()
    {
        return view('jadwal-backup.create');
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'nama_server' => 'required|string',
        'hari_backup' => 'required|string',
        'jam_backup' => 'required',
        'keterangan' => 'nullable|string',
    ]);

    JadwalBackup::create($validated);

    return redirect()->route('jadwal-backup.create')
                 ->with('success', 'Data berhasil ditambahkan! Tambah lagi kalau perlu.');

}


    public function show(JadwalBackup $jadwal_backup)
    {
        return view('jadwal-backup.show', ['jadwal' => $jadwal_backup]);
    }

    public function edit(JadwalBackup $jadwal_backup)
    {
        return view('jadwal-backup.edit', ['jadwal' => $jadwal_backup]);
    }

    public function update(Request $request, JadwalBackup $jadwal_backup)
    {
        $request->validate([
            'nama_server' => 'required',
            'hari_backup' => 'required',
            'jam_backup' => 'required',
            'keterangan' => 'nullable',
        ]);

        $jadwal_backup->update($request->all());

        return redirect()->route('jadwal-backup.index')
                         ->with('success', 'Data berhasil diubah.');
    }

    public function destroy(JadwalBackup $jadwal_backup)
    {
        $jadwal_backup->delete();

        return redirect()->route('jadwal-backup.index')
                         ->with('success', 'Data berhasil dihapus.');
    }
}
