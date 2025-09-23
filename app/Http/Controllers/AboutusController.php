<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $news = collect([
            (object)[
                'title' => 'New Opening',
                'excerpt' => 'Our story begins in Surabaya — stay tuned for our grand launch.',
                'image' => 'assets/img/1.jpg'
            ],
            (object)[
                'title' => 'Signature Dish',
                'excerpt' => 'Discover our caramelized butter crab – a must-try for seafood lovers.',
                'image' => 'assets/img/2.jpg'
            ],
            (object)[
                'title' => 'Signature Dish',
                'excerpt' => 'Discover our caramelized butter crab – a must-try for seafood lovers.',
                'image' => 'assets/img/2.jpg'
            ],
            (object)[
                'title' => 'Signature Dish',
                'excerpt' => 'Discover our caramelized butter crab – a must-try for seafood lovers.',
                'image' => 'assets/img/2.jpg'
            ],
            (object)[
                'title' => 'Signature Dish',
                'excerpt' => 'Discover our caramelized butter crab – a must-try for seafood lovers.',
                'image' => 'assets/img/2.jpg'
            ],
            (object)[
                'title' => 'Signature Dish',
                'excerpt' => 'Discover our caramelized butter crab – a must-try for seafood lovers.',
                'image' => 'assets/img/2.jpg'
            ],
            (object)[
                'title' => 'Signature Dish',
                'excerpt' => 'Discover our caramelized butter crab – a must-try for seafood lovers.',
                'image' => 'assets/img/2.jpg'
            ],
        ]);
        return view('aboutus', compact('news'));
    }
}
