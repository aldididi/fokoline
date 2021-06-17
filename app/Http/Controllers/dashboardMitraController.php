<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardMitraController extends Controller
{
    public function dashboardMitra()
    {
        return view('pages.dashboard');
    }
}
