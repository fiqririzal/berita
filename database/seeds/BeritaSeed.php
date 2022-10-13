<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            'kategori_id'=>1,
            'judul'=>'pola hidup sehat',
            'gambar'=>'indomeie goreng',
            'slug'=>'asdadadsasad',
            'isi'=>'asdasdsadasdasdasdsadsa',
            'created_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('berita')->insert([
            'kategori_id'=>2,
            'judul'=>'pola hidup sehat',
            'gambar'=>'indomeie goreng',
            'slug'=>'asdadadsasad',
            'isi'=>'asdasdsadasdasdasdsadsa',
            'created_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('berita')->insert([
            'kategori_id'=>3,
            'judul'=>'pola hidup sehat',
            'gambar'=>'indomeie goreng',
            'slug'=>'asdadadsasad',
            'isi'=>'asdasdsadasdasdasdsadsa',
            'created_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('berita')->insert([
            'kategori_id'=>3,
            'judul'=>'pola hidup sehat',
            'gambar'=>'indomeie goreng',
            'slug'=>'asdadadsasad',
            'isi'=>'asdasdsadasdasdasdsadsa',
            'created_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
