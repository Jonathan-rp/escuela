@extends('layouts.app')

@section('template_title')
    Asignation
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asignation') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asignations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                <a href="escuela/public/menu" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Regresar al menu') }}
                                  </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Estudiante Id</th>
										<th>Materia Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignations as $asignation)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $asignation->estudiante_id }}</td>
											<td>{{ $asignation->materia_id }}</td>

                                            <td>
                                                <form action="{{ route('asignations.destroy',$asignation->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asignations.show',$asignation->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asignations.edit',$asignation->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $asignations->links() !!}
            </div>
        </div>
    </div>
@endsection
