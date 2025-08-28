<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models as Models;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userInput['code'] = "CSINO00001";
        $userInput['role'] = "admin";
        $userInput['mobile'] = '8400244394';
        $userInput['email'] = 'mplussoftesting@gmail.com';
        $userInput['password'] = Hash::make('12345678');
        $userInput['status'] = 'active';
        $userInput['created_by'] = 'admin';
        $userInput['created_by_id'] = 1;
        $userInput['created_by_ip_address'] = '127.0.0.1';
        $response = Models\User::create($userInput);

        $adminInput['user_id'] = $response->id;
        $adminInput['name'] = "Mplussoft Technologies";
        $adminInput['address'] = "4013, 4014 Ganga Trueno Buisness Park, Viman Nagar, Pune";
        $adminInput['status'] = 'active';
        $adminInput['created_by'] = 'admin';
        $adminInput['created_by_id'] = 1;
        $adminInput['created_by_ip_address'] = '127.0.0.1';
        $response = Models\Admin::create($adminInput);
    }
}
