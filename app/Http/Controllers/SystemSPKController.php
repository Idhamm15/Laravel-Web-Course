<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemSPKController extends Controller
{
    public function index()
     {
        return view ('pages.System-spk');
     }
}
