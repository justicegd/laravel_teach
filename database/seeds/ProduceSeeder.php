<?php

use Illuminate\Database\Seeder;

class ProduceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');
        $dates    = [
            [
                'name'  => '天然洗衣槽清潔劑2入',
                'price' => '378',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'name'  => '天然橘子去污刷刷乳',
                'price' => '249',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],

        ];


        DB::table('product')->truncate();
        DB::table('product')->insert($dates);
    }
}
