<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'account'  => 'admin',
                'password' => Hash::make('1234qwer'),
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ]


        ];


        DB::table('user')->truncate();
        DB::table('user')->insert($dates);
    }
}
