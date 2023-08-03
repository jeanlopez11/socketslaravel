<x-app-layout>
    @php
        $users = \App\Models\User::all();
    @endphp
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <label id="resultado">
        @livewire('usuarios')
    </label>

    <script src="{{ asset('livewire.js') }}"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Pusher.logToConsole = true;
            var pusher = new Pusher('9c2f8a82edff5e35666c', {
                cluster: 'sa1'
            });
            var channel = pusher.subscribe('channel-update-table-user');
            channel.bind('actualizar-tabla-user', function(data) {
                console.log(data);
                Livewire.emit('actualizarTabla');
            });
        });


        // Your code here...
        // window.Echo.channel('channel-update-table-user')
        //     .listen('actualizar-tabla-user', function(data) {
        //         // Actualizar la tabla con los nuevos datos
        //         // document.getElementById("resultado").innerHTML = data;
        //         console.log('hola');
        //         alert('hola');
        //     });
    </script>
</x-app-layout>
