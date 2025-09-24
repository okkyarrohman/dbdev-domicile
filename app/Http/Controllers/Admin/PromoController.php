<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;
use Illuminate\Support\Facades\Storage;
use App\Models\BannerPromo;

class PromoController extends Controller
{
public function index()
{
    $promotions = Promotion::latest()->paginate(6);
    $bannerPromos = BannerPromo::latest()->paginate(6);

    return view('admin.promotion', compact('promotions', 'bannerPromos'));
}

    public function store(Request $request)
    {
        $request->validate([
            'img'        => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'keterangan' => 'required|string|max:500',
        ]);

        // Simpan gambar
        $path = $request->file('img')->store('promotions', 'public');

        Promotion::create([
            'img'        => $path,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()
                         ->with('success', 'Promotion berhasil ditambahkan.');
    }
public function update(Request $request, $id)
{
    $promotion = Promotion::findOrFail($id);

    $request->validate([
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'keterangan' => 'required|string',
    ]);

    if ($request->hasFile('img')) {
        if ($promotion->img && Storage::disk('public')->exists($promotion->img)) {
            Storage::disk('public')->delete($promotion->img);
        }
        $promotion->img = $request->file('img')->store('promotions', 'public');
    }

    $promotion->keterangan = $request->keterangan;
    $promotion->save();

    return back()->with('success', 'Promotion berhasil diperbarui.');
}


    /**
     * Hapus promotion.
     */
    public function destroy($id)
    {
            $promotion = Promotion::findOrFail($id);

        if ($promotion->img && Storage::disk('public')->exists($promotion->img)) {
            Storage::disk('public')->delete($promotion->img);
        }

        $promotion->delete();

        return redirect()->back()->with('success', 'Promotion berhasil dihapus.');
    }

    public function bennerStore(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'nullable|string',
        ]);

        // Upload gambar
        $path = $request->file('img')->store('banner_promos', 'public');

        BannerPromo::create([
            'img' => $path,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()->with('success', 'Banner berhasil ditambahkan!');
    }

    /**
     * Update data banner
     */
    public function bennerUpdate(Request $request, $id)
    {
        $request->validate([
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'nullable|string',
        ]);

        $banner = BannerPromo::findOrFail($id);

        // Kalau ada file baru
        if ($request->hasFile('img')) {
            // Hapus file lama
            if ($banner->img && \Storage::disk('public')->exists($banner->img)) {
                \Storage::disk('public')->delete($banner->img);
            }

            $path = $request->file('img')->store('banner_promos', 'public');
            $banner->img = $path;
        }

        $banner->keterangan = $request->keterangan;
        $banner->save();

        return redirect()->back()->with('success', 'Banner berhasil diperbarui!');
    }

    /**
     * Hapus banner
     */
    public function bennerDestroy($id)
    {
        $banner = BannerPromo::findOrFail($id);

        // Hapus file dari storage
        if ($banner->img && \Storage::disk('public')->exists($banner->img)) {
            \Storage::disk('public')->delete($banner->img);
        }

        $banner->delete();

        return redirect()->back()->with('success', 'Banner berhasil dihapus!');
    }
}
