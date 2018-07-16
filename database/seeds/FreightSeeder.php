<?php

use Illuminate\Database\Seeder;

class FreightSeeder extends Seeder
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
                'name'  => '黑貓宅配',
                'price' => '160',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'name'  => '新竹物流',
                'price' => '120',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'name'  => '7-11貨到付款',
                'price' => '60',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],

        ];


        DB::table('freight')->truncate();
        DB::table('freight')->insert($dates);
    }
}
