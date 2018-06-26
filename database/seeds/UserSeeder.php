<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dates    = [
            [
                'name'=>'irvin',
                'email'=>'email',
                'password'=>'password',
                'remember_token'=>'remember_token',
            ],
        ];


        DB::table('users')->truncate();
        DB::table('users')->insert($dates);
    }
}