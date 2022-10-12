<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(5)->create([
            'center_id' => 2
        ]);

        \App\Models\Center::factory(7)->create();

        \App\Models\Resource::factory(10)->create();

        \App\Models\Resource::factory()->create([
            'product_name' => "Sacapuntas",
            'center_id' => 1,
            'description' => 'Sacapuntas que me sobraron',
            'resources_quantity' => 7,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);

    }
}
