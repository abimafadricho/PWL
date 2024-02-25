<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $nim = '2241720025';
        $nama = 'Abima Fadricho Syuhadak';

        return 'NIM : ' . $nim . '<br>' .
            'Nama : ' . $nama;
    }
}
