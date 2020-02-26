<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class KategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'kategori' => 'Seni & Budaya',
        ]);

        DB::table('categories')->insert([
            'kategori' => 'Olah Raga',
        ]);
    }
}
