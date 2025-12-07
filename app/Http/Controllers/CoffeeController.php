<?php

namespace App\Http\Controllers;

use App\Models\MenuKopi;
use App\Models\JenisKopi;
use App\Models\Barista;

class CoffeeController extends Controller
{
    public function menuKopi()
    {
        $menu = MenuKopi::all();
        return view('menu-kopi', compact('menu'));
    }

    public function jenisKopi()
    {
        $jenis = JenisKopi::all();
        return view('jenis-kopi', compact('jenis'));
    }

    public function barista()
    {
        $barista = Barista::all();
        return view('barista', compact('barista'));
    }
}
