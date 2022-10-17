<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class IndexSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $data   = User::insertGetID([
            'name'      => 'fiqririzal',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('12345678')
        ]);
    }
}
