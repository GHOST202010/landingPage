<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SitioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_landing()
    {
        $response = $this->get('/landingpage');

        $response->assertStatus(200);
    }
    public function test_pagina_contacto()
    {
        $response = $this->get('/contacto');
        $response->assertStatus(200);
        $response->assertSeeText(['Nombre', 'Correo', 'Descripción']);
    }
    public function test_envio_formulario_contacto_con_errores()
    {
        $response = $this->post('/contacto', [
            'name' => '',
            'email' => 'correo',
            'description' => '',
        ]);

        $response->assertSessionHasErrors([
            'name',
            'email',
            'description',
        ]);
    }
    public function test_prellenado_form_contacto()
    {
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);
        $this->assertEquals('Jake Smith', $response['name']);
        $this->assertEquals('Jake@hotmail.com', $response['email']);
        $this->assertEquals('Hola que tal, espero te encuentres bien. Estoy interesado en contactarte.', $response['description']);
    }
}
