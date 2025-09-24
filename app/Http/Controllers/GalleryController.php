<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Menu;


class GalleryController extends Controller
{
    public function index()
    {
        $menus = Menu::get();
        $galleries = Gallery::paginate(9);
        return view('gallery', compact('galleries', 'menus'));
    }
}
