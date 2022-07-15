<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['title' => 'Tips Cepat Nikah', 'content' => 'lorem ipsum'],
            ['title' => 'Haruskah menunda nikah?', 'content' => 'lorem ipsum'],
            ['title' => 'Membangun Visi Misi Keluarga?', 'content' => 'lorem ipsum'],
        ];

        //Masukan data ke dalam database
        DB::table('posts')->insert($sampel);

    }
}