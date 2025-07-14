<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LembagaController extends Controller
{
    public function index()
    {
        $lembagas = Lembaga::where('user_id', Auth::id())->get();
        return view('form-step.lembaga.index', compact('lembagas'));
    }

    public function create()
    {
        return view('form-step.lembaga.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lembaga' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'jenjang' => 'required',
        ]);

        Lembaga::create([
            'user_id' => Auth::id(),
            'nama_lembaga' => $request->nama_lembaga,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'jenjang' => $request->jenjang,
        ]);

        return redirect()->route('lembaga.index')->with('success', 'Lembaga berhasil ditambahkan!');
    }

    public function show(Lembaga $lembaga)
    {
        return view('form-step.lembaga.show', compact('lembaga'));
    }

    public function edit(Lembaga $lembaga)
    {
        return view('form-step.lembaga.edit', compact('lembaga'));
    }

    public function update(Request $request, Lembaga $lembaga)
    {
        $request->validate([
            'nama_lembaga' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'jenjang' => 'required',
        ]);

        $lembaga->update($request->all());

        return redirect()->route('lembaga.index')->with('success', 'Data lembaga berhasil diperbarui!');
    }

    public function destroy(Lembaga $lembaga)
    {
        $lembaga->delete();

        return redirect()->route('lembaga.index')->with('success', 'Lembaga dihapus!');
    }
}
