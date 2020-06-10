<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheFigataContoller extends Controller
{
    public function index() {
        $title = 'CHE FIGATA';
        return view('/che-figata', compact('title'));
    }
}
