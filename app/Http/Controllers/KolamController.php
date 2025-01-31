<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kolam;

class KolamController extends Controller
{
    public function index()
    {
        $kolams = Kolam::all();
        return view('kolam.tambah-kolam', compact('kolams'));
    }

    public function create()
    {
        return view('kolam.add-kolam');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
        ]);

        Kolam::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/jenis-kolam')->with('success', 'Kolam berhasil ditambahkan!');
    }

     // Tampilkan halaman edit
     public function edit($id)
     {
         $kolam = Kolam::findOrFail($id);
         return view('kolam.add-kolam', compact('kolam'));
     }

     // Update data kolam
     public function update(Request $request, $id)
     {
         $request->validate([
             'nama' => 'required',
             'jumlah' => 'required|integer|min:0',
         ]);

         $kolam = Kolam::findOrFail($id);
         $kolam->update([
             'nama' => $request->nama,
             'jumlah' => $request->jumlah,
         ]);

         return redirect('/jenis-kolam')->with('success', 'Kolam berhasil diperbarui!');
     }

     // Hapus data kolam
     public function destroy($id)
     {
         $kolam = Kolam::findOrFail($id);
         $kolam->delete();

         return redirect('/jenis-kolam')->with('success', 'Kolam berhasil dihapus!');
     }

}
