<?php

use Illuminate\Database\Seeder;
use Symfony\Component\VarDumper\Cloner\Data;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UsersTableSeeder::class);

        $this->call(CadastroTableSeeder::class);
        $this->call(EnderecoTableSeeder::class);
        $this->call(FilmeFavoritoTableSeeder::class);
        $this->call(CadastroFilmesFavoritosTableSeeder::class);
        $this->call(CadastroEnderecoTableSeeder::class);





        // DB::table('cadastros')->insert([
        //     'nome' => Str::random(10),
        //     'sobrenome' => Str::random(10),
        //     'titulacao' => Str::random(10),
        //     'CPF' => Str::random(10),
        //     'RG' => Str::random(10),
        //     'email' => Str::random(10)
        // ]);
        // DB::table('enderecos')->insert([
        //     'CEP' => Str::random(10),
        //     'rua' => Str::random(15),
        //     'numero' => rand(1,2000),
        //     'bairro' => Str::random(10),
        //     'cidade' => Str::random(10),
        //     'complemento' => Str::random(10),
        //     'telefone' => rand(10000000,99999999)
        // ]);

        // DB::table('filmes_favoritos')->insert([
        //     'titulo' => Str::random(10),
        //     'ano_de_lancamento' => rand(2000,2018)."-".rand(0,12)."-".rand(00,28),
        //     'diretor' => Str::random(10)
        // ]);


        // DB::table('cadastro_filmes_favoritos')->insert([
        //     'cadastro_id' => "1",
        //     'filmes_favoritos_id' => "1"
        // ]);

        // DB::table('cadastro_endereco')->insert([
        //     'cadastro_id' => "1",
        //     'endereco_id' => "1"
        // ]);



    }
}
