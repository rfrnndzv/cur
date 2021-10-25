<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Código Único de Registro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Contenido de la Página -->
                <div class="container text-white bg-gray-500">
                    <h1>Registro de Postulante</h1>
                    <form class="row g-3 needs-validation" action="{{ route('postulante.store') }}" method="POST"
                        enctype="multipart/form-data" novalidate>

                        @csrf
                        <div class="col-md-4">
                            <label for="ci" class="form-label">C.I./DNI</label>
                            <input type="text" class="form-control" id="ci" name="ci" required>
                            <div class="invalid-feedback">
                                Ingrese su C.I.!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombres" class="form-label">Nombre(s)</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" required>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="apellidos" class="form-label">Apellido(s)</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="cpt" class="form-label">CPT</label>
                            <input type="mail" class="form-control" id="cpt" name="cpt" required>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="monto" class="form-label">Monto</label>
                            <input type="number" step="0.01" min="0.00" class="form-control" id="monto" name="monto"
                                required>
                            <div class="invalid-feedback">
                                Ingrese Contraseña!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            <div class="invalid-feedback">
                                Ingrese Contraseña!
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="carrera" class="form-label">Carrera</label>
                            <select class="form-select" id="carrera" name="carrera" required>
                                <option selected disabled value="">Seleccionar...</option>
                                <option value="medicina">Medicina</option>
                                <option value="enfermería">Enfermería</option>
                                <option value="nutrición">Nutrición y Dietética</option>
                                <option value="fisioterapia">Tec.Med. Fisioterapia y Kinesiología</option>
                                <option value="bioimagenología">Tec.Med. Bioimagenología</option>
                                <option value="laboratorio">Tec.Med. Laboratorio Clínico</option>
                                <option value="fonoaudiología">Prog. Fonoaudiología</option>
                                <option value="terapia">Prog. Terapia Ocupacional</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor seleccion una carrera.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="modalidad" class="form-label">Modalidad</label>
                            <select class="form-select" id="modalidad" name="modalidad" required>
                                <option selected value="presencial">Presencial</option>
                                <option value="virtual">Virtual</option>
                            </select>
                        </div>

                        <div class="row g-3">
                            <div class="col-6">
                                <button class="btn btn-primary" type="submit">Registrar</button>
                            </div>

                            <div class="col-6">
                                <a class="btn btn-primary" href="{{ route('postulante.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
