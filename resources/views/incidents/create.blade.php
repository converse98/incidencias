@extends('layouts.app')

@section('content')
   <!--
    <div class="panel panel-default">
        <div class="panel-heading">Formulario de solicitud</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="funcionario">funcionario <em>Responsable de la información</em>  </label>   
                <input type="funcionario" name="funcionario" class="form-control" placeholder="Nombres/Razon social">
            </div>
            <div class="form-group">
                <h5>Datos del solicitante:</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nom_ape">Apellidos y Nombres / Razon Social</label>
                            <input type="nom_ape" name="nom_ape" class="form-control" placeholder="Nombres Apellidos">
                        </div>     
                    </div>  
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nom_ape">Documento de Identidad</label>
                            <input type="nom_ape" name="nom_ape" class="form-control" placeholder="D.N.I./C.E./Otros">
                        </div>     
                    </div>   
                </div>
                <h5>Domicilio:</h5>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="" name="" class="form-control" placeholder="AV/CALLE/JR/PSJ">
                        </div>     
                    </div>  
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="" name="" class="form-control" placeholder="N°/DPTO/INT">
                        </div>     
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="" name="" class="form-control" placeholder="URBANIZACION">
                        </div>  
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group"> 
                            <input type="" name="" class="form-control" placeholder="DISTRITO">
                        </div>  
                    </div>    
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="" name="" class="form-control" placeholder="PROVINCIA">
                        </div>     
                    </div>  
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="" name="" class="form-control" placeholder="DEPARTAMENTO">
                        </div>     
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="" name="" class="form-control" placeholder="E-MAIL">
                        </div>  
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group"> 
                            <input type="" name="" class="form-control" placeholder="TELEFONO">
                        </div>  
                    </div>    
                </div>
                <h5>Información Solicitada:</h5>
                <textarea name="info_solicitada" class="form-control" placeholder="Describa la solicitud brevemente"></textarea>
                <h5>Dependencia de la cual se requiere la información</h5>
                    <input type="" name="" class="form-control" placeholder="Escriba la Dependencia.">
                <h5>Forma de entrega de la información:</h5>
                    <div class="btn-group btn-group-justified" role="group" aria-label="true">
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Copia simple</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Diskette</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">CD</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">E-mail</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Otro</button>
                      </div>
                    </div>
                      <div class="form-group"> 
                            <label for="otro">En caso de seleccionar "Otro", por favor especifique el medio:</label>
                            <input type="otro" name="otro" class="form-control">
                       </div>
                <h5>OBSERVACIONES:</h5>
                <textarea name="obervaciones" class="form-control" placeholder="Describa alguna observacion"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Registrar solicitud</button>
            </div>         

        </div>

  

    </div>
-->
    <div class="panel panel-default">
       <div class="panel-heading">Reportar solicitud</div>
            <div class="panel-body">
                    
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
                            <label for="category_id">Categoria</label>
                            <select name="category_id" class="form-control">
                                <option value="">General</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="severity">Severidad</label>
                            <select name="severity" class="form-control">
                                <option value="M">Menor</option>
                                <option value="N">Normal</option>
                                <option value="A">Alta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="title" name="title" class="form-control" value="{{ old ('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripcion</label>
                            <textarea name="description" class="form-control">{{ old ('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Registrar solicitud</button>
                        </div>
                    </form>
            </div>
    </div>


@endsection
