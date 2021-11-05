<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class barangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama' => 'kursi', 'varian' => 'Razer', 'harga_beli' => 150000, 'harga_jual' => 150000],
            ['nama' => 'Mouse', 'varian' => 'Razer', 'harga_beli' => 100000, 'harga_jual' => 100000],
            ['nama' => 'stick Razer', 'varian' => 'Razer', 'harga_beli' => 170000, 'harga_jual' => 170000],
            ['nama' => 'jam', 'varian' => 'Cyber Punk', 'harga_beli' => 1000000, 'harga_jual' => 1000000],
            ['nama' => 'Meja Gaming', 'varian' => 'Cyber Punk', 'harga_beli' => 1000000, 'harga_jual' => 1000000],
        ];
// masukkan data ke database
        DB::table('barangs')->insert($barang);
    }
}
