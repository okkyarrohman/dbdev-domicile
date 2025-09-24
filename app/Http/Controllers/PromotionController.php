<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerPromo;
use App\Models\Promotion;


class PromotionController extends Controller
{
    public function index(){
        $promotions = Promotion::latest()->paginate(6);
        $banners    = BannerPromo::latest()->paginate(6);
        return view('promotion', compact('promotions', 'banners'));
    }
}
