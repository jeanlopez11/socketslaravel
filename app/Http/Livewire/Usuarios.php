<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Usuarios extends Component
{
    public $usuarios;
    protected $listeners = ['actualizarTabla'];

    public function construc()
    {
        $this->usuarios = new User();
    }

    public function mount()
    {
        $this->usuarios = User::all();
    }
    public function render()
    {
        return view('livewire.usuarios');
    }
    public function actualizarTabla()
    {
        $this->usuarios = User::all();
    }
}
