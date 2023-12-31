@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Sección Instituciones</h1>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Acciones</th>
                            <th scope="col">#</th>
                            <th scope="col">Descripción</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($instituciones as $institucion)
                            <tr>
                                <td class="text-center" width="20%">
                                    <a href="{{ route('instituciones.show', $institucion) }}" class="btn btn-primary btn-sm shadow-none"
                                            data-toggle="tooltip" data-placement="top" title="Ver Sexo">
                                        <i class="fa fa-book fa-fw text-white"></i></a>
                                    </a>
                                    <a href="" class="btn btn-success btn-sm shadow-none"
                                            data-toggle="tooltip" data-placement="top" title="Editar Sexo">
                                        <i class="fa fa-pencil fa-fw text-white"></i></a>
                                    </a>
                                    <form action="" method="POST" class="d-inline-block">
                                        <button id="delete" name="delete" type="submit"
                                                class="btn btn-danger btn-sm shadow-none"
                                                data-toggle="tooltip" data-placement="top" title="Eliminar Sexo"
                                                onclick="return confirm('¿Estás seguro de eliminar?')">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </button>
                                    </form>
                                </td>
                                <td scope="row">{{$institucion->codigo_institucion}}</td>
                                <td scope="row">{{$institucion->nombre_institucion}}</td>
                                <td scope="row">{{$institucion->siglas_institucion}}</td>
                                <td scope="row">{{$institucion->logo_institucion}}</td>
                                <td scope="row">{{$institucion->costo_institucion}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
