<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $website = Website::all();
        return view('admin.datamaster.website', compact('website'));

    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        //     'youtube' => 'required',
        //     'twitter' => 'required',
        //     'instagram' => 'required',
        //     'facebook' => 'required',
        //     'map' => 'required',

        // ]);

        $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('fotowebsite/'), $imageName);
        Website::create([
            'nama' => $request->nama,
            'judul_website' => $request->judul_website,
            'foto' => $imageName,
            'deskripsi' => $request->deskripsi,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'google_map' => $request->google_map,
            'sosmed_fb' => $request->sosmed_fb,
            'sosmed_twitter' => $request->sosmed_twitter,
            'sosmed_instagram' => $request->sosmed_instagram,
            'sosmed_youtube' => $request->sosmed_youtube,
        ]);

        return redirect('admin/website')->with('success', 'Data Berhasil Dibuat.');
    }

    public function update(Request $request)
    {

        $imageName = $request->gambarLama;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $image->move(public_path('fotowebsite/'), $imageName);
        }
        $website = Website::where('id', $request->id)->update([
            'nama' => $request->nama,
            'judul_website' => $request->judul_website,
            'foto' => $imageName,
            'deskripsi' => $request->deskripsi,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'google_map' => $request->google_map,
            'sosmed_fb' => $request->sosmed_fb,
            'sosmed_twitter' => $request->sosmed_twitter,
            'sosmed_instagram' => $request->sosmed_instagram,
            'sosmed_youtube' => $request->sosmed_youtube,
        ]);

        if ($website) {
            return redirect('admin/website')->with('success', 'Data Berhasil Diedit.');
        }
    }

    public function delete(Request $request)
    {
        $del = Website::where('id', $request->id)->delete();

        if ($del) {
            return redirect('admin/website')->with('success', 'Data Berhasil Dihapus.');
        }
    }
}
