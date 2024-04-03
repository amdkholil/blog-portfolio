<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
        ]);
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@mail.com',
        ]);
        User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            CommentSeeder::class
        ]);
    }
}
