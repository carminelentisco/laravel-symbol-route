<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index() {
        $title = 'INFO';
        return view('/info', compact('title'));
    }
}
