@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
       <div class="panel-heading">Editar usuario</div>
            

        <div class="panel-body">
                @if(session('notification'))
                <div class="alert alert-succes">
                    {{ session('notification') }}
                </div>
                @endif

                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                    <form action="" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $project->name) }}">
                        </div>

                         <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" name="description" class="form-control" value="{{ old('description', $project->description)}}">
                        </div>

                        <div class="form-group">
                            <label for="start">Fecha de inicio</label>
                            <input type="date" name="start" class="form-control" value="{{ old('start', $project->start) }}">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Guardar Solicitud</button>
                        </div>

                    </form>

                    <div class="row">
                        <div class="col-md-6">
                            <p>Categorías<p>
                            <form action="/categorias" method="POST" class="form-inline">
                                <div class="form-group">
                                    <input type="text" placeholder="ingrese nombre" class="form-control">
                                </div>
                                    <button class="btn btn-primary">Añadir</button>
                            </form>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Proyecto</th>
                                        <th>Nivel</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Proyecto A</td>
                                        <td>Nivel 1</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary" title="Editar">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <a href="" class="btn btn-sm btn-danger" title="Dar de baja">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="col-md-6">
                            <p>Niveles<p>
                            <form action="/niveles" method="POST" class="form-inline">
                                <div class="form-group">
                                    <input type="text" placeholder="ingrese nombre" class="form-control">
                                </div>
                                    <button class="btn btn-primary">Añadir</button>
                            </form>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Proyecto</th>
                                        <th>Nivel</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Proyecto A</td>
                                        <td>Nivel 1</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary" title="Editar">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                            <a href="" class="btn btn-sm btn-danger" title="Dar de baja">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
    </div>
</div>

@endsection