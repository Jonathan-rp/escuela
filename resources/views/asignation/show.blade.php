@extends('layouts.app')

@section('template_title')
    {{ $asignation->name ?? 'Show Asignation' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Asignation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignations.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estudiante Id:</strong>
                            {{ $asignation->estudiante_id }}
                        </div>
                        <div class="form-group">
                            <strong>Materia Id:</strong>
                            {{ $asignation->materia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
