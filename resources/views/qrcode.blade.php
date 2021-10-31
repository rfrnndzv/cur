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
                                <li><a class="dropdown-item" href="{{ route('postulante.index') }}">Retornar</a></li>
                                <li><a class="dropdown-item" href="">Generar PDF</a></li>
                            </ul>
                        </li>
                
                    </ul>

                    <div class="row">
                        <div class="col-2">
                            <img src="{{ asset('storage').'/'.$postulante->foto }}" width="150px" alt="">
                        </div>
                        <div class="col-6">
                            <div class="col">
                                <label for="">C.I.: {{ $postulante->ci }}</label>
                            </div>
                            <div class="col">
                                <label for="">Nombre(s): {{ $persona->nombres }}</label>
                            </div>
                            <div class="col">
                                <label for="">Apellido(s): {{ $persona->apellidos }}</label>
                            </div>
                            <div class="col">
                                <label for="">CPT: {{ $postulante->cpt }}</label>
                            </div>
                            <div class="col">
                                <label for="">Monto: {{ $postulante->monto }}</label>
                            </div>
                            <div class="col">
                                <label for="">Carrera/Programa:
                                    @switch($postulante->carrera)
                                        @case('medicina')
                                            Medicina
                                            @break
                                        @case('enfermería')
                                            Enfermería
                                            @break
                                        @default
                                        @case('nutrición')
                                            Nutrición y Dietética
                                            @break
                                        @case('fisioterapia')
                                            Tec.Med. Fisioterapia y Kinesiología
                                            @break
                                        @case('bioimagenología')
                                            Tec.Med. Bioimagenología
                                            @break
                                        @case('laboratorio')
                                            Tec.Med. Laboratorio Clínico
                                            @break
                                        @case('fonoaudiología')
                                            Prog. Fonoaudiología
                                            @break
                                        @case('terapia')
                                            Prog. Terapia Ocupacional
                                            @break
                                    @endswitch
                                </label>
                            </div>
                            <div class="col">
                                <label for="">Modalidad: {{ $postulante->modalidad }}</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->merge(public_path('img/LogoPA.png'), .3, true)->errorCorrection('H')->size(250)->generate($postulante->cpt)) }}" alt="">
                        </div>
                        
                        <a href="" class="btn btn-success">Generar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>