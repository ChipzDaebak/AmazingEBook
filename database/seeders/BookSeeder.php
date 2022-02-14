<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebooks')->insert([
            [
                'title' => 'Sangonomiya Kokomi and Gorou',
                'author' => 'Vincent Ciptadi',
                'description' => 'Kokomi is a character that has a catalyst weapon with hydro vision, while Gorou is a character that has a bow weapon with geo vision'
            ],

            [
                'title' => 'Raiden Shogun and Kujou Sara',
                'author' => 'Vincent Ciptadi',
                'description' => 'Shogun is a character that has a polearm weapon with electro vision, while Sara is a character that has a bow electro with electro vision'
            ],

            [
                'title' => 'Jean and Klee',
                'author' => 'Vincent Ciptadi',
                'description' => 'Jean is a character that has a sword weapon with anemo vision, while Klee is a character that has a catalyst weapon with pyro vision'
            ]
        ]);
    }
}
