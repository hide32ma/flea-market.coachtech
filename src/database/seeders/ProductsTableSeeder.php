<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => '腕時計',
                'price' => 15000,

                'category_id' => null,

                'user_id' => null,

                'explantion' => 'スタイリッシュなデザインのメンズ腕時計',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',

                'condition' => '良好',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'HDD',
                'price' => 5000,

                'category_id' => null,

                'user_id' => null,

                'explantion' => '高速で信頼性の高いハードディスク',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',

                'condition' => '目立った傷や汚れなし',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => '玉ねぎ3束',
                'price' => 300,

                'category_id' => null,

                'user_id' => null,

                'explantion' => '新鮮な玉ねぎ3束のセット',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',

                'condition' => 'やや傷や汚れあり',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => '革靴',
                'price' => 4000,

                'category_id' => null,

                'user_id' => null,

                'explantion' => 'クラシックなデザインの革靴',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',

                'condition' => '状態が悪い',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'ノートPC',
                'price' => 45000,

                'category_id' => null,

                'user_id' => null,

                'explantion' => '高性能なノートパソコン',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',

                'condition' => '良好',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'マイク',
                'price' => 8000,

                'category_id' => null,

                'user_id' => null,

                'explantion' => '高音質のレコーディング用マイク',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',

                'condition' => '目立った傷や汚れなし',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'ショルダーバッグ',
                'price' => 3500,

                'category_id' => null,

                'user_id' => null,

                'explantion' => 'おしゃれなショルダーバッグ',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',

                'condition' => 'やや傷や汚れあり',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'タンブラー',
                'price' => 500,

                'category_id' => null,

                'user_id' => null,

                'explantion' => '使いやすいタンブラー',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',

                'condition' => '状態が悪い',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'コーヒーミル',
                'price' => 4000,

                'category_id' => null,

                'user_id' => null,

                'explantion' => '手動のコーヒーミル',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',

                'condition' => '良好',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'メイクセット',
                'price' => 2500,

                'category_id' => null,

                'user_id' => null,

                'explantion' => '便利なメイクアップセット',

                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',

                'condition' => '目立った傷や汚れなし',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}
