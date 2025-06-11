<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorsTableSeeder::class);
        DB::table('fruits')->insert([
            ['name' => 'キウイ', 'image_path' => 'images/kiwi.jpg'],
            ['name' => 'ストロベリー', 'image_path' => 'images/strawberry.jpg'],
            ['name' => 'オレンジ', 'image_path' => 'images/orange.jpg'],
            ['name' => 'スイカ', 'image_path' => 'images/watermelon.jpg'],
            ['name' => 'ピーチ', 'image_path' => 'images/peach.jpg'],
            ['name' => 'シャインマスカット', 'image_path' => 'images/shine_muscat.jpg'],
            ['name' => 'パイナップル', 'image_path' => 'images/pineapple.jpg'],
            ['name' => 'ブドウ', 'image_path' => 'images/grape.jpg'],
            ['name' => 'バナナ', 'image_path' => 'images/banana.jpg'],
            ['name' => 'メロン', 'image_path' => 'images/melon.jpg'],
        ]);
    }
}