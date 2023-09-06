<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('admin.datamaster.testimoni', compact('testimoni'));

    }

    public function store(Request $request)
    {
        $request->validate([

            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'nama' => 'required',
            'profesi' => 'required',
            'deskripsi' => 'required',

        ]);

        $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('fototestimoni/'), $imageName);
        Testimoni::create([

            'foto' => $imageName,
            'nama' => $request->nama,
            'profesi' => $request->profesi,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect('admin/testimoni')->with('success', 'Data Berhasil Dibuat.');
    }

    public function update(Request $request)
    {
        $request->validate([

            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg,webp',
            'nama' => 'required',
            'profesi' => 'required',
            'deskripsi' => 'required',

        ]);
        $imageName = $request->gambarLama;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $image->move(public_path('fototestimoni/'), $imageName);
        }
        $testimoni = Testimoni::where('id', $request->id)->update([
            'foto' => $imageName,
            'nama' => $request->nama,
            'profesi' => $request->profesi,
            'deskripsi' => $request->deskripsi,

        ]);

        if ($testimoni) {
            return redirect('admin/testimoni')->with('success', 'Data Berhasil Diedit.');
        }
    }

    public function delete(Request $request)
    {
        $del = Testimoni::where('id', $request->id)->delete();

        if ($del) {
            return redirect('admin/testimoni')->with('success', 'Data Berhasil Dihapus.');
        }
    }
}
