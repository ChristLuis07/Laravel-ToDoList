<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index()
    {
        $nama = 'Christian';
        $data = ['nama' => $nama];
        return view('halo', $data);
    }
}
