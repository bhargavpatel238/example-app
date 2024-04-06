<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            [
            'name'=>'LG Mobile',
            'Price'=>'10000',
            'description'=>'This is smart mobile of  LG brand',
            'category'=>'mobile',
            'gallery'=>'https://fdn2.gsmarena.com/vv/bigpic/lg-w31-plus.jpg'],
            [
            'name'=>'Sony Mobile',
            'Price'=>'40000',
            'description'=>'This is smart mobile of  Sony brand',
            'category'=>'mobile',
            'gallery'=>'https://i5.walmartimages.com/asr/36b1053d-9e62-4c7d-b34d-df905ef3a873_1.9f02d6a61bc2bfe4b100b8b657a551be.jpeg'],
            [
            'name'=>'Samsung Mobile',
            'Price'=>'30000',
            'description'=>'This is smart mobile of  Samsung brand',
            'category'=>'mobile',
            'gallery'=>'https://bpc.h-cdn.co/assets/16/14/1459802873-samsung-galaxy-note5.jpg'],
            [
            'name'=>'Sony Tv',
            'Price'=>'50000',
            'description'=>'This is smart tv of  Sony brand',
            'category'=>'tv',
            'gallery'=>'https://i5.walmartimages.com/asr/cf88d4f8-60bc-432f-b710-108015cbbda2_1.675d0c532b02559a72b2b0d390b83867.jpeg'],
            [
            'name'=>'Oppo Mobile',
            'Price'=>'20000',
            'description'=>'This is smart mobile of  Oppo brand',
            'category'=>'mobile',
            'gallery'=>'https://imgk.timesnownews.com/story/Oppo_A5_2020.jpg'],
            
        ]);
    }
}
