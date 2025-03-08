<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('image')->nullable();

            // enum 特定の決められた値のみを保存できるカラム
            $table->enum('condition', ['良好', '目立った傷や汚れなし', 'やや傷や汚れあり', '状態が悪い']);

            $table->string('name');
            $table->string('brand_name')->nullable;
            $table->text('explantion')->nullable;

            // decimal 金額や価格ならdecimalを使用する
            $table->decimal('price', 10, 2);

            // categoriesテーブルと繋がる
            $table->foreignId('category_id')->constrained()->onDelete('cascade');

            // usersテーブルと繋がる
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
