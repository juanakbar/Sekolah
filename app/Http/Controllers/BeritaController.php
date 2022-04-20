<?php

namespace App\Http\Controllers;


use App\Models\Prestasi;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index()
    {   $data['beritas'] = Berita::all();
        $data['prestasis'] = Prestasi::all();   
        return view('website.beranda', $data);
    }

    public function berita()
    {   
        return view('website.berita',
        [
            'beritas'=>Berita::all(),
            "title" => "Home",
        ]);
    }
    
    public function show(Berita $berita)
    {
        return view('website.single-berita', [
            'berita' => $berita,
            "title"  => "Home"
        ]);
    }

    // public function prestasi()
    // {
    //     $prestasi = DB::table('prestasis')->get();
    //     return view('website.beranda', [
    //         "title"  => "Home"
    //     ]);
    // }
}
