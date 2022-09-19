<?php

use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'condition' => '新品',
            'type' => 'Tシャツ',
            'material' => '綿', 
            'frequency' => 'なし',
        ]);
        
        DB::table('options')->insert([
            'condition' => '購入して1年以内',
            'type' => 'ズボン',
            'material' => 'ポリエステル', 
            'frequency' => '週1回',
        ]);
        
         DB::table('options')->insert([
            'condition' => '購入して2年以内',
            'type' => 'Yシャツ',
            'material' => 'ウール', 
            'frequency' => '月1回',
        ]);
        
         DB::table('options')->insert([
            'condition' => '購入して3年以内',
            'type' => 'ズボン',
            'material' => 'レーヨン', 
            'frequency' => '年1回',
        ]);
    }
}
