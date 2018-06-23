@extends('layouts.app')
    
@section('content')
    <div class="panel panel-default">
       <div class="panel-heading">Dashboard</div>
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

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Proyecto</th>
                            <th>Categoría</th>
                            <th>Fecha de envío</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="incident_key">{{$incident->id}}</td>
                            <td id="incident_project">{{$incident->project->name}}</td>
                            <td id="incident_category">{{$incident->category_name}}</td>
                            <td id="incident_created_at">{{$incident->created_at}}</td>
                        </tr>
                    </tbody>

                    <thead>
                        <tr>
                            <th>Asignada a</th>
                            <th>Visibilidad</th>
                            <th>Estado</th>
                            <th>Severidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="incident_responsible"> {{$incident->support_name}}</td>
                            <td>Público</td>
                            <td id="incident_state">{{$incident->state}}</td>
                            <td id="incident_severity">{{$incident->severity_full}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Título</th>
                            <td id="incident_summary">{{$incident->title}}</td>
                        </tr>
                        <tr>
                            <th>Descripción</th>
                            <td id="incident_description">La app se cierra de vez en cuando</td>
                        </tr>
                        <tr>
                            <th>Adjuntos</th>
                            <td id="incident_attachment">No se han adjuntado archivos</td>
                        </tr>
                    </tbody>
                </table>

                <button class="btn btn-primary" style="" id="incident_btn_apply">
                    Atender incidencia
                </button>

</div>
</div>
@endsection

