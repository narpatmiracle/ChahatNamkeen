<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'name' => 'narpat',
            'email' => 'narpatrajpurohit.miracle@gmail.com',
            'Phone_no' => '987456329',
            'password' =>  Hash::make('123456789'),
            
            
        ];

        $admin = User::create($params);
    }
}
