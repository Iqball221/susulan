<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class suplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => 'mulki', 'alamat' => 'bojong', 'kode_pos' => 1111, 'kota' => 'bandung'],
            ['nama' => 'agung', 'alamat' => 'rancamanyar', 'kode_pos' => 1112, 'kota' => 'bandung'],
            ['nama' => 'bayu', 'alamat' => 'maluku', 'kode_pos' => 1113, 'kota' => 'bandung'],
            ['nama' => 'asep', 'alamat' => 'bojongsoang', 'kode_pos' => 1114, 'kota' => 'bandung'],
            ['nama' => 'candra', 'alamat' => 'tci', 'kode_pos' => 1115, 'kota' => 'bandung'],
        ];
// masukkan data ke database
DB::table('supliers')->insert($suplier);
    }
}
