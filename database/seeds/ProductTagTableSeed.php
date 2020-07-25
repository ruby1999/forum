<?php

use Illuminate\Database\Seeder;

class StoreTagTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_tag')->insert([
            'id'=> '',
            'tag_id' => '',
            'product_id' => '',
            'created_at' => '',
            'updated_at' => ''
        ]);

    }
}
