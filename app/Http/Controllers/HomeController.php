<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::where('favorite', 1)->get();
        return view('welcome', compact('menus'));
    }
}
