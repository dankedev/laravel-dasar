<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): string
    {
        return "ini adalah admin";
    }
    public function show(string $id): string
    {
        return "ini adalah admin {$id}";
    }
}
