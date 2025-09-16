<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::all(); // ambil semua menu
        return view('welcome', compact('menus'));
    }
}
