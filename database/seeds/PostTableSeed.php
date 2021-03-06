<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; //引用建立create_at

class PostTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => '2020/07/22',
            'category_id' => '1',
            'image' => '1595398234.jpg',

            'introduction' => '新鮮無花果大家有吃過嗎？
            淡淡的清甜香味，軟嫩口感激似水蜜桃
            較不常見的新鮮無花果
            除了營養價值高外售價也偏高
            但是為了給大家特別的口味
            我們捏大腿也要訂下去😂😂
            
            有看到它在架上就別猶豫了
            不是每個地方都吃的到啊！！
            「無花果紅玉戚風」
            今天有切片販售～',

            'description' => '新鮮無花果大家有吃過嗎？
            淡淡的清甜香味，軟嫩口感激似水蜜桃
            較不常見的新鮮無花果
            除了營養價值高外售價也偏高
            但是為了給大家特別的口味
            我們捏大腿也要訂下去😂😂
            
            有看到它在架上就別猶豫了
            不是每個地方都吃的到啊！！
            「無花果紅玉戚風」
            今天有切片販售～',
        
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()  
        ]);

        DB::table('posts')->insert([
            'title' => '2020/07/23',
            'category_id' => '1',
            'image' => '1595398234.jpg',

            'introduction' => '大考結束了！！恭喜所有辛苦的考生們
            用夏季獨有的香甜滋味來好好慶祝一下吧
            
            充滿炭香醇厚的鐵觀音戚風
            夾層荔枝果凍放入滿滿的荔枝果肉
            這款清爽系的茶戚風
            絕對是我們這個夏季自豪的代表作
            極力推薦給需要慶生蛋糕的朋友們
            這麼獨特的口味
            讓壽星驚艷一下許的願望都成真～
            荔枝盛產季節，歡迎整模預訂喔',

            'description' => '大考結束了！！恭喜所有辛苦的考生們
            用夏季獨有的香甜滋味來好好慶祝一下吧
            
            充滿炭香醇厚的鐵觀音戚風
            夾層荔枝果凍放入滿滿的荔枝果肉
            這款清爽系的茶戚風
            絕對是我們這個夏季自豪的代表作
            極力推薦給需要慶生蛋糕的朋友們
            這麼獨特的口味
            讓壽星驚艷一下許的願望都成真～
            荔枝盛產季節，歡迎整模預訂喔',
        
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()  
        ]);

        DB::table('posts')->insert([
            'title' => '七月份優惠',
            'category_id' => '2',
            'image' => '1595398234.jpg',

            'introduction' => '放暑假了! 七月份限定優惠
            蛋糕搭配飲品折價20元
            快揪朋友一起來吃甜甜吧',

            'description' => '放暑假了! 七月份限定優惠
            蛋糕搭配飲品折價20元
            快揪朋友一起來吃甜甜吧',
        
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()  
        ]);

        DB::table('posts')->insert([
            'title' => '八月份優惠',
            'category_id' => '2',
            'image' => '1595398234.jpg',

            'introduction' => '爸爸的蛋糕來了～！
            是說父親節好像比較沒有詢問熱度
            咖嘛！爸爸也是等同重要的好嗎～
            
            說到老爸，當然就是要以茶來入糕呀！
            焙茶、抹茶、玄米茶都吃過了
            那麼今年來點不一樣的好嗎
            嚴選兩款台茶（炭焙烏龍/ 四季春）作為主角
            與不同食材風味搭配測試
            推出了一款生乳慕斯及一款戚風給大家選
            每次都推兩款真是燒光不少腦細胞
            不過沒關係我們就是那麼誠意十足的甜點狂人！',

            'description' => '爸爸的蛋糕來了～！
            是說父親節好像比較沒有詢問熱度
            咖嘛！爸爸也是等同重要的好嗎～
            
            說到老爸，當然就是要以茶來入糕呀！
            焙茶、抹茶、玄米茶都吃過了
            那麼今年來點不一樣的好嗎
            嚴選兩款台茶（炭焙烏龍/ 四季春）作為主角
            與不同食材風味搭配測試
            推出了一款生乳慕斯及一款戚風給大家選
            每次都推兩款真是燒光不少腦細胞
            不過沒關係我們就是那麼誠意十足的甜點狂人！',
        
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()  
        ]);

    }
}
