<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id')->comment('貼文id');
            $table->text('title')->comment('貼文名稱');
            $table->integer('category_id')->comment('貼文_類別_id')->unsigned();
            $table->longText('introduction')->nullable()->comment('簡述');
            $table->longText('description')->nullable()->comment('描述');
            $table->timestamp('created_at')->nullable()->comment('建立日期');
            $table->timestamp('updated_at')->nullable()->comment('更新日期');

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropForeign(['category_id']);
        Schema::dropIfExists('posts');
    }
}
