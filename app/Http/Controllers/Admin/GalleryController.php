<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery; // Import model Gallery
use Illuminate\Support\Facades\Storage; // Import Storage facade

class GalleryController extends Controller
{
    /**
     * Menampilkan daftar semua item galeri.
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('admin.gallery', compact('galleries'));
    }

    /**
     * Menampilkan form untuk membuat item galeri baru.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Menyimpan item galeri baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max:255',
        ]);
    
        // 2. Simpan gambar ke storage
        $imagePath = $request->file('image')->store('gallery', 'public');
    
        // 3. Buat entri baru di database
        Gallery::create([
            'image' => $imagePath,
            'description' => $request->description,
        ]);
    
        return redirect()->route('admin.galleries.index')->with('success', 'Gambar berhasil ditambahkan ke galeri.');
    }

    /**
     * Menampilkan form untuk mengedit item galeri.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Memperbarui item galeri di database.
     */
    public function update(Request $request, Gallery $gallery)
    {
        // 1. Validasi data
        $request->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max:255',
        ]);
    
        // 2. Perbarui gambar jika ada yang baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::disk('public')->delete($gallery->image_path);
    
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('gallery', 'public');
            $gallery->image_path = $imagePath;
        }
    
        // 3. Perbarui data deskripsi
        $gallery->description = $request->description;
        $gallery->save();
    
        return redirect()->route('admin.galleries.index')->with('success', 'Gambar galeri berhasil diperbarui.');
    }

    /**
     * Menghapus item galeri dari database.
     */
    public function destroy(Gallery $gallery)
    {
        // 1. Hapus gambar dari storage
        Storage::disk('public')->delete($gallery->image_path);
    
        // 2. Hapus entri dari database
        $gallery->delete();
    
        return redirect()->route('admin.galleries.index')->with('success', 'Gambar berhasil dihapus dari galeri.');
    }
}