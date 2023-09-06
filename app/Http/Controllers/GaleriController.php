<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.datamaster.galeri', compact('galeri'));

    }

    public function store(Request $request)
    {
        $request->validate([

            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'judul_foto' => 'required',
            'lokasi' => 'required',

        ]);

        $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('fotogaleri/'), $imageName);
        Galeri::create([

            'foto' => $imageName,
            'judul_foto' => $request->judul_foto,
            'lokasi' => $request->lokasi,

        ]);

        return redirect('admin/galeri')->with('success', 'Data Berhasil Dibuat.');
    }

    public function update(Request $request)
    {
        // $request->validate([

        //     'foto' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
        //     'judul_foto' => 'required',
        //     'lokasi' => 'required',

        // ]);
        $imageName = $request->gambarLama;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $image->move(public_path('fotogaleri/'), $imageName);
        }
        $galeri = Galeri::where('id', $request->id)->update([
            'foto' => $imageName,
            'judul_foto' => $request->judul_foto,
            'lokasi' => $request->lokasi,
        ]);

        if ($galeri) {
            return redirect('admin/galeri')->with('success', 'Data Berhasil Diedit.');
        }
    }

    public function delete(Request $request)
    {
        $del = Galeri::where('id', $request->id)->delete();

        if ($del) {
            return redirect('admin/galeri')->with('success', 'Data Berhasil Dihapus.');
        }
    }
}
