<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Postulantes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-dark bg-opacity-25 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Contenido de la Página -->
                <div class="container">
                    <ul class="nav nav-pills">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Opciones</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('postulante.create') }}">Nuevo</a></li>
                                <li><a class="dropdown-item" href="{{ route('postulante.importar') }}">Importar Notas</a></li>
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
                                <th>CPT</th>
                                <th>Monto</th>
                                <th>Foto</th>
                                <th>Carrera</th>
                                <th>Modalidad</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody class="text-black">
                            @foreach ($postulantes as $postulante)
                                <tr>
                                    <td>{{ $postulante->ci }}</td>
                                    <td>{{ $postulante->nombres }}</td>
                                    <td>{{ $postulante->apellidos }}</td>
                                    <td>{{ $postulante->cpt }}</td>
                                    <td>{{ $postulante->monto }}</td>
                                    <td><img src="{{ asset('storage').'/'.$postulante->foto }}" width="50px" alt=""></td>
                                    <td>{{ $postulante->carrera }}</td>
                                    <td>{{ $postulante->modalidad }}</td>
                                    <td>{{ $postulante->nota1 }}</td>
                                    <td>{{ $postulante->nota2 }}</td>
                                    <td><a href="{{ route('postulante.edit', $postulante->ci) }}"
                                            class="btn btn-warning">Editar</a>
                                    <td>
                                        <form action="{{ route('postulante.destroy', $postulante->ci) }}" method="POST"
                                            onclick="return confirm('¿Se eliminará registro?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('postulante.qrcode', $postulante->ci) }}"
                                            class="btn btn-success">QR</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>C.I.</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>CPT</th>
                                <th>Monto</th>
                                <th>Foto</th>
                                <th>Carrera</th>
                                <th>Modalidad</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th></th>
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
