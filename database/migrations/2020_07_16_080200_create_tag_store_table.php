<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_store', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->integer('tag_id')->comment('標籤id')->unsigned();
            $table->integer('store_id')->comment('產品id')->unsigned();
            $table->timestamp('created_at')->nullable()->comment('建立日期');
            $table->timestamp('updated_at')->nullable()->comment('更新日期');


            $table->index('tag_id');
            $table->index('store_id');

            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('store_id')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['tag_id']);
        Schema::dropForeign(['store_id']);
        Schema::dropIfExists('tag_store');
    }
}
