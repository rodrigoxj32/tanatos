<?php

use Illuminate\Database\Seeder;

class SeedEstadoCivil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estadocivil')->insert([
            'nombreestadocivil' => 'Soltero',
            'descripcionestadocivil' => 'No tiene compromisos de ningun tipo',
        ]);
    }
}