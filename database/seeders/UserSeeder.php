<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'email' => 'angela@email.com ',
        //     'username' => 'Angela',
        //     'password' => Hash::make('password')
        // ]);

        User::create([
            'name' => 'Aurelya Ayu Ramadhani',
            'email' => 'aurelyaSebaya@email.com ',
            'username' => 'aurelyaSebaya',
            'password' => Hash::make('password'),
            'keahlian' => 'Relationship, Kecemasan, Pengembangan Diri',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, qui!',
            'role' => 'sebaya'
        ]);

        User::create([
            'name' => 'Joana Novena Putri, M.Psi., Psikolog',
            'email' => 'JoanaProfesional@email.com ',
            'username' => 'JoanaProfesional',
            'password' => Hash::make('password'),
            'keahlian' => 'Gangguan Kesulitan Tidur, Kecemasan, Integrasi Diri',
            'deskripsi' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, qui!',
            'role' => 'profesional',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com ',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
    }
}
