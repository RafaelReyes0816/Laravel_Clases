@extends('Layouts.plantilla')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-start g-4">
        <!-- Formulario -->
        <div class="col-lg-5 col-md-8 col-12">
            <div class="card shadow w-100 mb-4 mb-lg-0">
                <div class="card-body p-4">
                    <h2 class="mb-4 text-center">Encuesta de Servicios Básicos</h2>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('encuesta.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                            @error('nombre') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}" required>
                            @error('direccion') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono (opcional)</label>
                            <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
                            @error('telefono') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">¿Cuenta con los siguientes servicios?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="servicio_agua" value="0">
                                <input class="form-check-input" type="checkbox" name="servicio_agua" value="1" {{ old('servicio_agua') ? 'checked' : '' }}>
                                <label class="form-check-label">Agua</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="servicio_luz" value="0">
                                <input class="form-check-input" type="checkbox" name="servicio_luz" value="1" {{ old('servicio_luz') ? 'checked' : '' }}>
                                <label class="form-check-label">Luz</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="servicio_gas" value="0">
                                <input class="form-check-input" type="checkbox" name="servicio_gas" value="1" {{ old('servicio_gas') ? 'checked' : '' }}>
                                <label class="form-check-label">Gas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="servicio_internet" value="0">
                                <input class="form-check-input" type="checkbox" name="servicio_internet" value="1" {{ old('servicio_internet') ? 'checked' : '' }}>
                                <label class="form-check-label">Internet</label>
                            </div>
                            @error('servicio_agua') <br><small class="text-danger">{{ $message }}</small> @enderror
                            @error('servicio_luz') <br><small class="text-danger">{{ $message }}</small> @enderror
                            @error('servicio_gas') <br><small class="text-danger">{{ $message }}</small> @enderror
                            @error('servicio_internet') <br><small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <button type="submit" class="btn btn-success btn-lg w-100 mt-3">Enviar Encuesta</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tabla de resultados y buscador -->
        <div class="col-lg-7 col-12">
            <div class="card shadow w-100">
                <div class="card-body p-4">
                    <h3 class="mb-3 text-center">Resultados de la Encuesta</h3>
                    <form method="GET" class="mb-3 d-flex flex-wrap justify-content-end gap-2">
                        <input type="text" name="buscar" class="form-control w-auto flex-grow-1" placeholder="Buscar por nombre, dirección o teléfono" value="{{ request('buscar') }}">
                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Agua</th>
                                    <th>Luz</th>
                                    <th>Gas</th>
                                    <th>Internet</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($ciudadanos as $ciudadano)
                                    <tr>
                                        <td>{{ $ciudadano->nombre }}</td>
                                        <td>{{ $ciudadano->direccion }}</td>
                                        <td>{{ $ciudadano->telefono }}</td>
                                        <td>
                                            @if($ciudadano->servicio_agua)
                                                <span class="badge bg-success">Sí</span>
                                            @else
                                                <span class="badge bg-danger">No</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($ciudadano->servicio_luz)
                                                <span class="badge bg-success">Sí</span>
                                            @else
                                                <span class="badge bg-danger">No</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($ciudadano->servicio_gas)
                                                <span class="badge bg-success">Sí</span>
                                            @else
                                                <span class="badge bg-danger">No</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($ciudadano->servicio_internet)
                                                <span class="badge bg-success">Sí</span>
                                            @else
                                                <span class="badge bg-danger">No</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No hay resultados</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $ciudadanos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
