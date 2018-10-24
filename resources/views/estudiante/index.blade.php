@extends('layouts.layout')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Lista Estudiantes</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('estudiante.create') }}" class="btn btn-info" >Añadir Estudiante</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>RUT</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                </thead>
                                <tbody>
                                @if($estudiantes->count())
                                    @foreach($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{$estudiante->rut}}</td>
                                            <td>{{$estudiante->nombre}}</td>
                                            <td>{{$estudiante->apellido}}</td>
                                            <td><a class="btn btn-primary btn-xs" href="{{action('EstudianteController@edit', $estudiante->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                            <td>
                                                <form action="{{action('EstudianteController@destroy', $estudiante->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">

                                                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
                    {{ $estudiantes->links() }}
                </div>
            </div>
        </section>

@endsection
