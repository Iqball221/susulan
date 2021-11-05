<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama' => 'mulki', 'jk' => 'laki laki', 'alamat' => 'bojong', 'kode_pos' => 1111, 'kota' => 'bandung' , 'tgl_lahir' => '11'],
            ['nama' => 'bayu', 'jk' => 'laki laki', 'alamat' => 'bojongsoang', 'kode_pos' => 1112, 'kota' => 'bandung' , 'tgl_lahir' => '10'],
            ['nama' => 'asepnrdn', 'jk' => 'laki laki', 'alamat' => 'bojongmalaka', 'kode_pos' => 1113, 'kota' => 'bandung' , 'tgl_lahir' => '12'],
            ['nama' => 'candra', 'jk' => 'laki laki', 'alamat' => 'bojongtanjung', 'kode_pos' => 1114, 'kota' => 'bandung' , 'tgl_lahir' => '13'],
            ['nama' => 'agung', 'jk' => 'laki laki', 'alamat' => 'bojongkaler', 'kode_pos' => 1115, 'kota' => 'bandung' , 'tgl_lahir' => '14'],
        ];
        // masukkan data ke database
                DB::table('pembelis')->insert($pembeli);
    }
}
