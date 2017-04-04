<?php

use Illuminate\Database\Seeder;

class SeedUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MOTTO
        DB::table('usuario')->insert([
            'nombres' => 'Dario Roman',
            'apellidos' => 'Araya Motto',
            'genero' => 'M',
            'fechanacimiento' => '1993/06/21',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'dario_aratto@hotmail.com',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
        //ALAM
        DB::table('usuario')->insert([
            'nombres' => 'Alam Ulises',
            'apellidos' => 'Lopez x2',
            'genero' => 'M',
            'fechanacimiento' => '1995/01/01',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'alam_lopez@hotmail.com',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
        //LOBO
        DB::table('usuario')->insert([
            'nombres' => 'Bryan Lobos',
            'apellidos' => 'Cruz',
            'genero' => 'M',
            'fechanacimiento' => '1995/01/01',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'bryan_lobos@hotmail.com',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
        //ELIAS
        DB::table('usuario')->insert([
            'nombres' => 'Elias',
            'apellidos' => 'Barrera',
            'genero' => 'M',
            'fechanacimiento' => '1995/01/01',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'elias_barrera@hotmail.com',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
        //RODRIGO
        DB::table('usuario')->insert([
            'nombres' => 'Rodrigo Daniel',
            'apellidos' => 'Romero',
            'genero' => 'M',
            'fechanacimiento' => '1993/01/01',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'rodrigo_romero@hotmail.com',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
    }
}
