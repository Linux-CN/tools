<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function construction(Request $request)
    {
        return view('website.construction');
    }
}
