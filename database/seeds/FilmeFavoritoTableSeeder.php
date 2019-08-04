<?php

use Illuminate\Database\Seeder;

class FilmeFavoritoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FilmeFavorito::class, 5)->create();
    }
}
