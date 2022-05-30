@extends('layouts.app')

@section('template_title')
    Update Asignation
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Asignation</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asignations.update', $asignation->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('asignation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
