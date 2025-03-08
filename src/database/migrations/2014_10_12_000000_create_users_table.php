<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            // uniqueとは同じメールアドレスの重複登録を防ぐ
            $table->string('email')->unique();

            // メールアドレスが認証された日時を保存
            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');

            // ログイン状態を保持する機能
            $table->rememberToken();

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
        Schema::dropIfExists('users');
    }
}
