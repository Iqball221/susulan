<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'jam', 'nama_suplier' => 'agung', 'qty' => 1, 'tgl' => '12'],
            ['nama_barang' => 'kursi', 'nama_suplier' => 'mulki', 'qty' => 1, 'tgl' => '11'],
            ['nama_barang' => 'meja', 'nama_suplier' => 'bayu', 'qty' => 1, 'tgl' => '13'],
            ['nama_barang' => 'pc', 'nama_suplier' => 'whildan', 'qty' => 1, 'tgl' => '14'],
            ['nama_barang' => 'monitor', 'nama_suplier' => 'asep', 'qty' => 1, 'tgl' => '15'],
        ];
// masukkan data ke database
        DB::table('pembelians')->insert($pembelian);
    
    }
}
