<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class Customer_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('customer')->insert([
            'name'=>'bpatel',
            'email'=>'b@gmail.com',
            'password'=>hash::make('12345')
        ]);
    }
}
