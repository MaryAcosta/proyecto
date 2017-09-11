@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Has iniciado sesión!</div>

                <div class="panel-body">
                <a href="{{ url('/forums') }}"> IR AL FORO</a>
                </div>


            </div>
        </div>
    </div>

</div>
@endsection
