@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MENU DE OPCIONES') }}</div>

                <div class="card-body">
                    
                    <a href="{{ route('estudiantes.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        {{ __('Crud Estudiantes') }}
                    </a>
                    <a href="{{ route('materias.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        {{ __('Crud Materias') }}
                    </a>
                    <a href="{{ route('asignations.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        {{ __('Crud Asignaciones') }}
                    </a>
                    <br>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection