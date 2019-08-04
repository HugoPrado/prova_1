<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class CadastroControllerTest extends TestCase
{
    // /**
    //  * A basic feature test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);

    // }

    /**
    * @test
    */
    public function it_test_if_cadastro_index_route_return_valid_page()
    {


        // //usuario deslogado é redirecionado para login
        // $response = $this->get(route('cadastros.index'));
        // $response->assertRedirect('login');


        // //usuario logado é redirecionado visualisa cadastro
        // $user = factory(User::class)->make();
        // $response = $this->actingAs($user)->get(route('cadastros.index'));
        // $response->assertSuccessful();


        $this->withoutMiddleware();
        $response = $this->get(route('cadastros.index'));
        $response->assertSuccessful();

    }

}
