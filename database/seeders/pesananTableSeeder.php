<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => 'mulki', 'nama_barang' => 'mouse', 'qty' => 1, 'tgl_pesan' => '10'],
            ['nama_pelanggan' => 'agung', 'nama_barang' => 'meja', 'qty' => 1, 'tgl_pesan' => '11'],
            ['nama_pelanggan' => 'candra', 'nama_barang' => 'kursi', 'qty' => 1, 'tgl_pesan' => '12'],
            ['nama_pelanggan' => 'asep', 'nama_barang' => 'baju', 'qty' => 1, 'tgl_pesan' => '13'],
            ['nama_pelanggan' => 'bayu', 'nama_barang' => 'kolor', 'qty' => 1, 'tgl_pesan' => '14'],
        ];
// masukkan data ke database
        DB::table('pesanans')->insert($pesanan);
    }
}
