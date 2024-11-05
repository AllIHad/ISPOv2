<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ispo extends Controller
{
    public function landingPage()
    {

        return view('welcome');
    }

    public function dashboard() {

        return view('dashboard.index');
    }
}
