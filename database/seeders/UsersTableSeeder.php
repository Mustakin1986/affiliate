<?php

namespace Database\Seeders;
use Database\Seeders\UsersSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*admin*/
        DB::table('users')->insert([
          [
            'full_name'=>'md mustakin ali',
            'user_name'=>'mustakin',
            'email'=>'mustakinali@gmail.com',
            'password'=>Hash::make('123'),
            'role'=>'admin',
            'status'=>'active',

          ],
          /*vendor*/
          [
            'full_name'=>'md vendor ali',
            'user_name'=>'vendor',
            'email'=>'vendor@gmail.com',
            'password'=>Hash::make('1234'),
            'role'=>'vendor',
            'status'=>'active',

          ],
          /*custormer*/
          [
            'full_name'=>'md customer ali',
            'user_name'=>'customer',
            'email'=>'customer@gmail.com',
            'password'=>Hash::make('12345'),
            'role'=>'customer',
            'status'=>'active',

          ],
        ]);
    }
}
