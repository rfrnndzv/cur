<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Usuarios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark bg-opacity-25 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Contenido de la Página -->
                <div class="container">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Opciones</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('usuario.create') }}">Nuevo</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="">Otro</a></li>
                            </ul>
                        </li>
                    </ul>

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>C.I.</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Nivel</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody class="text-black">
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->ci }}</td>
                                    <td>{{ $usuario->nombres }}</td>
                                    <td>{{ $usuario->apellidos }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->nivel }}</td>
                                    <td><a href="{{ route('usuario.edit', $usuario->ci) }}"
                                            class="btn btn-warning">Editar</a></td>
                                    <td>
                                        <form action="{{ route('usuario.destroy', $usuario->ci) }}" method="POST"
                                            onclick="return confirm('¿Se eliminará registro?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>C.I.</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Nivel</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
