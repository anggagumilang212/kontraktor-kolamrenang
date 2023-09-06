<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Layanankami;
use App\Models\Tentangkami;
use App\Models\Testimoni;
use App\Models\Website;

class LandingpageController extends Controller
{
    public function landingpage()
    {
        $website = Website::first();
        $galeri = Galeri::all();
        $testimoni = Testimoni::all();
        $layanankami = Layanankami::all();
        $tentangkami = Tentangkami::first();
        return view('landingpage', compact('website', 'galeri', 'testimoni', 'tentangkami', 'layanankami'));
    }
    public function pagestentangkami()
    {
        $website = Website::first();
        $galeri = Galeri::all();
        $testimoni = Testimoni::all();
        $layanankami = Layanankami::all();
        $tentangkami = Tentangkami::first();
        return view('pages.tentangkami', compact('website', 'galeri', 'testimoni', 'tentangkami', 'layanankami'));
    }
    public function pageslayanankami()
    {
        $website = Website::first();
        $galeri = Galeri::all();
        $testimoni = Testimoni::all();
        $layanankami = Layanankami::all();
        $tentangkami = Tentangkami::first();
        return view('pages.layanankami', compact('website', 'galeri', 'testimoni', 'tentangkami', 'layanankami'));
    }
    public function pagesgalerikami()
    {
        $website = Website::first();
        $galeri = Galeri::all();
        $testimoni = Testimoni::all();
        $layanankami = Layanankami::all();
        $tentangkami = Tentangkami::first();
        return view('pages.galeri', compact('website', 'galeri', 'testimoni', 'tentangkami', 'layanankami'));
    }
    public function pagestestimoni()
    {
        $website = Website::first();
        $galeri = Galeri::all();
        $testimoni = Testimoni::all();
        $layanankami = Layanankami::all();
        $tentangkami = Tentangkami::first();
        return view('pages.testimoni', compact('website', 'galeri', 'testimoni', 'tentangkami', 'layanankami'));
    }

}
