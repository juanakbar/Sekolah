<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   $data['beritas'] = Berita::all();
        $data['prestasis'] = Prestasi::all();   
        return view('website.beranda', $data);
    }
}
