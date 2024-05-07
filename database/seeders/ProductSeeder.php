<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'nama' => 'Product ' . $i,
                'harga' => 10000 * $i,
                'stok' => 10 * $i,
                'berat' => 200 * $i,
                'gambar' => 'https://awsimages.detik.net.id/community/media/visual/2023/09/02/kucing-ragdoll_169.jpeg?w=600&q=90',
                'kondisi' => 'Baru',
                'deskripsi' => 'Deskripsi produk ' . $i,
            ]);
        }
    }
}
