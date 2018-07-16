<?php

use Illuminate\Database\Seeder;

class FreightOfferSeeder extends Seeder
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
                'name'        => '滿800免運',
                'offer_price' => '800',
                'created_at'  => $datetime,
                'updated_at'  => $datetime,
            ],

        ];


        DB::table('freight_offer')->truncate();
        DB::table('freight_offer')->insert($dates);
    }
}
