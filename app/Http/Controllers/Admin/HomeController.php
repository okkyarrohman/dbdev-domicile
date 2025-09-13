<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data dummy, nanti bisa ambil dari database
        $stats = [
            'orders_today' => 25,
            'total_menu' => 48,
            'best_seller' => 'Nasi Gudeg Spesial',
            'users' => 120,
        ];

        return view('admin.home', compact('stats'));    
    }
}
