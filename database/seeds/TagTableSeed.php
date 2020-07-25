<?php

use Illuminate\Database\Seeder;

class TagTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'id'=> '',
            'name' => '',
            'created_at' => '',
            'updated_at' => ''
        ]);

    }
}
