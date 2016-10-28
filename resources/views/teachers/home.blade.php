@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">

            <h1>

                {{$teacher->degree}}
                {{$teacher->first_name}}
                {{$teacher->second_name}}

            </h1>

        </div>

        <div class="panel-body">

            <ul class="list-unstyled">

                <li> Publications: ...........</li>

            </ul>

        </div>
    </div>

    @if(Session::has('success'))

        <div class="alert alert-success text-center">
            {{Session::get('success')}}
        </div>

    @endif

    @if(Session::has('error'))

        <div class="alert alert-danger text-center">
            {{Session::get('error')}}
        </div>

    @endif
@stop
