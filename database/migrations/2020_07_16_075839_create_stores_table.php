<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id')->comment('店鋪id');
            $table->string('name')->comment('店鋪名稱');
            $table->string('slug')->unique()->comment('店鋪slug');
            $table->string('tag')->unique()->nullable()->comment('店鋪標籤');
            $table->longText('introduction')->nullable()->comment('店鋪簡述');
            $table->longText('description')->nullable()->comment('店鋪描述');
            $table->text('address')->nullable()->comment('店鋪地址');
            $table->text('tel')->comment('店鋪電話');
            $table->string('store_IG')->nullable()->comment('店鋪IG');
            $table->string('store_FB')->nullable()->comment('店鋪FB');
            $table->time('open_time')->nullable()->comment('開店時間');
            $table->time('colse_time')->nullable()->comment('閉店時間');
            $table->timestamp('created_at')->nullable()->comment('建立日期');
            $table->timestamp('updated_at')->nullable()->comment('更新日期');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
