<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();
         Listing::factory(5)->create();

        // \App\Models\User::factory(10)->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior dev',
        //     'tags' => 'laravel, js',
        //     'company' => 'Acme corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https//:www.acme.com',
        //     'description' => 'Lorem ipsum dolor sits
        //     amet consectetur adipsiccing elist.'
        // ]);
    }
}
