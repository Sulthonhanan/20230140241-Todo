<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'nama' => 'Sulthon Hanan',
            'nim' => '20230140241',
            'prodi' => 'Teknik Informatika',
            'hobi' => 'Ngoding, Gaming, dan Membaca'
        ]);
    }
}
