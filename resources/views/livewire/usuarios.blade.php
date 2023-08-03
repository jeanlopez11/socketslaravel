<div>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <button type="submit">Enviar y guardar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
