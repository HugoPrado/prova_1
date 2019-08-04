<?php

use Illuminate\Database\Seeder;

class CadastroFilmesFavoritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmes = App\FilmeFavorito::all();

        // Populate the pivot table
        App\Cadastro::all()->each(function ($cadastro) use ($filmes) {
            $cadastro->filmesFavoritos()->syncWithoutDetaching(
                $filmes->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
