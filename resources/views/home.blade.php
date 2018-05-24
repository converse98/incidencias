@extends('layouts.app')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">Dashboard</div>
             <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                     {{ session('status') }}
                    </div>
                @endif
                Haz accedido al sistema de gestión de solicitudes.
            </div>
    </div>
@endsection
