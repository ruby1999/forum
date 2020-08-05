<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

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
            'name' => '風雨日記',
            'created_at'=>Carbon::now(),  // 對應 timestamps 的 created_at 列位
            'updated_at'=>Carbon::now()  // 對應 timestamps 的 updated_at 列位
        ]);

        DB::table('categories')->insert([
            'name' => '優惠活動',
            'created_at'=>Carbon::now(),  // 對應 timestamps 的 created_at 列位
            'updated_at'=>Carbon::now()  // 對應 timestamps 的 updated_at 列位
        ]);

        DB::table('categories')->insert([
            'name' => '飲品',
            'created_at'=>Carbon::now(),  // 對應 timestamps 的 created_at 列位
            'updated_at'=>Carbon::now()  // 對應 timestamps 的 updated_at 列位
        ]);

        DB::table('categories')->insert([
            'name' => '甜塔',
            'created_at'=>Carbon::now(),  // 對應 timestamps 的 created_at 列位
            'updated_at'=>Carbon::now()  // 對應 timestamps 的 updated_at 列位
        ]);

        DB::table('categories')->insert([
            'name' => '戚風',
            'created_at'=>Carbon::now(),  // 對應 timestamps 的 created_at 列位
            'updated_at'=>Carbon::now()  // 對應 timestamps 的 updated_at 列位
        ]);

        //$this->call(CategoryTableSeed::class);

    }
}
