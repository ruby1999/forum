<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('store_media', function (Blueprint $table) {
            $table->increments('id')->comment('store_media_id');
            $table->string('store_id')->comment('店鋪id')->unsigned();
            $table->string('image')->nullable()->comment('圖片');
            $table->timestamp('created_at')->nullable()->comment('建立日期');
            $table->timestamp('updated_at')->nullable()->comment('更新日期');

            $table->index('store_id');

            $table->foreign('store_id')->references('store')->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store_media', function (Blueprint $table) {
            //
        });
    }
}
