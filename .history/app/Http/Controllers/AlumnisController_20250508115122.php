<?php
namespace App\Http\Controllers;

use App\Models\Alumnis;  // Menggunakan model Alumnis
use Illuminate\Http\Request;

class AlumnisController extends Controller
{
    public function index()
    {
        $alumnis = Alumnis::all();  // Mengambil semua data alumnis
        return view('alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('alumni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'kampus' => 'required|string|max:50',
            'angkatan' => 'required|integer',
            'pekerjaan' => 'nullable|string|max:100',
            'bidang_keahlian' => 'nullable|string|max:100',
            'pengalaman' => 'nullable|string',
            'asal' => 'nullable|string|max:100',
            'contact' => 'nullable|string|max:50',
            'riwayat_pendidikan' => 'nullable|string',
        ]);

        Alumnis::create($request->all());

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil ditambahkan');
    }

    public function edit($id)
    {
        $alumnis = Alumnis::findOrFail($id);
        return view('alumni.edit', compact('alumnis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'kampus' => 'required|string|max:50',
            'angkatan' => 'required|integer',
            'pekerjaan' => 'nullable|string|max:100',
            'bidang_keahlian' => 'nullable|string|max:100',
            'pengalaman' => 'nullable|string',
            'asal' => 'nullable|string|max:100',
            'contact' => 'nullable|string|max:50',
            'riwayat_pendidikan' => 'nullable|string',
        ]);

        $alumnis = Alumnis::findOrFail($id);
        $alumnis->update($request->all());

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil diperbarui');
    }

    public function destroy($id)
    {
        $alumnis = Alumnis::findOrFail($id);
        $alumnis->delete();

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil dihapus');
    }
}
