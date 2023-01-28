<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index( Request $request)
    {
        $series = [
            'Ted Lasso',
            'Alice in borderland',
            'Casamento ás cegas'
        ];

        return view('series.index')-> with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }
}
