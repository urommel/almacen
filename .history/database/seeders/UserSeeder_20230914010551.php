<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'id' => 1, // El ID debe coincidir con el ID de la persona a la que pertenece este usuario
            'username' => 'admin',
            'password' => Hash::make('123'),
            'active' => true,
            'id_role' => 1, // El ID del rol que corresponda a este usuario
            'remember_token' =>Str::random(10), // Generar un token de recuerdo aleatorio
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
