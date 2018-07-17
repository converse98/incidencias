@extends('layouts.app')
    
@section('content')
    <div class="panel panel-primary">
       <div class="panel-heading">Ver solicitudes</div>
            <div class="panel-body">

               @if(session('notification'))
                    <div class="alert alert-success">
                        {{ session('notification') }}
                    </div>
                @endif
  
 
                <div class="form-group">


                            <label for="severity">Estado </label>
                            <select name="severity" class="form-control" id="state">
                                <option>Pendiente</option>
                                <option>En proceso</option>
                                <option>Resuelto</option>
                            </select>

                </div>

                
                <table class="table table-bordered" id="tablita">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripción</th>
                            <th>Fecha de creación </th>
                        </tr>
                    </thead>
                    <tbody id="dashboard_my_incidents">
                                
                            
                                @foreach($pending_incidents as $incident)
                                <tr>
                                    <td>
                                        {{$incident->title}} 
                                    </td>
                                    <td> {{ $incident->description }} </td>
                                    
                                    <td> {{$incident->created_at}} </td>
                                    
                                </tr>
                                @endforeach

                            </tbody>

                    
                </table>
            </div>
            </div>


                
        </div>
    </div>


@endsection

@section('scripts')
    <script src="/js/admin/projects/show.js"></script>
@endsection