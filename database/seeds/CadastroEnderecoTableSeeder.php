<?php

use Illuminate\Database\Seeder;

class CadastroEnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enderecos = App\Endereco::all();

        // Populate the pivot table
        App\Cadastro::all()->each(function ($cadastro) use ($enderecos) {
            $cadastro->enderecos()->syncWithoutDetaching(
                $enderecos->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
