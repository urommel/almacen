<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('persons')->insert([
            'name' => 'Nombre de Ejemplo',
            'document_type' => 'DNI', // Puedes cambiar esto según el tipo de documento
            'document_number' => '12345678', // Número de documento
            'address' => 'Calle Ejemplo 123',
            'phone_number' => '123-456-7890',
            'email' => 'admin@test.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
