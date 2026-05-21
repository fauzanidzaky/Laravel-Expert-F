<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function home() {
        return view('home');
    }

    public function tentang() {
        return view('tentang');
    }

    public function jasa() {
        return view('services');
    }

    public function keahlian() {
        // Logika Array Grafik dipindahkan ke sini sesuai standar MVC Laravel
        $labels = ['Mekanik CAD', 'Elektronika Embedded', 'Pemrograman PLC', 'Sistem Kontrol', 'Pneumatik & Hidrolik'];
        $data_persen = [85, 90, 75, 80, 70];

        $warna_bg_list = ['rgba(52, 152, 219, 0.75)', 'rgba(46, 204, 113, 0.75)', 'rgba(231, 76, 60, 0.75)', 'rgba(155, 89, 182, 0.75)', 'rgba(241, 196, 15, 0.75)'];
        $warna_bd_list = ['rgba(52, 152, 219, 1)', 'rgba(46, 204, 113, 1)', 'rgba(231, 76, 60, 1)', 'rgba(155, 89, 182, 1)', 'rgba(241, 196, 15, 1)'];

        $warna_bg_dinamis = [];
        $warna_bd_dinamis = [];
        $index_warna = 0;

        foreach ($labels as $label) {
            $warna_bg_dinamis[] = $warna_bg_list[$index_warna % count($warna_bg_list)];
            $warna_bd_dinamis[] = $warna_bd_list[$index_warna % count($warna_bd_list)];
            $index_warna++;
        }

        return view('skills', compact('labels', 'data_persen', 'warna_bg_dinamis', 'warna_bd_dinamis'));
    }

    public function kontak() {
        return view('contact');
    }
}
