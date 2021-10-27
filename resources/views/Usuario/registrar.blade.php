<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Código Único de Registro
        </h2>
    </x-slot>

    <x-slot name="js">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark bg-opacity-25 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Contenido de la Página -->
                <div class="container">
                    <h1>Registro de Usuario</h1>
                    <form class="row g-3 needs-validation" method="POST" action="{{ route('usuario.store') }}" novalidate>
            
                        @csrf
                        <div class="col-md-4">
                            <label for="ci" class="form-label">C.I.</label>
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
                            <label for="apellidos" class="form-label">Apellidos(s)</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <label for="email" class="form-label">Correo</label>
                            <input type="mail" class="form-control" id="email" name="email" required>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <div class="invalid-feedback">
                                Ingrese Contraseña!
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <label for="val_nivel" class="form-label">Nivel</label>
                            <select class="form-select" id="val_nivel" name="nivel" required>
                              <option selected disabled value="">Seleccionar...</option>
                              <option value="1">1. Super usuario</option>
                              <option value="2">2. Usuario</option>
                            </select>
                            <div class="invalid-feedback">
                              Por favor selecciona un nivel válido.
                            </div>
                        </div>
            
                        <div class="row g-3">
                            <div class="col-6">
                                <button class="btn btn-primary" type="submit">Registrar</button>
                            </div>
            
                            <div class="col-6">
                                <a class="btn btn-primary" href="{{ route('usuario.index') }}">Cancelar</a>
                            </div>
                        </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
