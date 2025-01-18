<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\EmpleadoFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            EstadoSeeder::class,
            DisponibilidadHerramientaSeeder::class
        ]);

        EmpleadoFactory::new()->count(15)->create();
    }
}
