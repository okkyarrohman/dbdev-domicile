<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        // 1. Validasi data yang masuk
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // 2. Simpan data ke database
        Message::create($validatedData);

        // 3. Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda berhasil terkirim!');
    }
}
