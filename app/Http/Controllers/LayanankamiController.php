<?php

namespace App\Http\Controllers;

use App\Models\Layanankami;
use Illuminate\Http\Request;

class LayanankamiController extends Controller
{
    public function index()
    {
        $layanankami = Layanankami::all();
        return view('admin.datamaster.layanankami', compact('layanankami'));

    }

    public function store(Request $request)
    {
        $request->validate([

            'nama' => 'required',
            'deskripsi' => 'required',

        ]);

        Layanankami::create([

            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect('admin/layanankami')->with('success', 'Data Berhasil Dibuat.');
    }

    public function update(Request $request)
    {
        $request->validate([

            'nama' => 'required',
            'deskripsi' => 'required',

        ]);

        $layanankami = Layanankami::where('id', $request->id)->update([

            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,

        ]);

        if ($layanankami) {
            return redirect('admin/layanankami')->with('success', 'Data Berhasil Diedit.');
        }
    }

    public function delete(Request $request)
    {
        $del = Layanankami::where('id', $request->id)->delete();

        if ($del) {
            return redirect('admin/layanankami')->with('success', 'Data Berhasil Dihapus.');
        }
    }
}
