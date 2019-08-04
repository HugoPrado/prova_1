<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// cadastros

    // Home > Cadastros
    Breadcrumbs::for('cadastros', function ($trail) {
        $trail->parent('home');
        $trail->push('Cadastros', route('cadastros.index'));
    });

    // Home > Cadastros > Novo
    Breadcrumbs::for('cadastros.novo', function ($trail) {
        $trail->parent('cadastros');
        $trail->push('Novo', route('cadastros.create'));
    });

    // Home > Cadastros > Detalhes
    Breadcrumbs::for('cadastros.detalhes', function ($trail,$cadastro) {
        $trail->parent('cadastros');
        $trail->push($cadastro->nome, route('cadastros.show',$cadastro->id));
    });

    // Home > Cadastros > Detalhes > Adicionar emdereço
    Breadcrumbs::for('cadastros.detalhes.adicionar', function ($trail,$cadastro) {
        $trail->parent('cadastros.detalhes', $cadastro);
        $trail->push("Adicionar emdereço",  route('cadastroAdicionaEndereco',$cadastro->id));
    });

    // Home > Cadastros > Editar
    Breadcrumbs::for('cadastros.editar', function ($trail,$cadastro) {
        $trail->parent('cadastros');
        $trail->push('Editar', "CadastroController@edit/".$cadastro->id);
    });

// filmes

    // Home > Filmes
    Breadcrumbs::for('filmes', function ($trail) {
        $trail->parent('home');
        $trail->push('Filmes', action('FilmeFavoritoController@index'));
    });

    // Home > Filmes > Novo
    Breadcrumbs::for('filmes.novo', function ($trail) {
        $trail->parent('filmes');
        $trail->push('Novo', action('FilmeFavoritoController@create'));
    });

    // Home > Filmes > Detalhes
    Breadcrumbs::for('filmes.detalhes', function ($trail,$filmes) {
        $trail->parent('filmes');
        $trail->push($filmes->titulo, "FilmeFavoritoController@show/".$filmes->id);
    });

    // Home > Filmes > Editar
    Breadcrumbs::for('filmes.editar', function ($trail,$filmes) {
        $trail->parent('filmes');
        $trail->push('Editar', "FilmeFavoritoController@edit/".$filmes->id);
    });

// Enderecos

    // Home > Endereços
    Breadcrumbs::for('enderecos', function ($trail) {
        $trail->parent('home');
        $trail->push('Endereços', action('EnderecoController@index'));
    });

    // Home > Endereços > Novo
    Breadcrumbs::for('enderecos.novo', function ($trail) {
        $trail->parent('enderecos');
        $trail->push('Novo', action('EnderecoController@create'));
    });

    // Home > Endereços > Detalhes
    Breadcrumbs::for('enderecos.detalhes', function ($trail,$enderecos) {
        $trail->parent('enderecos');
        $trail->push('Detalhes', "EnderecoController@show/".$enderecos->id);
    });

    // Home > Endereços > Editar
    Breadcrumbs::for('enderecos.editar', function ($trail,$enderecos) {
        $trail->parent('enderecos');
        $trail->push('Editar', "EnderecoController@edit/".$enderecos->id);
    });


// // Home > About
// Breadcrumbs::for('about', function ($trail) {
//     $trail->parent('home');
//     $trail->push('About', route('about'));
// });

// // Home > Blog
// Breadcrumbs::for('blog', function ($trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });
