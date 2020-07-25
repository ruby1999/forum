<?php

use Illuminate\Database\Seeder;

class StoreTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'id'=> '',
            'name' => '',
            'slug' => '',
            'tag' => '',
            'introduction' => '',
            'description' => '',
            'address' => '',
            'tel' => '',
            'store_IG' => '',
            'store_FB' => '',
            'open_time' => '',
            'colse_time' => '',
            'created_at' => '',
            'updated_at' => ''
        ]);

    }
}
