<?php

namespace App\Http\Controllers;

use App\Events\PusherActualizarTablaUserEvent;
use App\Models\User;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function enviar()
    {
        // $user = User::create([
        //     'name' => 'Luis',
        //     'email' => 'jean1xd@gmail.com',
        //     'password' => '12345678',
        // ]);
        $user = User::create(
            [
                'name' => \fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => '12345678',
            ]
        );
        event(new PusherActualizarTablaUserEvent('Pruebas desde controlador'));
    }
}
