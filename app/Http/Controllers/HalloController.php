<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function index()
    {
        return 'Hari ini saya mau menggangu';
    }
}
