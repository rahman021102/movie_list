<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@binus.com',
            'password' => Hash::make('admin123'),
            'dob' => Carbon::make('2000-02-22'),
            'phone' => '08981118880',
            'image' => '',
            'role' => 'Admin'
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@binus.com',
            'password' => Hash::make('user123'),
            'dob' => Carbon::make('2000-02-22'),
            'phone' => '08981118880',
            'image' => '',
            'role' => 'User'
        ]);
    }
}