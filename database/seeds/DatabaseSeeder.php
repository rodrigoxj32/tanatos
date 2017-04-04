<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedEstadoCivil::class);
        $this->call(SeedRoles::class);
        $this->call(SeedUsuarios::class);
    }
}
