<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show(string $id)
    {
        return $id;
    }

    public function about(string $id)
    {
        return "about me with ID {$id}";
    }
    public function name(string $nama, string $id)
    {
        return "about me with ID {$id} {$nama}";
    }
}
