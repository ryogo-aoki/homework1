<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // テーブルのクリア
        DB::table('goods')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $goods = [
            ['title' => 'apple',
            'description' => 'この商品は赤くて甘いです。けどなんだかんだ梨の方がおいしいと思う',
            'price' => 500,
            'image' => 'https://paprikabacket.s3-ap-northeast-1.amazonaws.com/apple.png'],
            ['title' => 'banana',
            'description' => 'これは黄色い果物です。皮を剥くのは簡単です。運動前後に食べる人がいます',
            'price' => 200,
            'image' => 'https://paprikabacket.s3-ap-northeast-1.amazonaws.com/banana.png'],
            ['title' => 'human',
            'description' => '最も愚かな生物と呼ばれる節があります。けど、最も愚かだと言っているものも人間です。',
            'price' => 1000,
            'image' => 'https://paprikabacket.s3-ap-northeast-1.amazonaws.com/human.png'],
          ];

          // 登録
          foreach($goods as $good) {
            \App\Models\Good::create($good);
          }
    }
}
