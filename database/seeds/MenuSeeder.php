<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
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
                'name'       => '天然去污系列',
                'route_name' => 'null',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'name'       => '天然驅蟲系列',
                'route_name' => 'null',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'name'       => '清潔用品',
                'route_name' => 'null',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'name'       => '廚房用品',
                'route_name' => 'null',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'name'       => '精選文章',
                'route_name' => 'null',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'name'       => '訂購',
                'route_name' => 'order-page',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],

        ];


        DB::table('menu')->truncate();
        DB::table('menu')->insert($dates);
    }
}
