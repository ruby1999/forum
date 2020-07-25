<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->comment('產品id');
            $table->string('name')->comment('產品名稱');
            $table->integer('category_id')->comment('產品_類別_id')->unsigned();
            $table->string('slug')->unique()->comment('產品slug');
            $table->longText('introduction')->nullable()->comment('簡述');
            $table->longText('description')->nullable()->comment('描述');
            $table->integer('price')->comment('產品價錢');;
            $table->string('image')->nullable()->comment('產品圖片');
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
        Schema::dropIfExists('products');
    }
}
