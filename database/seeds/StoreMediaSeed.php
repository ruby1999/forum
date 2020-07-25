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
            'store_id' => '',
            'image' => '',
            'created_at' => '',
            'updated_at' => ''
        ]);

    }
}
