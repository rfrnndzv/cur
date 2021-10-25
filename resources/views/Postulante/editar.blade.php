@extends('plantilla')

@section('content')
    <div class="container text-white">
        <h1>Registro de Usuario</h1>
        <form class="row g-3 needs-validation" action="{{ route('postulante.update', $postulante) }}" method="POST" enctype="multipart/form-data" novalidate>

            @csrf
            @method('PUT')

            <div class="col-md-4">
                <label for="ci" class="form-label">C.I./DNI</label>
                <input type="text" class="form-control" id="ci" name="ci" value="{{ $postulante->ci }}" required>
                <div class="invalid-feedback">
                    Ingrese su C.I.!
                </div>
            </div>

            <div class="col-md-4">
                <label for="nombres" class="form-label">Nombre(s)</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $persona->nombres }}" required>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>

            <div class="col-md-4">
                <label for="apellidos" class="form-label">Apellido(s)</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $persona->apellidos }}" required>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>

            <div class="col-md-4">
                <label for="cpt" class="form-label">CPT</label>
                <input type="mail" class="form-control" id="cpt" name="cpt" value="{{ $postulante->cpt }}" required>
                <div class="valid-feedback">
                    Correcto!
                </div>
            </div>

            <div class="col-md-4">
                <label for="monto" class="form-label">Monto</label>
                <input type="number" step="0.01" min="0.00" class="form-control" id="monto" name="monto" value="{{ $postulante->monto }}" required>
                <div class="invalid-feedback">
                    Ingrese Contraseña!
                </div>
            </div>

            <div class="col-md-4">
                <label for="carrera" class="form-label">Carrera</label>
                <select class="form-select" id="carrera" name="carrera" required>
                    <option
                        @if ($postulante->carrera == "medicina")
                            selected
                        @endif
                    value="medicina">Medicina</option>
                    <option
                        @if ($postulante->carrera == "enfermería")
                            selected
                        @endif
                    value="enfermería">Enfermería</option>
                    <option
                        @if ($postulante->carrera == "nutrición")
                            selected
                        @endif
                    value="nutrición">Nutrición y Dietética</option>
                    <option
                        @if ($postulante->carrera == "fisioterapia")
                            selected
                        @endif
                    value="fisioterapia">Tec.Med. Fisioterapia y Kinesiología</option>
                    <option
                        @if ($postulante->carrera == "bioimagenología")
                            selected
                        @endif
                    value="bioimagenología">Tec.Med. Bioimagenología</option>
                    <option
                        @if ($postulante->carrera == "laboratorio")
                            selected
                        @endif
                    value="laboratorio">Tec.Med. Laboratorio Clínico</option>
                    <option
                        @if ($postulante->carrera == "fonoaudiología")
                            selected
                        @endif
                    value="fonoaudiología">Prog. Fonoaudiología</option>
                    <option
                        @if ($postulante->carrera == "terapia")
                            selected
                        @endif
                    value="terapia">Prog. Terapia Ocupacional</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="modalidad" class="form-label">Modalidad</label>
                <select class="form-select" id="modalidad" name="modalidad" required>
                    <option selected value="presencial">Presencial</option>
                    <option value="virtual">Virtual</option>
                </select>
            </div>

            <div class="col-md-8">
                <label for="foto" class="form-label">Foto</label>
                <img src="{{ asset('storage').'/'.$postulante->foto }}" width="200px" alt="">
                <input type="file" class="form-control" id="foto" name="foto">
                <div class="invalid-feedback">
                    Ingrese Contraseña!
                </div>
            </div>

            <div class="row g-3">
                <div class="col-6">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>

                <div class="col-6">
                    <a class="btn btn-primary" href="{{ route('postulante.index') }}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
