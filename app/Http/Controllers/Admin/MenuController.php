<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;


class MenuController extends Controller
{
public function index(Request $request)
{
    $search   = $request->input('search');
    $favorite = $request->input('favorite'); // ambil dari query string

    $menus = Menu::when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                      ->orWhere('deskripsi', 'like', "%{$search}%");
                });
            })
            ->when($favorite !== null && $favorite !== '', function ($query) use ($favorite) {
                $query->where('favorite', $favorite); // filter favorit (0/1)
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9);

    return view('admin.menu', compact('menus', 'search', 'favorite'));
}
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $menu = Menu::findOrFail($id);

        // kalau ada gambar baru
        if ($request->hasFile('gambar')) {
            // hapus gambar lama kalau ada
            if ($menu->gambar && file_exists(storage_path('app/public/' . $menu->gambar))) {
                unlink(storage_path('app/public/' . $menu->gambar));
            }

            $gambarPath = $request->file('gambar')->store('menu', 'public');
            $menu->gambar = $gambarPath;
        }

        $menu->nama = $request->nama;
        $menu->deskripsi = $request->deskripsi;
        $menu->harga = $request->harga;
        $menu->favorite = $request->has('favorite');
        $menu->save();

        return redirect()->back()->with('success', 'Menu berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        // hapus gambar dari storage
        if ($menu->gambar && file_exists(storage_path('app/public/' . $menu->gambar))) {
            unlink(storage_path('app/public/' . $menu->gambar));
        }

        $menu->delete();

        return redirect()->back()->with('success', 'Menu berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // validasi gambar
        ]);

        // Simpan gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('menus', 'public');
            // file akan tersimpan di storage/app/public/menus
        }

        Menu::create([
            'nama'      => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga'     => $request->harga,
            'favorite'  => $request->has('favorite'),
            'gambar'    => $gambarPath, // simpan path gambar ke database
        ]);

        return redirect()->back()->with('success', 'Menu berhasil ditambahkan!');
    }

}
