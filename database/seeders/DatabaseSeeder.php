<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\question;
use App\Models\User;
use App\Models\answer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(5)->create();

        User::create([
            'name' => 'Angela',
            'username' => 'Angel-mahasiswa',
            'email' => 'angel@email.com',
            'no_hp' => '123456789',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
        ]);

        User::create([
            'name' => 'Aurel',
            'username' => 'aurel-konselorSebaya',
            'password' => Hash::make('password'),
            'email' => 'aurel@email.com',
            'no_hp' => '987654321',
            'role' => 'sebaya',
            'keahlian' => 'kecemasan',
            'deskripsi' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae perferendis quaerat ullam?',
        ]);

        User::create([
            'name' => 'Dina',
            'username' => 'dina-admin',
            'password' => Hash::make('password'),
            'email' => 'dina@email.com',
            'no_hp' => '456789902',
            'role' => 'admin',
        ]);


    }
}
