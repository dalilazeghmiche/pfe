<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'subscription_price' => 49.99,
        ]);
        $group = Group::create([
            'name' => 'A',
            'max_members' => 25
        ]);
        User::factory(1)->create();
    }
}
