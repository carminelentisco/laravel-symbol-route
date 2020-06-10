<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CosaStoFacendoController extends Controller
{
    public function index() {
        $title = 'COSA STO FACENDO';
        return view('/cosa-sto-facendo', compact('title'));
    }
}
