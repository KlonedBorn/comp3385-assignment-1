<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Type\VoidType;

class AboutController extends Controller
{
    public function show()
    {
        return view('about');
    }

    public function view()
    {

    }
}
