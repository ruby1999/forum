<?php

use Illuminate\Database\Seeder;

class ProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => '巧克力櫻桃戚風',
            'category_id' => '5',
            'slug' => 'cherry_chocolate',

            'introduction' => '幫你去籽好的新鮮櫻桃
            滿滿的夾在法芙那可可戚風裡面
            再加一些藍莓果醬增添風味
            可以說是親民版的無酒黑森林
            昨天還來不及po文就火速完銷',

            'description' => '幫你去籽好的新鮮櫻桃
            滿滿的夾在法芙那可可戚風裡面
            再加一些藍莓果醬增添風味
            可以說是親民版的無酒黑森林
            昨天還來不及po文就火速完銷',
            
            'price' => '130',
            'image' => ''
        ]);

        DB::table('products')->insert([
            'name' => '焙茶玫瑰覆盆子',
            'category_id' => '5',
            'slug' => 'hojicha_roseberry',
            'introduction' => '自帶仙氣的夢幻系美糕「焙茶玫瑰覆盆子」
            因為粉嫩的莓果奶油餡
            顏色變得溫柔婉約格外討喜
            
            內餡更是讓人意外驚喜的成熟焙茶風味
            搭上淡淡玫瑰尾韻香氣
            內外兼具的它
            是風雨的慶生暢銷款～',

            'description' => '自帶仙氣的夢幻系美糕「焙茶玫瑰覆盆子」
            因為粉嫩的莓果奶油餡
            顏色變得溫柔婉約格外討喜
            
            內餡更是讓人意外驚喜的成熟焙茶風味
            搭上淡淡玫瑰尾韻香氣
            內外兼具的它
            是風雨的慶生暢銷款～',

            'price' => '130',
            'image' => ''
        ]);

        DB::table('products')->insert([
            'name' => '',
            'category_id' => '',
            'slug' => '',
            'introduction' => '',
            'description' => '',
            'price' => '',
            'image' => ''
        ]);

        DB::table('products')->insert([
            'name' => '',
            'category_id' => '',
            'slug' => '',
            'introduction' => '',
            'description' => '',
            'price' => '',
            'image' => ''
        ]);

        DB::table('products')->insert([
            'name' => '',
            'category_id' => '',
            'slug' => '',
            'introduction' => '',
            'description' => '',
            'price' => '',
            'image' => ''
        ]);
    }
}
