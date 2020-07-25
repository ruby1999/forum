<?php

use Illuminate\Database\Seeder;

class CategoryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '風雨日記'
        ]);

        DB::table('categories')->insert([
            'name' => '優惠活動'
        ]);

        DB::table('categories')->insert([
            'name' => '飲品'
        ]);

        DB::table('categories')->insert([
            'name' => '甜塔'
        ]);

        DB::table('categories')->insert([
            'name' => '戚風'
        ]);

    }
}
