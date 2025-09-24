<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RestoranSeeder extends Seeder
{
    public function run(): void
    {
        // banner_promos
        DB::table('banner_promos')->insert([
            [
                'id' => 1,
                'img' => 'banner_promos/EnGiNw9ljlPHfq6gDySiuj3PuD1DrukEY95yaVsM.jpg',
                'keterangan' => 'asmdnasndmas',
                'created_at' => '2025-09-24 08:29:30',
                'updated_at' => '2025-09-24 08:29:30',
            ],
            [
                'id' => 2,
                'img' => 'banner_promos/LuT1G7FZQ2psEdnx42vVHi5sbqtYRiq7LetwZPpD.jpg',
                'keterangan' => 'asdsdasdasdds',
                'created_at' => '2025-09-24 08:55:55',
                'updated_at' => '2025-09-24 08:55:55',
            ],
        ]);

        // galleries
        DB::table('galleries')->insert([
            [
                'id' => 1,
                'image' => 'gallery/0zszh4UxpObv5UVDRrzw4A4EIuqW94YDrgy3uFGS.jpg',
                'description' => 'testes',
                'created_at' => '2025-09-24 10:10:47',
                'updated_at' => '2025-09-24 10:10:47',
            ],
            [
                'id' => 2,
                'image' => 'gallery/dnQqY1wfahh6iYFDz7N0IapIysMJFSEoDYyq3u3p.jpg',
                'description' => 'asdas',
                'created_at' => '2025-09-24 10:10:55',
                'updated_at' => '2025-09-24 10:10:55',
            ],
            [
                'id' => 3,
                'image' => 'gallery/rdphGZlNDwRXVJYTpvTn5fmMPojUZWghCJd4yQQs.jpg',
                'description' => null,
                'created_at' => '2025-09-24 10:11:02',
                'updated_at' => '2025-09-24 10:11:02',
            ],
            [
                'id' => 4,
                'image' => 'gallery/o2ZaDXxEumTuQXSzrRzpaKs4AEMghL7qTLVyd0T7.jpg',
                'description' => null,
                'created_at' => '2025-09-24 10:11:10',
                'updated_at' => '2025-09-24 10:11:10',
            ],
            [
                'id' => 5,
                'image' => 'gallery/A7khiGXIFGfkDrZeCAv92fr7qonNrTI6ukliw5eh.jpg',
                'description' => null,
                'created_at' => '2025-09-24 10:11:20',
                'updated_at' => '2025-09-24 10:11:20',
            ],
            [
                'id' => 6,
                'image' => 'gallery/4rP1vSn95OAICyaaxoz4alVyUgXcZ3yqjx95RHSG.jpg',
                'description' => null,
                'created_at' => '2025-09-24 10:11:30',
                'updated_at' => '2025-09-24 10:11:30',
            ],
        ]);

        // menus
        DB::table('menus')->insert([
            [
                'id' => 1,
                'nama' => 'Gudeg',
                'deskripsi' => 'asal dari jogja',
                'favorite' => 1,
                'gambar' => 'menus/zX2IF2qEb0EKn6eR5R2YtF1HxLRHEBGmzSuYSkKh.jpg',
                'created_at' => '2025-09-24 09:43:39',
                'updated_at' => '2025-09-24 09:43:39',
            ],
            [
                'id' => 2,
                'nama' => 'Pecel',
                'deskripsi' => 'khas madiun',
                'favorite' => 1,
                'gambar' => 'menus/8VnI8WIfiGfrfqFFK5apa3QV9PVVw7xnH492W6FT.jpg',
                'created_at' => '2025-09-24 09:44:05',
                'updated_at' => '2025-09-24 09:44:05',
            ],
            [
                'id' => 3,
                'nama' => 'Rawon',
                'deskripsi' => 'Khas Surabaya',
                'favorite' => 1,
                'gambar' => 'menus/v7I9tcdLGPIdMTzOb4cfWxmBcDLACqi94AHAw0Su.jpg',
                'created_at' => '2025-09-24 09:44:25',
                'updated_at' => '2025-09-24 09:44:25',
            ],
            [
                'id' => 4,
                'nama' => 'Rujak',
                'deskripsi' => 'Khas Surabaya',
                'favorite' => 1,
                'gambar' => 'menus/TjnkGFECVNu0UAqAIPFSVG4wo9zOzHvUcSK407Qe.jpg',
                'created_at' => '2025-09-24 09:44:55',
                'updated_at' => '2025-09-24 09:44:55',
            ],
            [
                'id' => 5,
                'nama' => 'Sate',
                'deskripsi' => 'Khas Surabaya',
                'favorite' => 1,
                'gambar' => 'menus/X3vm0SdJyVAjHQko0M8ZOUQpwh9ADQUmBrgMBAXX.jpg',
                'created_at' => '2025-09-24 09:45:11',
                'updated_at' => '2025-09-24 09:45:11',
            ],
            [
                'id' => 6,
                'nama' => 'Soto',
                'deskripsi' => 'Khas Lamongan',
                'favorite' => 0,
                'gambar' => 'menus/jjN6VUmiimTV3COIeuQMIKIoahRwS7r8pGIuAxgJ.jpg',
                'created_at' => '2025-09-24 09:45:43',
                'updated_at' => '2025-09-24 09:45:43',
            ],
        ]);

        // promotions
        DB::table('promotions')->insert([
            [
                'id' => 2,
                'img' => 'promotions/QokgqDqHXJ4mNPcrtBVJ3kTUQQtle3LQPiUeYOxN.png',
                'keterangan' => 'promo kepiting alaska',
                'created_at' => '2025-09-24 06:57:03',
                'updated_at' => '2025-09-24 06:57:03',
            ],
            [
                'id' => 3,
                'img' => 'promotions/WAg16mVPy2eBkAyg5a3I5kUbHvGpWidtIbXWbtAx.jpg',
                'keterangan' => 'promo kepiting aliska',
                'created_at' => '2025-09-24 07:15:59',
                'updated_at' => '2025-09-24 07:15:59',
            ],
            [
                'id' => 5,
                'img' => 'promotions/eIqayrpYZDF69MPDiK9aBkWmYigMeM1XTUlQFhZz.jpg',
                'keterangan' => 'promo kepiting aliskasdsa',
                'created_at' => '2025-09-24 07:18:28',
                'updated_at' => '2025-09-24 07:18:28',
            ],
        ]);

        // users
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => '2025-09-24 23:40:39',
            'password' => '$2y$12$ZfgI2JEQHd.bJ4opXKvKXuyIOO.FgKC3o36E0.YqdZ2iFFV3lKBWy', // sudah bcrypt
            'remember_token' => null,
            'created_at' => null,
            'updated_at' => '2025-09-24 09:40:56',
        ]);
    }
}
