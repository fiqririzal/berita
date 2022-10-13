<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'kategori'=>'politik',
            'slug'=>'politik',
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('kategori')->insert([
            'kategori'=>'kesehatan',
            'slug'=>'kesehatan',
            'created_at'=>date('Y-m-d H:i:s'),
        ]);
        DB::table('kategori')->insert([
            'kategori'=>'kriminal',
            'slug'=>'kriminal',
            'created_at'=>date('Y-m-d H:i:s'),
        ]);

    }
}
