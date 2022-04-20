<?php

namespace App\Http\Controllers;


use App\Models\Berita;


class BeritaController extends Controller
{
    

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
}
