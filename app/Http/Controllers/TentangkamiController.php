<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use Illuminate\Http\Request;

class TentangkamiController extends Controller
{
    public function index()
    {
        $tentangkami = Tentangkami::all();
        return view('admin.datamaster.tentangkami', compact('tentangkami'));

    }

    public function store(Request $request)
    {
        $request->validate([

            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'judul' => 'required',
            'fasilitas_1' => 'required',
            'fasilitas_2' => 'required',
            'fasilitas_3' => 'required',
            'fasilitas_4' => 'required',
            'deskripsi' => 'required',

        ]);

        $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('fototentangkami/'), $imageName);
        Tentangkami::create([

            'foto' => $imageName,
            'judul' => $request->judul,
            'fasilitas_1' => $request->fasilitas_1,
            'fasilitas_2' => $request->fasilitas_2,
            'fasilitas_3' => $request->fasilitas_3,
            'fasilitas_4' => $request->fasilitas_4,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect('admin/tentangkami')->with('success', 'Data Berhasil Dibuat.');
    }

    public function update(Request $request)
    {
        $request->validate([

            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
            'judul' => 'required',
            'fasilitas_1' => 'required',
            'fasilitas_2' => 'required',
            'fasilitas_3' => 'required',
            'fasilitas_4' => 'required',
            'deskripsi' => 'required',

        ]);
        $imageName = $request->gambarLama;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $image->move(public_path('fototentangkami/'), $imageName);
        }
        $tentangkami = Tentangkami::where('id', $request->id)->update([
            'foto' => $imageName,
            'judul' => $request->judul,
            'fasilitas_1' => $request->fasilitas_1,
            'fasilitas_2' => $request->fasilitas_2,
            'fasilitas_3' => $request->fasilitas_3,
            'fasilitas_4' => $request->fasilitas_4,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($tentangkami) {
            return redirect('admin/tentangkami')->with('success', 'Data Berhasil Diedit.');
        }
    }

    public function delete(Request $request)
    {
        $del = Tentangkami::where('id', $request->id)->delete();

        if ($del) {
            return redirect('admin/tentangkami')->with('success', 'Data Berhasil Dihapus.');
        }
    }
}
