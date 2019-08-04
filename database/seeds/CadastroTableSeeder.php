<?php

use Illuminate\Database\Seeder;

class CadastroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cadastro::class, 5)->create();
    }
}

