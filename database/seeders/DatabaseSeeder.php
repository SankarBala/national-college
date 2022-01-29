<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        DB::table('options')->insert(
            [
                ['key' => 'brand', 'value' => 'National College'],
                ['key' => 'tagline', 'value' => 'Learning Point'],
                ['key' => 'address', 'value' => 'Pragati Sharanee, Badda, Gulshan, Dhaka-1212'],
                ['key' => 'phone', 'value' => '+880-1745-993722'],
                ['key' => 'email', 'value' => 'query@nationalcollege.edu.bd']
            ]
        );
    }
}
