<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PusherActualizarTablaUserEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;
    public function __construct($data = 'Hola, pruebas con pusher S/D')
    {
        $this->data = $data;
    }

    public function broadcastOn()
    {
        return new Channel('channel-update-table-user');
        // return [
        // new PrivateChannel('channel-update-table-user'),
        // new Channel('channel-update-table-user'),
        // ];
    }
    public function broadcastAs(): string
    {
        return 'actualizar-tabla-user';
    }
}
