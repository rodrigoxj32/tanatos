<?php

use Illuminate\Database\Seeder;

class SeedRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombrerol' => 'Administrador',
            'descripcionrol' => 'No tiene restriccion',
        ]);
    }
}

