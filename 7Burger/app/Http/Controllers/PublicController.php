<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function menu() {
        return view('menu');
    }

    public function about() {
        return view('about');
    }

    public function locations() {
        return view('locations');
    }
}