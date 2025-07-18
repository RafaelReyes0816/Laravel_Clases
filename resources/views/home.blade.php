@extends('Layouts.plantilla')

@section('title', 'Home')

@section('content')
    <p>Contenido principal</p>    
@endsection

@push('scripts')
    <script>
        console.log("Página home cargada");
    </script>
@endpush